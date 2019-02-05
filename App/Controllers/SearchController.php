<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 30.01.2019
 * Time: 3:50
 */

namespace Controllers;

use Models\SearchModel;

class SearchController
{

    function action_search()
    {
        $result = new SearchModel();
        $result->searchProduct($_POST['query']);
    }
}