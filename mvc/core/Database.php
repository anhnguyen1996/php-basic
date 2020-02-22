<?php
namespace Core;

class Database
{
    private $connect;
    private $serverName = SERVERNAME_DB;
    private $userName = USERNAME_DB;
    private $password = PASSWORD_DB;
    private $database = DATABASE_DEFAULT_DB;
    protected $table;

    public function __construct()
    {
        $this->connect = mysqli_connect($this->serverName, $this->userName, $this->password);
        mysqli_select_db($this->connect, DATABASE_DEFAULT_DB);
        
        mysqli_query($this->connect, "SET NAMES 'utf8'");        
    }

    public function getConnection()
    {
        return $this->connect;
    }

    public function executeQuery($sqlQuery)
    {        
        return mysqli_query($this->connect, $sqlQuery);
    }

    public function getTable()
    {
        return $this->table;
    }
}