<?php

require_once('../config.php');

class MySqlConnection{ 

    private $dbname = DB_NAME; 
    private $host =  DB_HOST;
    private $port =  DB_PORT;
    private $user =  DB_USER;
    private $pass =  DB_PASS;


    public $connection;

    private $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function __construct(){
        
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;port=$this->port";
        $this->connection = new PDO($dsn, $this->user, $this->pass, $this->options);
    }



}
