<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 14.01.2019
 * Time: 2:05
 */


namespace Core;
use PDO;

class DB
{

    protected static $instance = null;
    final private function __construct() {}
    final private function __clone() {}
    final private function __wakeup(){}

    public static function instance()
    {
        if (self::$instance === null)
        {
            $config = require_once 'App/config/config.php';
            define('DB_HOST', $config['host']);
            define('DB_NAME', $config['db']);
            define('DB_USER', $config['user']);
            define('DB_PASS', $config['pass']);
            define('DB_CHAR', $config['charset']);
            $opt  = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => TRUE
            );
            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHAR;
            self::$instance = new PDO($dsn, DB_USER, DB_PASS, $opt);
        }

        try {
            return self::$instance;
        }  catch (\PDOException $exception)
        {
            echo "Error".$exception->getMessage();
        }
    }
    public static function __callStatic($method, $args) {
        return call_user_func_array(array(self::instance(), $method), $args);
    }
}
