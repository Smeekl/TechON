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
    public function generate($view,$content_view, $data = null)
    {
        include "app/views/$view/$content_view";
    }
}