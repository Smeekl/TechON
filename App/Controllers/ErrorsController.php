<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 09.02.2019
 * Time: 2:30
 */

namespace Controllers;


Class ErrorsController extends \Core\Controller
{


    function action_404()
    {
        self::generate('errors', '404.php');
    }

}
