<?php 
// require_once('../config.php');


class SuperController{

    public $page;
    public $path;
    public $params;
    public $query;


    

        
    public function __construct($query = ["page"=>"Login"])  {
        
        $this->page = $query['page'];
        $this->query = $query;

        $this->root();

    }


    public function root(){

        if($this->page){

            $class = $this->page."Controller";
            $this->params = new $class((array) $this->query);
            
        }

    }


    public function view(){

        $this->path = PATH_PAGES."/pages/".$this->page.".php";

        $params = (array) $this->params;
      
        require_once(HEADER);
        require_once($this->path);
        require_once(FOOTER);

    }


   
}


// new SuperController("main");