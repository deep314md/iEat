<?php

spl_autoload_register('classes_Loader');

function classes_Loader($class){
    
    // o varianta pe viitor : de parsat toate directoriile 
    //si daca conincide denumirea fisierului cu clasa atunci ok. 
    // echo $class;
    
    $classes = ["Product", "ProductAdd", "ProductLikes", "User"];
    $controllers = [];
    $utils = ["MySql", "Prepare"];
    $path ="";
    
    if (in_array($class, $classes)) $path = __DIR__.DIRECTORY_SEPARATOR."classes/".$class.".class.php";    
    if (in_array($class, $controllers)) $path = __DIR__.DIRECTORY_SEPARATOR."contoller/".$class.".php";    
    if (in_array($class, $utils)) $path = __DIR__.DIRECTORY_SEPARATOR."utils/".$class.".php";    

    echo $path;
    if (is_file($path)){
        require_once $path;
    } else {

        die("Not found class : $class");

    }
}


//  Mysql config
define('USER_MYSQL', 'dumitru');
define('PASS_MYSQL', 'dumitru314');
define('HOST_MYSQL', 'localhost');
define('PORT_MYSQL', 3306);


//  tables name da

define('PRODUCTS', 'products');
define('PRODUCTS_ADD', 'products_add');
define('USER', 'user');
define('PRODUCTS_LIKES', 'products_likes');



 // constante despre unitati  de masurare

