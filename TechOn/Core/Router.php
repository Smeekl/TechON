<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 04.01.2019
 * Time: 13:24
 */
namespace Core;


Class Router{
    private $routes;

    public function __construct()
    {
        $routesPath = 'App/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI(){
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function start(){
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path){
            if (preg_match("~$uriPattern~", $uri)){
                $segments = explode('/', $path);
                $controllerName = '\Controllers\\'.array_shift($segments).'Controller';

                $cwd = getcwd();
                $actionName = 'action_'.array_shift($segments);

                $controllerPath = 'App/Controllers/' .
                    $controllerName . '.php';

                if (file_exists($controllerPath)) {
                    include $controllerPath;
                }

                $controllerObject = new $controllerName();


                if (method_exists($controllerObject, $actionName)) {
                    $controllerObject->$actionName();
                } else {
                    Route::ErrorPage404();
                }
                break;
            } else {
                Route::ErrorPage404();
            }
        }
    }

    static function ErrorPage404()
    {
        require_once 'App/Views/errors/404/404.php';
    }
}