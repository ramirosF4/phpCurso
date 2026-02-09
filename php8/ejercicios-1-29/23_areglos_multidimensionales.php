<?php
    //arreglo multidimensional 
    //es un arreglo que cpontiene otros arreglos como elementos 

    #arreglo bidimensional 
    
    $estudiantes = [
        ["juan", 25, "ing"],
        ["Maria", 25, "Medico"]

    ]; 

    //acceder a los arreglos bidimensionales
    echo $estudiantes [0][0]; //juan
    echo "<br>"; 
    echo $estudiantes [1][2];  //maria profesion

    //arreglo multidimensional asociativo

    $productos = [
        "laptop" => [
            "marca" => "hp",
            "precio" => 8000, 
            "stock" => 5
        ],
        "mouse"=>[
            "marca" => "logitech ",
            "precio" => 500, 
            "stock" => 20
        ]
    ]; 
    echo $productos ["laptop"]["precio"]; 

?>