<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 25.10.2018
 * Time: 11:38
 */
namespace Core;

class ErrorHandler
{
    public function __construct(){
        set_exception_handler([$this, 'exceptionHandler']);
    }
    public function exceptionHandler($e) {
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Exception', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    public function logErrors($message = '', $file = '', $line = '') {
        error_log("[" . date('Y-m-d H:i:s') . "] Error massage: {$message} | File: {$file} | Line: {$line}====================\n", 3, ROOT . '/tmp/errors.log');
    }

    public function displayError($errno, $errstr, $errfile, $errline, $responce = 404) {
        http_response_code($responce);
        if ($responce == 404) {
            require 'app/views/errors/404/404.php';
        }
    }
}