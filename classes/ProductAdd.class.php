<?php
require_once('../config.php');


class ProductAdd extends Product{

    public $table = PRODUCTS_ADD;
    public $user;

    public function __construct($user, $params){

        $this->user = $user;        
        parent::__construct($params);
        
    }

}



$arr = [

    'category' => 'fructe',
    'name' => 'mar',
    'proteins' => 23,
    'carbohydrates' => 15,
];


$obj = new ProductAdd(1, $arr);


print_r($obj);