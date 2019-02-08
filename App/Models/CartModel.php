<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 16.01.2019
 * Time: 16:13
 */

namespace Models;

use Core\Model;
use Core\Redirect;
use DataMapping\CartMapper;

class CartModel extends Model
{
    private $cart;

    private $id;
    private $title;
    private $short_title;
    private $price;
    private $image;
    private $user_id;

    public function __construct($product_id = null, $user_id = null)
    {
        $this->cart = new CartMapper();
        $this->setUserId($user_id);
        $this->setId($product_id);
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setShortTitle($shortTitle)
    {
        $this->short_title = $shortTitle;
    }

    public function getShortTitle()
    {
        return $this->short_title;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getProductsOnCart($id)
    {
        $this->getCountOfProducts($id);
        $data = $this->cart->getCartItems($id);
        $productsOnCart = $this->cart->mapArrayToCart($data);
        return $productsOnCart;
    }

    public function getCountOfProducts($id)
    {
        if (!empty($this->cart->getCountProductsInCart($id))) {
            $_SESSION['products_in_cart'] = current($this->cart->getCountProductsInCart($id)[0]);
        } else {
            $_SESSION['products_in_cart'] = 0;
        }
    }

    public function addToCart($user_id, $product_id)
    {
        if (empty($this->cart->findProductInCart($user_id, $product_id))) {
            $this->cart->addToCart(new CartModel($product_id, $user_id));
            $res = $this->cart->getProduct($product_id);
            echo json_encode($res);
        } else {
            Redirect::page('cart');
        }
    }

    public function deleteFromCart($user_id, $product_id)
    {
        if (!empty($user_id)) {
            $this->cart->deleteProductFromCart($user_id, $product_id);
        }
    }

}