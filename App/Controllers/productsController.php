<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:41
 */

namespace Controllers;


use Core\Controller;
use Models\ProductsModel;

Class ProductsController extends  Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new ProductsModel();
    }

    function action_products()
    {
     $data = $this->model->getSortArrayByLowest();
     self::generate('productList','productList.php', $data);
    }

    function action_expensive(){
        $data = $this->model->getSortArrayByHighest();
        self::generate('productList','productList.php', $data);
    }

    function action_cheap(){
        $data = $this->model->getSortArrayByLowest();
        self::generate('productList','productList.php', $data);
    }

}
