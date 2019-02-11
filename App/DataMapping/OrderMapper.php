<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 14.01.2019
 * Time: 8:36
 */

namespace DataMapping;

use Models\OrderModel;
use Models\ProductModel;
use PDO;

class OrderMapper
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = \Core\DB::instance();
    }

    public function getOrders($user_id)
    {
        $query = $this->pdo->prepare('
            SELECT orders.id, state FROM orders
            WHERE orders.user_id = :user_id;
        ');
        $query->execute(array(':user_id' => $user_id));
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        $orders = $this->mapArrayToOrder($row);
        return $orders;
    }

    public function getOrderProducts($order_id)
    {
        $query = $this->pdo->prepare('
            SELECT orders.id, orders_products.product_id, quantity FROM orders
            INNER JOIN orders_products ON orders_products.order_id = orders.id
            WHERE orders.id = :order_id;
        ');
        $query->execute(array(':order_id' => $order_id));
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        $products = $this->getProductsInfo($row);
        return $products;
    }


    public function mapArrayToOrder($data)
    {
        $orders = array();
        for ($i = 0; $i < count($data); $i++) {
            $order = OrderModel::create();
            $order->setOrderId($data[$i]['id']);
            $order->setState($data[$i]['state']);
            $order->setProducts($order->getOrderProducts($data[$i]['id']));
            $order->setTotalPrice($order->updateTotalPrice());
            array_push($orders, $order);
        }
        return $orders;
    }

    public function getProductsInfo($data)
    {
        $products = array();
        for ($i = 0; $i < count($data); $i++) {
            $product = ProductModel::create();
            $product = $product->getElementByID($data[$i]['product_id']);
            $product->setQuantity($data[$i]['quantity']);
            array_push($products, $product);
        }
        return $products;
    }
}