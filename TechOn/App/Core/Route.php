<?php
namespace Core;

class Route
{
    static function start()
    {
        // контроллер и действие по умолчанию
        $controller_name = 'products';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }


        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        if (!empty($routes[1] = 'product')){
            $productID = $routes[2];
        }


        $model_name = $controller_name . 'Model';
        $controller_name = $controller_name . 'Controller';
        $action_name = 'action_' . $action_name;

        echo $controller_name;
        echo $action_name;

        $model_file = $model_name . '.php';
        $model_path = "app/models/" . $model_file;
        if (file_exists($model_path)) {
            include "app/models/" . $model_file;
        }

        $controller_file = $controller_name . '.php';
        $controller_path = "app/controllers/" . $controller_file;
        if (file_exists($controller_path)) {
            include "app/controllers/" . $controller_file;
        } else {
            Route::ErrorPage404();
        }


        $controller = new $controller_name;
        $action = $action_name;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }

    }
    static function ErrorPage404()
    {
        require_once 'app/views/errors/404/404.php';
    }
}