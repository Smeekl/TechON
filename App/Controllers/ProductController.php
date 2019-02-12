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
use Models\CategoryModel;
use Models\ProductModel;


Class ProductController extends Controller
{
    function action_products($category = null)
    {
        $model = new ProductModel();
        $categories = new CategoryModel();
        $data['categories'] = $categories->getAllCategories();
        $data['products'] = $model->getSortArrayByLowest($category[1]);
        self::generate('productList', 'productList.php', $data);
    }

    function action_view($id)
    {
        $model = new ProductModel();
        $cartModel = new CartModel();
        $data['product'] = $model->getElementByID($id[1]);
        $data['cart'] = $cartModel->getProductsOnCart($_SESSION['user_id']);
        self::generate('product', 'product.php', $data);
    }
}
