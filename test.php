<?php



class A {
    
    
    public static $d = 7;
    
    
    
}


class B extends A{
    
    public static $d = 500;

    public static function func(){

        echo " da ";
    }

}


class C extends B{
    
    // public static $d = 5;

}



$obj = new C();

echo C::$d;
C::func();