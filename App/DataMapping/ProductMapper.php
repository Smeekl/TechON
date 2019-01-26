<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 14.01.2019
 * Time: 4:44
 */

namespace DataMapping;

use PDO;

class ProductMapper
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = \Core\DB::instance();
    }

    public function getAllProducts($sortType = null)
    {
        $query = $this->pdo->query('SELECT products.id, manufacturers.manufacturer_title, products.viewed, products.title, products.short_title, products.price, product_images.image, products.description, vendors.vendor_title, products.quantity
                                                FROM products
                                                INNER JOIN manufacturers ON manufacturers.id = products.manufacturer_id
                                                INNER JOIN product_images ON product_images.id = products.id AND product_images.sort_order = 1
                                                INNER JOIN vendors ON vendors.id = products.vendor_id;');
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }

    public function setIncrementedViewedCounter($id)
    {
        $query = $this->pdo->prepare('UPDATE products SET viewed = viewed + 1 WHERE id= :id');
        $query->execute(array(':id' => $id));
        unset($query);
    }

    public function getProductByID($id)
    {
        $query = $this->pdo->prepare('SELECT products.id, manufacturers.manufacturer_title, products.reviews, products.title, products.short_title, products.price, products.description, vendors.vendor_title, products.quantity
                                                FROM products
                                                INNER JOIN manufacturers ON manufacturers.id = products.manufacturer_id
                                                INNER JOIN vendors ON vendors.id = products.vendor_id
                                                WHERE products.id = :id;');
        $query->execute(array(':id' => $id));
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        unset($query);
        $this->setIncrementedViewedCounter($id);
        $images = $this->getProductImages($id);
        array_push($row, $images);
        return $row;
    }

    public function getProductImages($id)
    {
        $query = $this->pdo->prepare('Select product_images.image FROM product_images WHERE product_images.id = :id ORDER BY product_images.sort_order DESC');
        $query->execute(array(':id' => $id));
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
}
