<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 16.01.2019
 * Time: 16:13
 */

namespace Models;

use DataMapping\CartMapper;
use Core\Model;

class CartModel extends Model
{
    private $cart;
    private $product;

    public function __construct()
    {
        $this->cart = new CartMapper();
    }

    public function getProductsOnCart($id)
    {
        $this->getCountOfProducts($id);
        return $data = $this->cart->getCartItems($id);
    }

    public function getCountOfProducts($id)
    {
        if (!empty($this->cart->getCountProductsInCart($id))) {
            $_SESSION['products_in_cart'] = current($this->cart->getCountProductsInCart($id)[0]);
        } else {
            $_SESSION['products_in_cart'] = 0;
        }
    }

    public function addToCart($user_id, $product_id){
        $this->cart->addToCart($user_id, $product_id);
    }

}