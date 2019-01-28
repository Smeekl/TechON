<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:41
 */

namespace Controllers;


use Core\Controller;
use Models\CartModel;
use Models\ProductModel;


Class ProductController extends Controller
{
    function action_products()
    {
        $model = new ProductModel();
        $data = $model->getSortArrayByLowest();
        self::generate('productList', 'productList.php', $data);
    }

    function action_view($id)
    {
        $model = new ProductModel();
        $cartModel = new CartModel();
        $data = $model->getElementByID($id[1]);
        array_push($data, $cartModel->getProductsOnCart($_SESSION['user_id']));
        self::generate('product', 'product.php', $data);
    }
}
