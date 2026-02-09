<?php 

    //switch es una estructura de control multicasos
    

    $diaNumero = 3; 
    switch ($diaNumero) {
        case 1:
            //codigo o la respuesta
            echo "Es lunes"; 
            break;
        case 2:
            echo "Es martes"; 
            break;
        case 3:
            echo "Es miercoles"; 
            break;
        case 4:
            echo "Es jueves"; 
            break;
        case 5:
            echo "Es viernes"; 
            break;
        case 6:
            echo "Es sabado "; 
            break;
        case 7:
            echo "Es dominfo"; 
            break;
        default:
            echo "Numero incorrecto"; 
            break;
    }

?>