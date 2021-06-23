<?php

//  mysql
define('DB_USER', 'dumitru');
define('DB_PASS', 'dumitru314');
define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_NAME', 'ieat');

//  tables
define('PRODUCTS', 'products');
define('PRODUCTS_ADD', 'products_add');
define('USERS', 'users');
define('PRODUCTS_LIKES', 'products_likes');

// paths
define("PATH_PAGES",__DIR__);
define("HEADER",__DIR__."/pages/header.php");
define("FOOTER",__DIR__."/pages/footer.php");

 // constante despre unitati  de masurare





 
spl_autoload_register('classes_Loader');

function classes_Loader($class){
    
    // o varianta pe viitor : de parsat toate directoriile 
    //si daca conincide denumirea fisierului cu clasa atunci ok. 
    // echo $class;
    
    $classes = ["Product", "ProductAdd", "ProductLikes", "User"];
    $controllers = ["SuperController","LoginController","UserController","ProductLikeController","ProductController", "ProductAddController"];
    $utils = ["MySql","Common"];
    $path ="";
    
    if (in_array($class, $classes))     $path = __DIR__."/classes/"  .$class.".class.php";    
    if (in_array($class, $controllers)) $path = __DIR__."/controllers/".$class.".class.php";    
    if (in_array($class, $utils))       $path = __DIR__."/utils/"    .$class.".class.php";    

    // echo $path . "  -  " . $class ."\n";
    if (is_file($path)){
        require_once $path;
    } else {

        die("Not found class : $class");

    }
}