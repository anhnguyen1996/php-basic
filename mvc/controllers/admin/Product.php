<?php

use Core\AdminController;
use Core\Login;
use Core\Data;

class Product extends AdminController
{

    private $login;

    public function __construct()
    {
        $this->login = new Login();
    }

    public function index()
    {
        if ($this->login->checkLogin()) {
            $this->callProductListView();
        } else {
            $this->login->callLoginView();
        }                
    }

    public function add()
    {
        if ($this->login->checkLogin()) {
            $this->callAddProductView();
        } else {
            $this->login->callLoginView();
        }        
    }

    public function insertProduct()
    {
        if ($this->login->checkLogin()) {
            echo true;
        } else {
            $this->login->callLoginView();
        }
    }

    public function edit($id)
    {
        echo 'Product edit ' . $id;        
    }

    public function delete($id)
    {
        echo 'Product delete ' . $id;        
    }

    private function callProductListView()
    {        
        $data = new Data();
        $data->setContentPage('product/index');
        $this->getView('index', $data);      
    }

    private function callAddProductView()
    {
        $data = new Data();
        $data->setContentPage('product/add');
        $this->getView('index', $data);  
    }

    private function callEditProductView()
    {
        
    }

    private function callDeleteProductView()
    {
        
    }
}