<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:41
 */

namespace Controllers;


Class MainController extends  \Core\Controller
{


    function action_index()
    {
       self::generate('index', 'index.php');
    }

}
