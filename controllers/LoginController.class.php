<?php 

// require_once('../config.php');

class Login {

    public function __construct($valParams){

        if ($this->valParams){

            $this->conn = (new MySql())->conn;

        } else {

            echo "No data in array";

        }
        
    }  

    
}


// $arrData = [

//     'name' => 'anatol',
//     'age' => 36,
//     'height' => 63
    
// ];


// $user = new UserController($arrData);
// // print_r($user);

// $res = $conn->query("SELECT * FROM users");
// foreach ($res as $row) {
//     var_dump($row);  
// }
