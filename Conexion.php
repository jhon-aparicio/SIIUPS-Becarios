<?php

class  Db{

    private function __construct (){
        
    }
    public static function conectar(){
        $user="udtlk68vhilazgjg";
        $pass="aE4izB3O3rAvAB5CZMYh";
        $server="bfoaidefugxz3dixvgsq-mysql.services.clever-cloud.com";
        $database="bfoaidefugxz3dixvgsq";
        $conexion=new mysqli($server,$user,$pass,$database);
            return $conexion;
    }		
} 
?>

