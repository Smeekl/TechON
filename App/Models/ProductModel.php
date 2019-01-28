<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 24.12.2018
 * Time: 13:52
 */

namespace Models;

use DataMapping\ProductMapper;


Class ProductModel extends \Core\Model
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

    public function getSortArrayByLowest()
    {
        $data = $this->product->getAllProducts();
        function array_sorter($key)
        {
            return function ($a, $b) use ($key) {
                return strnatcmp($a[$key], $b[$key]);
            };
        }

        usort($data, array_sorter('price'));

        return $data;
    }


}
