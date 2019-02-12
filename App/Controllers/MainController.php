<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:41
 */

namespace Controllers;


use Models\CategoryModel;

Class MainController extends  \Core\Controller
{


    function action_index()
    {
        $categories = new CategoryModel();
        $data['categories'] = $categories->getAllCategories();
       self::generate('index', 'index.php', $data);
    }

}
