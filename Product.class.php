<?php
require_once('config.php');

class Product{

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
    public $corect = false; 

    public static $params = [];
    public static $productParam = [

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

        self::$params = func_get_args()[0];

        if ($this->corect = $this->ckeckParam( self::$params)){
            $this->complete();
        };
    }
    

    public function ckeckParam($params){

        foreach ($params as $key => $val){

            if( !in_array($key, self::$productParam) ) return false;    

        }

        return true;
    }



    public function complete(){

        foreach (self::$params as $key => $value)  $this->$key = $value;
        
    }


}



$arr = [

    'categorya' => 'fructe',
    'name' => 'mar',
    'proteins' => 23,
    'carbohydrates' => 15,
];


$obj = new Product($arr);


print_r($obj);