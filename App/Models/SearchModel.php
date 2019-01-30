<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 30.01.2019
 * Time: 4:17
 */
namespace Models;

use DataMapping\ProductMapper;


Class SearchModel extends \Core\Model
{
    private $product;

    public function __construct()
    {
        $this->product = new ProductMapper();
    }

    public function getElementByID($id)
    {
        return $data = $this->product->getProductByID($id);
    }
}