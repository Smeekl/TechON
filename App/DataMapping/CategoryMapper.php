<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 14.01.2019
 * Time: 4:44
 */

namespace DataMapping;
use PDO;

class CategoryMapper
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = \Core\DB::instance();
    }

    public function getAllCategories($sortType = null){
        $query = $this->pdo->query('SELECT * FROM categories;');
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }

}
