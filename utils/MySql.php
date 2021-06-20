<?php

require_once('../config.php');

class Mysql extends MySqlConnection{ 

    public $conn;
    public function __construct(){

        $this->conn = (new MySqlConnection())->connection;

    }

    public function insert(){}


}




$conn = (new MySql())->conn;

$res = $conn->query("SELECT * FROM users");

$res = $res->fetch();

var_dump($res);
