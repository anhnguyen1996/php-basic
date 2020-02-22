<?php
require_once('./mvc/core/Database.php');

use Core\Database;

class ProductModel extends Database
{   

    public function __construct()
    {
        $this->table = 'products';
        parent::__construct();
    }

    public function getProducts()
    {
        $sql = "SELECT * FROM $this->table";  
        return $this->executeQuery($sql);        
    }

    public function getTable()
    {
        return $this->table;
    }

}