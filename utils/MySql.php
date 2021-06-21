<?php

require_once('../config.php');

class MySql extends MySqlConnection{ 

    public $conn;
    public $table;

    public function __construct($table =""){

        $this->table = $table;
        $this->conn = (new MySqlConnection())->connection;

    }


    public function insert(array $data){
        // va insera mai multe informatie odata
        // foreach(){}
        
        return true;
    }


}





// $arrData = [

//     'name' => 'anatol',
//     'age' => 36,
//     'height' => 63
    
// ];


// $conn = (new MySql())->conn;

// $res = $conn->query("SELECT * FROM users");
// // var_dump($res);
// foreach ($res as $row) {
//     var_dump($row);  
// }