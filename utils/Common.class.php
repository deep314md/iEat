<?php

require_once('../config.php');

class Common extends MySql{ 

    /**
     * Verifica ca informatia $key => $value este posibila si daca nu va fi confilict cu Baza
     */
    public static function check($obj, $nameParams, $valParams){

        if (self::ckeckParam($nameParams, $valParams )){
            return self::complete($obj, $valParams);
        };

    }

    public static function ckeckParam($nameParams, $valParams){

        foreach ($valParams as $key => $val){
            if( !in_array($key, $nameParams) ) return false;    
        }
        return true;
    }

    public static function complete($obj, $params){

        foreach ($params as $key => $value)  $obj->$key = $value;
        return $obj;
    }


}