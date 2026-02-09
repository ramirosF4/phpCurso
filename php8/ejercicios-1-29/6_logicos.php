<?php  
    //operadodr logico AND

    var_dump(true && true);// true
    echo "<hr>"; 
    var_dump(true && false); //false
    echo "<hr>"; 
    var_dump(false && false ); //false
    echo "<hr>"; 
    var_dump(false && true ); //false

    //operaddor logico OR
    echo "<hr>"; 
    var_dump(true || true ); // true
    echo "<hr>";
    var_dump(true || false ); //true
    echo "<hr>";
    var_dump(false || true ); //true
    echo "<hr>";
    var_dump(false || false ); //false


    //operador XOR
     echo "<hr>"; 
    var_dump(true xor true ); // false
    echo "<hr>";
    var_dump(true xor false ); //true
    echo "<hr>";
    var_dump(false xor true ); //true
    echo "<hr>";
    var_dump(false xor false ); //false


    //operador NOT o negacion 

     echo "<hr>"; 
    var_dump(!true ); // false
    echo "<hr>";
    var_dump(!false  ); //true
    echo "<hr>";
?>