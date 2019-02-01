<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 14.01.2019
 * Time: 8:36
 */

namespace DataMapping;

use PDO;

class OrderMapper
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = \Core\DB::instance();
    }

    public function getOrders($id)
    {
        $query = $this->pdo->prepare('
            SELECT products.id,title,short_title,products.price, product_images.image, cart_product.user_id FROM products 
            INNER JOIN cart_product ON cart_product.product_id = products.id
            INNER JOIN product_images ON product_images.id = products.id AND product_images.sort_order = 1
            WHERE cart_product.user_id = :id;
        ');
        $query->execute(array(':id' => $id));
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }

    public function addToCart($user_id, $product_id)
    {
        $query = $this->pdo->prepare('
            INSERT INTO cart 
            (user_id)
            VALUES (:user_id);
            ');
        $query->execute(array(':user_id' => $user_id));
        unset($query);
        $query = $this->pdo->prepare('
            INSERT INTO cart_product 
            (user_id, product_id) 
            VALUES (:user_id, :product_id);
            ');
        $query->execute(array(':user_id' => $user_id, ':product_id' => $product_id));
        unset($query);
    }

    public function getCountProductsInCart($id)
    {
        $query = $this->pdo->prepare('
            SELECT COUNT(*) 
            FROM products 
            INNER JOIN cart_product ON cart_product.product_id = products.id 
            INNER JOIN product_images ON product_images.id = products.id AND product_images.sort_order = 1 
            WHERE cart_product.user_id = :id
            GROUP BY cart_product.user_id;
            ');
        $query->execute(array(':id' => $id));
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }

}