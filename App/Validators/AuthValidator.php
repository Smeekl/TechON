<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 09.02.2019
 * Time: 3:15
 */

namespace Validators;
use Core\Redirect;
use Core\Validator;
use Core\Response;

class AuthValidator
{
    public static function validateEmail($email) :bool
    {
        $email = Validator::clean($email);
        if (empty($email)) {
            Redirect::page('authentication');
            return false;
        }
        if (!empty($email)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                Response::send(403, 'Email address should be like a joe@example.com!');
                return false;
            }
        }
        return true;
    }

    public static function validatePassword($password)
    {
        $password = Validator::clean($password);

        if (empty($password)){
            Redirect::page('authentication');
            return false;
        }
        if (!empty($password)){
            if (!Validator::check_length(6, 20, $password)){
                Response::send(403, 'Your password must be between 8 and 30 characters');
            }
        }
    }
}