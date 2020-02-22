<?php

namespace Core;

require_once('./mvc/core/Database.php');

use Core\Database;

class Login
{
    public function checkLogin()
    {
        if ($this->checkToken()) {
            return true;
        }
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($this->checkExistsUser($username, $password)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function callLoginView()
    {
        require_once('./mvc/views/admin/login/index.php');
    }

    private function checkToken()
    {
        if (isset($_COOKIE['token'])) {
            $username = '';
            if (isset($_COOKIE['username'])) {
                $username = $_COOKIE['username'];
            }
            if ($_COOKIE['token'] == $_SESSION['token'][$username]) {
                return true;
            }
        }
        return false;
    }

    private function checkExistsUser($username, $password)
    {
        $result = false;
        if ($this->checkValidateInput($username, $password)) {

            $database = new Database();
            $connection = $database->getConnection();
            $sqlQuery = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
            $userRecords = mysqli_query($connection, $sqlQuery);
            if ($userRecords->num_rows == 1) {
                echo 'Login thanh cong<br/>';
                $result = true;
                $this->setTokenForSessionAndClientCookie($username);
            } else {
                echo 'Tai khoan khong ton tai<br/>';
            }
        }
        return $result;
    }

    private function checkValidateInput($username, $password)
    {
        return true;
    }

    private function setTokenForSessionAndClientCookie($username)
    {
        $newToken = $this->getToken(10);
        $_SESSION['token'][$username] = $newToken;
        setcookie('username', $username, time() + 60000);
        setcookie('token', $newToken, time() + 60000);
    }

    private function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet);

        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[random_int(0, $max - 1)];
        }

        return $token;
    }    
}
