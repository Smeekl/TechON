<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 08.01.2019
 * Time: 19:40
 */

function __autoload($className){
    $array_paths  = array(
        '/Models/',
        '/Controllers/'
    );

    foreach ($array_paths as $path){
        $path = __DIR__ . $path . $className . '.php';
        if (is_file($path)) {
            include $path;
        }
    }
}