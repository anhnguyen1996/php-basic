<?php

use Core\Data;
use Core\Controller;

class Home extends Controller
{           
    public function index()
    {
        //get Data from Model
        $productModel = $this->getModel('ProductModel');
        $productRecords = $productModel->getProducts();
        $productTableName = $productModel->getTable();
        
        //set Data into $data
        $data = new Data();
        $data->setContentPage('home/index');
        $data->setRecords($productTableName, $productRecords);

        //passing $data into view
        $this->getView('index',$data);        
    }
}