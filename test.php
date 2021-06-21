<?php

class User {

    public $table = USERS;

    public $name;
    public $password;
    public $age;
    public $weight;
    public $height;

    public static $nameParams = [

         'name',
         'password',
         'age',
         'weight',
         'height'
    ];  

 
    public function __construct($valParams){

        Prepare::check($this, self::$nameParams, $valParams);

    }



}

$arr = [

    'name' => 'costea',
    'age' => 3,
    'weight' => 120
    
];


$obj = new User($arr);
print_r($obj);