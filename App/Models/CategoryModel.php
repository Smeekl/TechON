<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 24.12.2018
 * Time: 13:52
 */

namespace Models;

use DataMapping\CategoryMapper;
use DataMapping\ProductMapper;


Class CategoryModel extends \Core\Model
{
    private $categoriesMapper;
    private $id;
    private $title;
    private $image;

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

    public function __construct()
    {
        $this->categoriesMapper = new CategoryMapper();
    }

    public function getAllCategories()
    {
        return $categories = $this->categoriesMapper->getAllCategories();
    }
}
