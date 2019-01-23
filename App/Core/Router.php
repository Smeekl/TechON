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

                $internalRoute = preg_replace("~$uriPattern~",$path, $uri);
                $segments = explode('/', $internalRoute);
                $controllerName = '\Controllers\\'.array_shift($segments).'Controller';
                $actionName = 'action_'.array_shift($segments);
                $params = $segments;

                $result = call_user_func(array($controllerName, $actionName), $params);
                if ($result != null) {
                    break;
                }
                break;
            }
        }
    }

    static function ErrorPage404()
    {
        require_once 'App/Views/errors/404/404.php';
    }

    static function ExceptionError(){
        require_once 'app/Views/errors/Oops/oops.php';
    }
}