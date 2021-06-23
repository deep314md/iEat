<?php 

// require_once('../config.php');

class LoginController {

    public $valArray;
    public $params;
    public $table = USERS;

    public function __construct($valArray=[]){

        $this->valArray = $valArray;

        try {

            $this->conn = (new MySql())->conn;
        
        } catch (PDOException $e) {
            
            echo "No data in array";
        
        }


    }  


    public function checkUser(){

        $result = null;
        if(isset($this->valArray['user']) && isset($this->valArray['pass'])){

            $user = $this->valArray['user'];
            $pass = $this->valArray['pass'];

            $sql = "SELECT user, pass FROM $this->table WHERE user=$user AND pass=$pass";

            $result = $this->conn->query($sql);

        } else {

            echo "nothing in array dude";

        }
      
        return $result ? true : false;
    }

    
}


// $conn = (new MySql())->conn;

// $res = $conn->query("SELECT * FROM users");
// // var_dump($res);
// foreach ($res as $row) {
//     var_dump($row);  
// }