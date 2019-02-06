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
    private $id;
    private $title;
    private $viewed;
    private $shortTitle;
    private $price;
    private $image;
    private $description;
    private $vendorName;
    private $quantityOnStock;

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setViewed($viewed): void
    {
        $this->viewed = $viewed;
    }

    public function getViewed()
    {
        return $this->viewed;
    }

    public function setShortTitle($shortTitle): void
    {
        $this->shortTitle = $shortTitle;
    }

    public function getShortTitle()
    {
        return $this->shortTitle;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setVendorName($vendorName): void
    {
        $this->vendorName = $vendorName;
    }

    public function getVendorName()
    {
        return $this->vendorName;
    }

    public function setQuantityOnStock($quantityOnStock): void
    {
        $this->quantityOnStock = $quantityOnStock;
    }

    public function getQuantityOnStock()
    {
        return $this->quantityOnStock;
    }

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

        return $products = $this->product->mapArrayToProduct($data);
    }

}
