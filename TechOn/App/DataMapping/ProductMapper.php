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
        $this->pdo = \Core\DB::conn();
    }

    public function getAllProducts(){
        $query = $this->pdo->query('SELECT products.id, products.viewed, products.title, products.short_title, products.price, product_images.image, products.description, vendors.vendor_title, products.quantity
                                                FROM products
                                                INNER JOIN product_images ON product_images.id = products.id
                                                INNER JOIN vendors ON vendors.id = products.vendor_id;');
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }
}
