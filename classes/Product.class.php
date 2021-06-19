<?php
require_once('config.php');

class Product extends ProductEngine{

    public static $productTabele = PRODUCTS;

    public $category;
    public $name;

    public $proteins;
    public $carbohydrates;
    public $lipids;

    public $K;
    public $Ca;
    public $Mg;
    public $Fe;
    public $Cu;
    public $Zn;

    public $vitA;
    public $vitB;
    public $vitC;
    public $vitD;
    public $vitE;
    public $vitK;

    public static $nameParams = [

        'category',
        'name',
        'proteins',
        'carbohydrates',
        'lipids',
        'K',
        'Ca',
        'Mg',
        'Fe',
        'Cu',
        'Zn',
        'vitA',
        'vitB',
        'vitC',
        'vitD',
        'vitE',
        'vitK'
    
    ];    

    public function __construct(){

        $valParams = func_get_args()[0];
        ProductEngine::productController($this, self::$nameParams, $valParams);

    }
    
}



// $arr = [

//     'category' => 'fructe',
//     'name' => 'mar',
//     'proteins' => 23,
//     'carbohydrates' => 15,
//     'Cu'=>5
// ];


// $obj = new Product($arr);
// print_r($obj);