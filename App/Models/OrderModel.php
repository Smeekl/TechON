<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 16.01.2019
 * Time: 16:13
 */

namespace Models;

use Core\Model;
use Core\Response;
use DataMapping\OrderMapper;

/**
 * Class OrderModel
 * @package Models
 */
class OrderModel extends Model
{
    private $orderMapper;
    private $order;
    private $order_id;
    private $products;
    private $state;
    private $total_price;
    private $cartModel;

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }


    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $total_price
     */
    public function setTotalPrice($total_price): void
    {
        $this->total_price = $total_price;
    }


    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }


    /**
     * @param mixed $products
     */
    public function setProducts($products): void
    {
        $this->products = $products;
    }

    /**
     * OrderModel constructor.
     */
    public function __construct()
    {
        $this->orderMapper = new OrderMapper();
        $this->cartModel = new CartModel();
    }

    /**
     * @param $id
     */
    public function getOrders($id)
    {
        $this->order = $this->orderMapper->getOrders($id);
    }

    /**
     * @param $id
     * @return array
     */
    public function getOrderProducts($id)
    {
        return $this->orderMapper->getOrderProducts($id);
    }

    /**
     * @return float|int
     */
    public function updateTotalPrice()
    {
        $price = 0;
        foreach ($this->products as $product) {
            $price += $product->getPrice() * $product->getQuantity();
        }
        return $price;
    }

    public function createOrder($orderInfo)
    {
        if($_SESSION['isAuth']) {
            $order = $orderInfo;
            $this->orderMapper->createOrder($_SESSION['user_id']);
            $order_id = $this->orderMapper->lastId($_SESSION['user_id']);
            foreach ($order as $product){
                $this->orderMapper->addProductsToOrder($order_id, $product->id, $product->quantity);
            }
            $this->cartModel->deleteAllFromCart($_SESSION['user_id']);
        } else {
            Response::send(400, 'Authorize or register first!');
        }
    }
}