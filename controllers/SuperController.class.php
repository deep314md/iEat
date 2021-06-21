<?php 
// require_once('../config.php');


class SuperController{

    public $page;
    public $path;
    

    public function __construct($page=""){

        $this->page = $page;
        $this->root();

    }


    public function root(){

        if($this->page){

            $this->path = PATH_PAGES ."/pages/".$this->page.".php";
            require_once($this->path);
            
        }

    }

   
}


// new SuperController("main");