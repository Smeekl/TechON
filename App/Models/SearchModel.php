<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 30.01.2019
 * Time: 4:17
 */

namespace Models;

use Core\Redirect;
use DataMapping\SearchMapper;


Class SearchModel extends \Core\Model
{
    private $search;

    public function __construct()
    {
        $this->search = new SearchMapper();
    }


    /**Search products and return on ajax handler
     * @param $query
     * @return mixed
     */
    public function searchProduct($query)
    {
        if (empty($query)) {
            Redirect::page('404');
        } else {
            echo json_encode($this->search->searchProducts($query));
        }
    }
}