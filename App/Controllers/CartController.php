<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 28.01.2019
 * Time: 6:53
 */

namespace Controllers;


Class CartController extends \Core\Controller
{


    function action_cart()
    {
        $view = new \Core\View();
        $view->generate('cart', 'cart.php');
    }

}
