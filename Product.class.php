<?php
require_once('config.php');

class Product{

    public $productTabele = PRODUCTS;  

    public $product; 

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


    public $productParam = [

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

        if (func_get_args()){

            $prod = $this->ckeckParam( func_get_args() );

        }

    }
    

    public function ckeckParam($prod){

        foreach ($prod as $key => $val){

            if( in_array($key, $this->productParam) ) {

                $this->$key = $val;                
            
            } else return false;


        }

        return true;
    }


}



$arr = [

    'category' => 'fructe',
    'name' => 'mar',
    'proteins' => 23,
    'carbohydrates' => 15,
];


$p = new Product($arr);
print_r($p);