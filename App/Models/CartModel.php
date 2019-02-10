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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getShortTitle()
    {
        return $this->short_title;
    }

    /**
     * @param mixed $short_title
     */
    public function setShortTitle($short_title): void
    {
        $this->short_title = $short_title;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
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