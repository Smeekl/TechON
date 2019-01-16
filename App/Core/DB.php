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
    public static function conn()
    {
        $host = '127.0.0.1';
        $db   = 'techon';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $settings = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            return $pdo = new PDO($dsn, $user, $pass, $settings);
        } catch (\PDOException $exception)
        {
            echo "Error".$exception->getMessage();
        }
    }
}
