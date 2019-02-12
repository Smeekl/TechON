<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 14.01.2019
 * Time: 4:44
 */

namespace DataMapping;

use Models\CategoryModel;
use PDO;

class CategoryMapper
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = \Core\DB::instance();
    }

    /**
     * Return all array categories objects
     * @return array
     */
    public function getAllCategories()
    {
        $query = $this->pdo->query('SELECT title,category_image,id FROM categories;');
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        $categories = $this->mapArrayToCategory($row);
        return $categories;
    }

    /**
     * Map array with categories on category object
     * @param $data
     * @return array
     */
    public function mapArrayToCategory($data)
    {
        $categories = array();
        for ($i = 0; $i < count($data); $i++) {
            $category = CategoryModel::create();
            $category->setTitle($data[$i]['title']);
            $category->setImage($data[$i]['category_image']);
            $category->setId($data[$i]['id']);
            array_push($categories, $category);
        }
        return $categories;
    }
}
