<?php   

    $persona = [
        "nombre" => "ramiro",
        "edad" => 21,
        "ciudad" => "CDMX", 
        "Profesion"=> "estudiante"

    ];

    foreach ($persona as $key => $value) {
        if(is_int($value)) {
            echo "el entero es $value"; 
        }
    }
?>