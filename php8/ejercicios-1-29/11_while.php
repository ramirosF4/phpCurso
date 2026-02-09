<?php

    //es una estructura de control de repeticion mientras su condicion sea verdadera 

    /* while(true){
        echo "Hola"; 
    }
 */



    //contar numeros 

    $numero = 1; 

    while ($numero <= 3){
        echo "el numero es $numero"; 
        echo "<p>"; 
        $numero = $numero + 1; 
    }


    //repetir un mensaje con while 

    $veces = 0; 
    while ($veces < 4){
        echo "$veces. - Hola que tal"; 
        echo "<br>"; 
        $veces++; 
    }
?>  