<?php
namespace Core;

use Core\Controller;
use Core\Data;

class AdminController extends Controller
{
    /**
     * @param string $viewPath
     * @param Data $data
     */
    public function getView(string $viewPath, Data $data = null)
    {           
        require_once('./mvc/views/admin/' . $viewPath . '.php');
    }
}