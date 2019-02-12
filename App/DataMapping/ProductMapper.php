<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 14.01.2019
 * Time: 4:44
 */

namespace DataMapping;

use Models\ProductModel;
use PDO;

class ProductMapper
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = \Core\DB::instance();
    }

    /**
     * Return info of all products on db
     * @param null $category
     * @return array
     */
    public function getAllProducts($category = null)
    {
        if (!empty($category)) {
            $query = $this->pdo->prepare(' SELECT products.id, manufacturers.manufacturer_title, products.viewed, products.title, products.short_title, products.price, product_images.image, products.description, vendors.vendor_title, products.quantity
                                                    FROM products
                                                    INNER JOIN manufacturers ON manufacturers.id = products.manufacturer_id
                                                    INNER JOIN product_images ON product_images.id = products.id AND product_images.sort_order = 1
                                                    INNER JOIN vendors ON vendors.id = products.vendor_id
                                                    WHERE products.category = :category;');
            $query->execute(array(':category' => $category));
        } else {
            $query = $this->pdo->query('SELECT products.id, manufacturers.manufacturer_title, products.viewed, products.title, products.short_title, products.price, product_images.image, products.description, vendors.vendor_title, products.quantity
                                                FROM products
                                                INNER JOIN manufacturers ON manufacturers.id = products.manufacturer_id
                                                INNER JOIN product_images ON product_images.id = products.id AND product_images.sort_order = 1
                                                INNER JOIN vendors ON vendors.id = products.vendor_id;');
        }
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }

    /**
     * Increase viewed counter on product
     * @param $id
     */
    public function setIncrementedViewedCounter($id)
    {
        $query = $this->pdo->prepare('UPDATE products SET viewed = viewed + 1 WHERE id= :id');
        $query->execute(array(':id' => $id));
        unset($query);
    }

    /**
     * Return all info of product
     * @param $id
     * @return array
     */
    public function getProductByID($id)
    {
        $query = $this->pdo->prepare('SELECT products.id, manufacturers.manufacturer_title, products.reviews, products.title, products.short_title,
                                                products.price, products.description, vendors.vendor_title, products.quantity, product_images.image
                                                FROM products
                                                INNER JOIN manufacturers ON manufacturers.id = products.manufacturer_id
                                                INNER JOIN product_images ON product_images.id = products.id AND product_images.sort_order = 1
                                                INNER JOIN vendors ON vendors.id = products.vendor_id
                                                WHERE products.id = :id;');
        $query->execute(array(':id' => $id));
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        unset($query);
        $this->setIncrementedViewedCounter($id);
        $images = $this->getProductImages($id);
        array_push($row[0], $images);
        return $row;
    }

    /**
     * Get all images of product
     * @param $id
     * @return array
     */
    public function getProductImages($id)
    {
        $query = $this->pdo->prepare('Select product_images.image FROM product_images WHERE product_images.id = :id ORDER BY product_images.sort_order DESC');
        $query->execute(array(':id' => $id));
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        $newRow = array();
        foreach ($row as $key) {
            array_push($newRow, $key['image']);
        }
        return $newRow;
    }

    /**
     * Map array with products info on product object
     * @param $data
     * @return array
     */
    public function mapArrayToProduct($data)
    {
        $products = array();
        for ($i = 0; $i < count($data); $i++) {
            $product = ProductModel::create();
            $product->setTitle($data[$i]['title']);
            $product->setDescription($data[$i]['description']);
            $product->setId($data[$i]['id']);
            $product->setImage($data[$i]['image']);
            $product->setPrice($data[$i]['price']);
            $product->setQuantityOnStock($data[$i]['quantity']);
            $product->setShortTitle($data[$i]['short_title']);
            $product->setVendorName($data[$i]['vendor_title']);
            $product->setViewed($data[$i]['viewed']);
            $product->setImages($this->getProductImages($product->getId()));
            array_push($products, $product);
        }
        return $products;
    }
}
