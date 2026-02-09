<?php 
    //Si se necesita al menos una iteracion segura 
    // despues una evaluacion usa do while 

    //validadcion simple 


    do {
        $respuesta = "no"; 
        echo "¿Continuar? (si/no): $respuesta"; 

    } while ($respuesta === "si");

    echo "<hr>"; 

    $contador = 1; 

    do {
        echo "ejecucion #$contador"; 
        $contador++; 
        echo "<br>"; 
    } while ($contador <= 3);

?>