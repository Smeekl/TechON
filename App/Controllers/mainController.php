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

Class mainController extends  Controller
{


    function  __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('index', 'index.php');
    }


}
