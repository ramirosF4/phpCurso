<?php

    /**
     * 
     * 
     * ¿Què qes una estructua de control
     * 
     * -es una estructura que nos ayuda con el flujo de ejecucion  
     * de nuestro codif 
     *  
     */
    // if - es una estrucutra condicional 
    //donde si la condicion es  verdadera se eecuta 

    /** 
     * 
     * su estrucura o declaracion  se cconforma de 
     * 
     * if (condicion ){
     * 
     * w}
    */

    if (true) {
        echo "ESta estructura se ejcuto bien"; 
        
    }

    echo "<hr>"; 

    $numero = 15; 
    if( $numero >10 ){
        //interpolacion
        echo "El numero $numero es mayor que 10"; 
    }
    echo "<hr>"; 
    // verificar si una variable esta definida y no esta vacia
    $texto = "hola que tal"; 
    if(isset($texto) && !empty($texto)){
        echo "Texto valido:  $texto"; 

    }
    echo "<hr>"; 
    // verificar si el usuario tiene acceso 

    $estaRegistrado = true; 
    if($estaRegistrado){
        echo "acesso conseguido al sistema"; 
    }
    

?>