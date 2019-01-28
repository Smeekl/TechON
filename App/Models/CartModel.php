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

    public function getProductsOnCart($id){
        return $data = $this->cart->getCartItems($id);
    }

}