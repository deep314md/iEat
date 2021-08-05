<?php 
class SuperController{

    public $page;
    public $pathTo;
    public $params;
    public $query;
    public $catchElements;


    public function __construct($query = ["page"=>"Login"])  {
        
        $this->page = $query['page'];
        $this->query = $query;
        
        $this->catchParams();
        $this->rootClass();
        $this->view();

    }


    public function catchParams(){

        $this->catchElements = (array) $_POST; 
        $this->query[] = $this->catchElements;
        unset($_POST);

    }


    public function rootClass(){

        if($this->page){
          
            $class = $this->page."Controller";
            $this->params = new $class($this->query);
            
        }

    }


    public function view(){

        // path to page

        $this->pathTo = PATH_PAGES."/pages/".strtolower($this->page).".php";
        $params = (array) $this->params;

        require(HEADER);
        require($this->pathTo);
        require(FOOTER);
        
    }


   
}

