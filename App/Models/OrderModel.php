<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 16.01.2019
 * Time: 16:13
 */

namespace Models;

use DataMapping\OrderMapper;
use Core\Model;

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

    public function __construct()
    {
        $this->orderMapper = new OrderMapper();
    }

    public function getOrders($id)
    {
        $this->order = $this->orderMapper->getOrders($id);
    }

    public function getOrderProducts($id)
    {
        return $this->orderMapper->getOrderProducts($id);
    }

    public function updateTotalPrice()
    {
        $price = 0;
            foreach ($this->products as $product){
                $price += $product->getPrice() * $product->getQuantity();
            }
        return $price;
    }
}