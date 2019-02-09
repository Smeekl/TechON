<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 09.02.2019
 * Time: 4:18
 */

namespace Core;


class Validator
{

    public static function clean($value): string
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        return $value;
    }

    public static function check_length($min, $max, $value = '') :bool
    {
        $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
        return !$result;
    }

}