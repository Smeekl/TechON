<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:41
 */

namespace Controllers;


use Core\Controller;
use Models\productsModel;

Class productsController extends  Controller
{

    function action_products()
    {
     $model = new productsModel();
     $data = $model->getSortArrayByLowest();
     self::generate('productList','productList.php', $data);
    }

    function action_expensive(){
        $model = new productsModel();
        $data = $model->getSortArrayByHighest();
        self::generate('productList','productList.php', $data);
    }

    function action_cheap(){
        $model = new productsModel();
        $data = $model->getSortArrayByLowest();
        self::generate('productList','productList.php', $data);
    }

}
