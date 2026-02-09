<?php


    //ARREGLO ASOCIATIVO 

    /* 
    UTILIZAN CLAVES O (KEYS), estas soin personalizados en lugar de usar indices 

     */


    $persona = array(
        "nombre"=>"juan",
        "edad"=> "25",
        "ciudad" =>"cdmx"

    );

    $producto = [
        "nombre" => "laptop", 
        "precio"=> 1000, 
        "marca" => "Dell"
    ];  
    //accesos 
    echo $persona["nombre"]; 

    //agregar elementos 
    $persona["profesion" ] = "Ing"; 

?>