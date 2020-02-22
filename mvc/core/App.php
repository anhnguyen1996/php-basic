<?php

class App
{
    private $controller = 'Home';
    private $action = 'index';
    private $params = [];    

    public function __construct()
    {
        $this->processUrL();
    }

    private function processUrL()
    {
        $url = '';        
        if (isset($_GET['url'])) {            
            $url = trim($_GET['url'], ' /');
            $urlArray = explode('/', $url);

            //Neu url la chi co 1 param va co duoi la .html            
            if(count($urlArray) == 1) {                
                foreach(DEFAULT_URL as $key => $value) {
                    if($urlArray[0] == $key) {
                        $url = $value; 
                        $urlArray = explode('/', $url);                                        
                    }
                }                                
            }

            //Truong hop binh thuong
            if (file_exists('./mvc/controllers/' . $urlArray[0] . '.php')) {
                //set Controller
                $this->controller = $urlArray[0];                                        
                unset($urlArray[0]);
                require_once('./mvc/controllers/' . $this->controller . '.php');                
                if (isset($urlArray[1])) {
                    $methodExists = false;
                    if (method_exists(new $this->controller, $urlArray[1])) {
                        //set Action
                        $this->action = $urlArray[1];                        
                        unset($urlArray[1]);
                        //set Params
                        $this->params = array_values($urlArray);
                    } else {
                        $this->controller = 'Home';                         
                        //echo '<br/>Log: Method not exists<br/>';
                    }                    
                }
            }                                 
        }
        require_once('./mvc/controllers/' . $this->controller . '.php');
        call_user_func_array([new $this->controller, $this->action], $this->params);  
    }
}