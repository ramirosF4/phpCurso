<?php 
  /*   if(condicion){

    }elseif(condicion){

    }else{
        
    } */


    //Determinar el dia de la semana segun un numero

    $dia = 3; 

    if($dia === 1){
        echo "Es lunes!!!!!"; 
    }elseif($dia === 2){
        echo("Es martes!!!!!");
    }elseif($dia === 3){
        echo("Es miercoles!!!!!");
    }elseif($dia === 4){
        echo("Es jueves!!!!!");
    }elseif($dia === 5){
        echo("Es viernes!!!!!");
    }elseif($dia === 6){
        echo("Es sabado!!!!!");
    }elseif($dia === 7){
        echo("Es domingo!!!!!");
    }else{
        echo "dia invalido"; 
    }

?>