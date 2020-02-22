<?php
namespace Core;

use Core\Data;

class Controller
{

    /**
     * @param string $modelName
     * @return object
     */
    public function getModel(string $modelName)
    {
        require_once('./mvc/models/' . $modelName . '.php');
        return new $modelName;
    }

    /**
     * @param string $viewPath
     * @param Data $data
     */
    public function getView(string $viewPath, Data $data = null)
    {           
        require_once('./mvc/views/layout/' . $viewPath . '.php');
    }
}