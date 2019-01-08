<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:41
 */

namespace Controllers;


use Core\Controller;
use Core\View;
use Models\productListModel;

Class productsController extends  Controller
{


    function  __construct()
    {
        $this->model = new productListModel();
        $this->view = new View();
    }

    function action_index()
    {
     $data = $this->model->getSortArrayByLowest();
     $this->view->generate('productList','productList.php', $data);
    }

    function action_expensive(){
        $data = $this->model->getSortArrayByHighest();
        $this->view->generate('productList','productList.php', $data);
    }

    function action_cheap(){
        $data = $this->model->getSortArrayByLowest();
        $this->view->generate('productList','productList.php', $data);
    }

}
