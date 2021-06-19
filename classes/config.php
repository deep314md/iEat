<?php

spl_autoload_register('classLoader');

function classLoader($class){
 $path = __DIR__.DIRECTORY_SEPARATOR.$class.".class.php";
 require_once $path;
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

