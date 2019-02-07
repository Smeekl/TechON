<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 14.01.2019
 * Time: 8:36
 */

namespace DataMapping;

use Models\CartModel;
use PDO;

class CartMapper
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = \Core\DB::instance();
    }

    public function getProduct($product_id){
        $query = $this->pdo->prepare('
            SELECT products.id,title,short_title,products.price, product_images.image, cart_product.user_id FROM products 
            INNER JOIN cart_product ON cart_product.product_id = products.id
            INNER JOIN product_images ON product_images.id = products.id AND product_images.sort_order = 1
            WHERE cart_product.product_id=:id;
        ');
        $query->execute(array(':id' => $product_id));
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getCartItems($id)
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

    public function addToCart(CartModel $cartObject)
    {
        $query = $this->pdo->prepare('
            INSERT INTO cart 
            (user_id)
            VALUES (:user_id);
            ');
        $query->execute(array(':user_id' => $cartObject->getUserId()));
        unset($query);
        $query = $this->pdo->prepare('
            INSERT INTO cart_product 
            (user_id, product_id) 
            VALUES (:user_id, :product_id);
            ');
        $query->execute(array(':user_id' => $cartObject->getUserId(), ':product_id' => $cartObject->getId()));
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

    public function deleteProductFromCart($user_id, $product_id){
        $query = $this->pdo->prepare("
        DELETE FROM cart_product
        WHERE product_id=:product_id AND user_id=:user_id;");
        $query->execute(array(':product_id'=>$product_id, ':user_id'=>$user_id));
        unset($query);
    }

    public function findProductInCart($user_id, $product_id){
        $query = $this->pdo->prepare('
            SELECT product_id
            FROM cart_product
            WHERE user_id=:user_id AND product_id=:product_id;
        ');
        $query->execute(array('product_id'=>$product_id, 'user_id'=>$user_id));
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }

    public function mapArrayToCart($data)
    {
        $productsOnCart = array();
        for ($i = 0; $i < count($data); $i++) {
            $cart = new CartModel();
            $cart->setTitle($data[$i]['title']);
            $cart->setUserId($data[$i]['user_id']);
            $cart->setId($data[$i]['id']);
            $cart->setImage($data[$i]['image']);
            $cart->setPrice($data[$i]['price']);
            $cart->setShortTitle($data[$i]['short_title']);
            array_push($productsOnCart, $cart);
        }
        return $productsOnCart;
    }
}
