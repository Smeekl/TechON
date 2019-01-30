<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 30.01.2019
 * Time: 10:19
 */

namespace Core;
$config = require_once 'App/config/Redirect.config.php';
define('HTML_PATH', $config['HTML_PATH']);
define('HTML_PATH_ROOT', $config['HTML_PATH_ROOT']);

class Redirect
{
    public static function url($url, $httpCode = 301)
    {
        if (!headers_sent()) {
            header("Location:".$url, TRUE, $httpCode);
            exit(0);
        }
        exit('<meta http-equiv="refresh" content="0; url=' . $url . '"/>');
    }

    public static function page($page)
    {
        self::url(HTML_PATH . $page);
    }

    public static function home()
    {
        self::url(HTML_PATH);
    }
}