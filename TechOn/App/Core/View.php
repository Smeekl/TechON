<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:14
 */

namespace Core;

class View
{
    //public $template_view; // здесь можно указать общий вид по умолчанию.

    public function generate($view,$content_view, $data = null)
    {
        include "app/views/$view/$content_view";
    }
}