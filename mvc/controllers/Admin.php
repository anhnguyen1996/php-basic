<?php
use Core\Login;
use Core\Data;
use Core\AdminController;

class Admin extends AdminController
{
    private $login;

    public function __construct()
    {
        $this->login = new Login();
    }

    public function index()
    {
        if ($this->checkLogin()) {
            $this->callAdminView();
        } else {
            $this->login->callLoginView();
        }
    }

    public function product()
    {
        if ($this->checkLogin()) {
            $this->redirectBaseOnUrl();
        } else {
            $this->login->callLoginView();
        }
    }


    private function redirectBaseOnUrl()
    {
        $url = $_GET['url'];
        $urlArray = explode('/', $url);
        $class = ucfirst($urlArray[1]);
        unset($urlArray[0]);
        unset($urlArray[1]);
                
        if (file_exists('./mvc/controllers/admin/' . $class . '.php')) {
            require_once('./mvc/controllers/admin/' . $class . '.php');
            $action = 'index';
            $params = [];
            if (isset($urlArray[2])) {
                if (method_exists(new $class, $urlArray[2])) {
                    $action = $urlArray[2];
                    unset($urlArray[2]);
                    $params = array_values($urlArray);
                } else {
                    throw new Exception('Class ' . $class .  '.php not exist ' . $urlArray[2] . ' method!');
                }
            }
            call_user_func_array([new $class, $action], $params);
        } else {
            throw new Exception('Admin page not exist ' . $class .  '.php !');
        }
    }

    private function checkLogin()
    {
        return $this->login->checkLogin();
    }   

    private function callAdminView()
    {
        $data = new Data();
        $data->setContentPage('admin/index');
        $this->getView('index', $data);
    }
}
