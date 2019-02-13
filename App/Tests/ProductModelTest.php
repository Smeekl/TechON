<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 13.02.2019
 * Time: 12:55
 */

use Models\ProductModel;
use PHPUnit\Framework\TestCase;

class ProductModelTest extends TestCase
{

    private $productModel;

    public function setUp()
    {
        $this->productModel = new ProductModel();
    }

    public function testGetElementByID()
    {
        $this->assertEquals('Farberware_3.2-Quart_Oil', $this->productModel->getElementById(1)->getShortTitle());
        $this->assertEquals('9900', $this->productModel->getElementById(2)->getPrice());
        $this->assertEquals('Fluxx-Watt-UL2272-LED-Hoverboard', $this->productModel->getElementById(3)->getShortTitle());
    }

    public function testGetSortArrayByLowest()
    {
        $this->assertEquals('Farberware_3.2-Quart_Oil', $this->productModel->getSortArrayByLowest()[0]->getShortTitle());
        $this->assertEquals('9700', $this->productModel->getSortArrayByLowest()[1]->getPrice());
        $this->assertEquals('SAMSUNG_Galaxy_Tab_E_9.6_16GB', $this->productModel->getSortArrayByLowest()[2]->getShortTitle());
    }
}
