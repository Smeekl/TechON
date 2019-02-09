<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 08.02.2019
 * Time: 0:42
 */

namespace Core;


class Response
{
    public static function send(int $responseCode, $message)
    {
        http_response_code($responseCode);
        echo json_encode(array('message'=>$message));
    }
}