<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 14.01.2019
 * Time: 4:44
 */

namespace DataMapping;

use PDO;

class SearchMapper
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = \Core\DB::instance();
    }

    /**
     * Return searched products info
     * @param $query_string
     * @return array
     */
    public function searchProducts($query_string)
    {
        $query_string = "%$query_string%";
        $query = $this->pdo->prepare('Select products.title,id,short_title FROM products WHERE title like ?;');
        $query->execute(array($query_string));
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
}
