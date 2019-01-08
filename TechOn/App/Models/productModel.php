<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 24.12.2018
 * Time: 13:52
 */
require_once '../data/products.php';

Class ProductModel extends \Core\Model
{
    private $products;

    public function __construct()
    {
        $this->products = $products;
    }

    public function getElementByID($id)
    {

        foreach ($this->products as $key => $value) {
            if ($id == $this->products[$key]['id']) {
                return $this->products[$key];
            }
        }
    }
}

