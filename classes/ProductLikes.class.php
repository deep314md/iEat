<?php

require('config.php');


class ProductLikes extends ProductEngine{

    public $user;
    public $produc_id;
    public $produc_add_id;

    public static $nameParams = [

        'user_id',
        'produc_id',
        'produc_add_id',

    ];  

 
    public function __construct(){

        $valParams = func_get_args()[0];
        ProductEngine::productController($this, self::$nameParams, $valParams);

    }



}




// $arr = [

//     'user_id' => 65,
//     'produc_add_id' => 3,
    
// ];


// $obj = new ProductLikes($arr);
// print_r($obj);