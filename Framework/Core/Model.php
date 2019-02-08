<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:20
 */

namespace Core;

abstract class Model
{
    public function get_data()
    {
    }

    public static function create()
    {
        return new static();
    }
}