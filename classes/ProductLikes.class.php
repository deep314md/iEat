<?php

require('config.php');


class ProductLikes {

    public static $table = PRODUCTS_LIKES;

    public $user_id;
    public $produc_id;
    public $produc_add_id;

    public static $nameParams = [

        'user_id',
        'produc_id',
        'produc_add_id',

    ];  

 
    public function __construct(){

        $valParams = func_get_args()[0];
        Prepare::check($this, self::$nameParams, $valParams);

    }



}




// $arr = [

//     'user_id' => 65,
//     'produc_add_id' => 3,
    
// ];


// $obj = new ProductLikes($arr);
// print_r($obj);