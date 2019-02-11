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
    private $images;
    private $quantity;

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * @param mixed $viewed
     */
    public function setViewed($viewed): void
    {
        $this->viewed = $viewed;
    }

    /**
     * @return mixed
     */
    public function getShortTitle()
    {
        return $this->shortTitle;
    }

    /**
     * @param mixed $shortTitle
     */
    public function setShortTitle($shortTitle): void
    {
        $this->shortTitle = $shortTitle;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * @param mixed $vendorName
     */
    public function setVendorName($vendorName): void
    {
        $this->vendorName = $vendorName;
    }

    /**
     * @return mixed
     */
    public function getQuantityOnStock()
    {
        return $this->quantityOnStock;
    }

    /**
     * @param mixed $quantityOnStock
     */
    public function setQuantityOnStock($quantityOnStock): void
    {
        $this->quantityOnStock = $quantityOnStock;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images): void
    {
        $this->images = $images;
    }


    public function __construct()
    {
        $this->product = new ProductMapper();
    }

    public function getElementByID($id)
    {
        $data = $this->product->getProductByID($id);
        $product = $this->product->mapArrayToProduct($data)[0];
        return $product;
    }

    public function getImagesByID($id){
        $data = $this->product->getProductImages($id);
        $images = $this->product->mapArrayToProduct($data)[0];
        return $images;
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
