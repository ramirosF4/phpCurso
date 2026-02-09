<?php
    $coches = ["Deportivos", "Sedan", "camioneta"]; 

    for ($i=0; $i < count($coches) ; $i++) { 
        echo "en el indice $i esta " . $coches[$i]; 
        echo "<br>"; 
    }

    echo "<hr>"; 

    //recorrer indexados con foreach 

    $numeros  = [1,4,7,8,9,6,3]; 
    
    foreach ($numeros as $numero) {
        echo $numero; 
        echo "<br>"; 
    }

    foreach ($numeros as $indice => $value) {
        echo "el indice es  $indice y el valor es $valor"; 
        echo "<br>"; 
    }

     

?>