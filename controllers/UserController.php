<?php 

require('../config.php');

class UserController extends User{


    public $valParams;
    public function __construct($valParams){

        $this->valParams = $valParams; 
        
        if ($this->valParams){

            parent::__construct($this->valParams);
            $this->conn  = new MySql($this->table);

        } else {

            echo "No data in array";

        }
        
    }  


    public function insert($sql = ""){
        // echo $sql;
        // return $this->conn->query($sql);
    }


    public function deleteUser(){
        /**
         * `delete` user from tabele
         * 
         */
        $this->conn->delete([]);

        
    }


    public function setUser(array $data){
        /** 
         * seteaza datele user-ului 
         */
        $this->conn->set([]);
        
    }



    
}


$arrData = [

    'name' => 'anatol',
    'age' => 36,
    'height' => 63
    
];


$user = new UserController($arrData);
// print_r($user);

$res = $conn->query("SELECT * FROM users");
foreach ($res as $row) {
    var_dump($row);  
}
