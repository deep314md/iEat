<?php 

require('../config.php');


class SuperController{


    public function __construct(){
        // echo "\nsuper Controller\n";
        $bj = new Mysql('da');
    }
    
}


// new SuperController();