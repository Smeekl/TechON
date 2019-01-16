<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:41
 */

namespace Controllers;


use Core\Controller;
use Models\productModel;


Class productController extends  Controller
{

    function action_products(){
        $model = new productModel();
        $data = $model->getSortArrayByLowest();
        self::generate('productList','productList.php', $data);
    }

    function action_view($id)
    {
        $model = new productModel();
        $data = $model->getElementByID($id[1]);
        self::generate('product','product.php', $data);
    }

}
