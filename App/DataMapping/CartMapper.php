<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 14.01.2019
 * Time: 8:36
 */

namespace DataMapping;

use PDO;

class CartMapper
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = \Core\DB::instance();
    }

    public function getCartItems($id)
    {
        $query = $this->pdo->prepare('
            SELECT products.id,title,short_title,products.price, product_images.image, cart_product.user_id,count FROM products 
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
            INSERT INTO users 
            (email, password) 
            VALUES (:email, :password);
            ');
        $query->execute(array(':id' => $user_id, ':password' => password_hash($product_id, PASSWORD_DEFAULT)));
        unset($query);
    }

}