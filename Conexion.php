<?php

class  Db{

    private function __construct (){
        
    }
    public static function conectar(){
        //Usuario
        $user="udtlk68vhilazgjg";
        //Contraseña
        $pass="aE4izB3O3rAvAB5CZMYh";
        //Servidor (Url Donde esta nuestra base de datos)
        $server="bfoaidefugxz3dixvgsq-mysql.services.clever-cloud.com";
        //Nombre de la Base de datos
        $database="bfoaidefugxz3dixvgsq";
        //Conexión que se hace con uso de los elementos mencionados
        //anteriormente, donde se retorna la conexión la cual nos sirve
        //para traer y enviar los datos
        $conexion=new mysqli($server,$user,$pass,$database);
            return $conexion;
    }		
} 
?>

