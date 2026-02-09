<?php   

    $numeros = [1,2,3,4,5]; 
    //copntar elementos de un arreglo 
    echo "<h4> Contar elementos de un arreglo </h4>"; 
    echo count($numeros); 
    echo "<hr>"; 

    //agregar al final de un arreglo 
    array_push($numeros, 6);
   /*  echo "<pre>"; 
    var_dump($numeros); 
    echo"</pre>"; 
    //agregar ala inico del arreglo  */
    array_unshift($numeros, 0); 
   /*  echo "<hr>"; 
    echo "<pre>"; 
    var_dump($numeros); 
    echo"</pre>"; 
    echo "<hr>";  */
    //eliminar al final de un arreglo 
    $elimino = array_pop($numeros); 
    /* echo $elimino;  */
   /*  echo "<hr>"; 
    echo "<pre>"; 
    var_dump($numeros); 
    echo"</pre>"; 
    //eliminar el inicio 
    echo "<hr>"; */ 
    $elInicio = array_shift($numeros); 
    /* echo $elInicio; 
    echo "<pre>"; 
    var_dump($numeros); 
    echo"</pre>"; */

    //verificar si existe un valor 
    $personas = [
        "mombre"=>"ramiro",
        "curso" => "php 8"

    ]; 
    if(in_array("ramiro", $personas)){
        echo "el nombre esta en el arreglo";
    }else{
        "no se encuentra en el arreglo"; 
    }
    echo "<hr>"; 

    // dunciones de ordenamiento 
    sort($numeros); 
    var_dump($numeros); 
    //orden descendente
    echo "<hr>"; 
    rsort($numeros); 
    print_r($numeros);

    echo "<hr>"; 
    //convinar arreglos 
    $a = [1,2,3,]; 
    $b = [4,5,6];   
    $c = array_merge($a, $b); 
    print_r($c); 


    echo "<hr>"; 
    //buscar en un arreglo 
    $posicion = array_search(6, $b); 
    echo $b[$posicion]; 

?>