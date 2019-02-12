<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 28.01.2019
 * Time: 6:53
 */

namespace Controllers;

use Models\CartModel;

Class CartController extends \Core\Controller
{


    function action_cart()
    {
        $cartModel = new CartModel();
        $data = $cartModel->getProductsOnCart($_SESSION['user_id']);
        self::generate('cart', 'cart.php', $data);
    }

    function action_add()
    {
        $product_id = $_POST['product_id'];
        $cart = new CartModel();
        $cart->addToCart($_SESSION['user_id'], $product_id);
    }

    function action_delete()
    {
        $product_id = $_POST['product_id'];
        $cart = new CartModel();
        $cart->deleteFromCart($_SESSION['user_id'], $product_id);
    }
}


