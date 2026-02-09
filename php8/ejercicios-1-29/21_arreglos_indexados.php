<?php

    //es una estructura de datos que permite almacenar multiples valores

    //arreglos indexados 

    $frutas = array("manzana", "pera", "uva"); 
    echo "<pre>";
    var_dump($frutas[1]); 
    echo "</pre>"; 
    $frutas = array("manzana", "pera", "uva"); 
    echo "<pre>";
    var_dump($frutas); 
    echo "</pre>"; 
    //sintaxis corta de array 
    $colores = ["rojo", "negro", "blanco"];
    echo "<pre>";
    var_dump($colores); 
    echo "</pre>";  
    echo "<hr>"; 
    //agregar un elemento al fina ldel arreglo 
    $colores[]= "gris"; 
    $colores[1]= "azul";
    $colores[10]= "purpura";
    var_dump($colores);
    

?>