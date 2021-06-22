<?php 
// require_once('../config.php');


class SuperController{

    public $page;
    public $path;
    

    public function __construct($page="login"){

        $this->page = $page;
        $this->root();

    }


    public function root(){

        if($this->page){

            $this->path = PATH_PAGES."/pages/".$this->page.".php";

            require_once(HEADER);
            require_once($this->path);
            require_once(FOOTER);
            
        }

    }

   
}


// new SuperController("main");