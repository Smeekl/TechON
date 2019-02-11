<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 28.01.2019
 * Time: 6:53
 */

namespace Controllers;

use Models\OrderModel;

Class OrderController extends \Core\Controller
{
    function action_order()
    {
        $order = new OrderModel();
        $order->getOrders($_SESSION['user_id']);
        $orders = $order->getOrder();
        self::generate('order', 'order.php', $orders);
    }
}


