<?php

//  mysql config
define('DB_USER', 'dumitru');
define('DB_PASS', 'dumitru314');
define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_NAME', 'ieat');



//  tables name
define('PRODUCTS', 'products');
define('PRODUCTS_ADD', 'products_add');
define('USERS', 'users');
define('PRODUCTS_LIKES', 'products_likes');



 // constante despre unitati  de masurare



 spl_autoload_register('classes_Loader');

function classes_Loader($class){
    
    // o varianta pe viitor : de parsat toate directoriile 
    //si daca conincide denumirea fisierului cu clasa atunci ok. 
    // echo $class;
    
    $classes = ["Product", "ProductAdd", "ProductLikes", "User"];
    $controllers = [];
    $utils = ["MySql", "MySqlConnection", "Prepare"];
    $path ="";
    
    if (in_array($class, $classes)) $path = __DIR__.DIRECTORY_SEPARATOR."classes/".$class.".class.php";    
    if (in_array($class, $controllers)) $path = __DIR__.DIRECTORY_SEPARATOR."contoller/".$class.".php";    
    if (in_array($class, $utils)) $path = __DIR__.DIRECTORY_SEPARATOR."utils/".$class.".php";    

    if (is_file($path)){
        require_once $path;
    } else {

        die("Not found class : $class");

    }
}