<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:18
 */
require_once '../vendor/autoload.php';

if (isset($_COOKIE['PHPSESSID'])){
    session_start();
}

use Core\Router;


$router = new Router();
$router->start();