<?php 

    //es una estrucrtua de control de bucle
    //esta tiene un inicio un fin y un incremento

    for ($i=1; $i <= 10; $i++) { 
        echo $i. "<br>"; 
    }

    //tabla de multiplicar 

    $numero = 2; 
    for ($i=1; $i <= 10; $i++) { 
        $tabla = $numero . "x". $i ."=".($numero * $i);
        echo $tabla . "<br>"; 
    }

?>