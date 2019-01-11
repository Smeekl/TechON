<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:41
 */

namespace Controllers;


Class mainController extends  \Core\Controller
{


    function action_index()
    {
        $view = new \Core\View();
        $view->generate('index', 'index.php');
    }

}