<?php
    //conexion mysqli

    $servidor = "localhost"; 
    $usuario = "miusuarioAdmin"; 
    $password = "mipassword"; 
    $bd = "curso"; 
    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);
    
    $nombre = "Ramiro"; 
    $email = "ramiro23@gmail.com";

    $sql = "INSERT INTO t_usuarios (nombre, email)
            VALUES ('$nombre', '$email' )"; 

    if(mysqli_query($conexion, $sql)){
        echo "usuario agregado con exito"; 

    }else{ 
        echo "el usuario no se agrego :( ". mysqli_error($conexion); 
    }
    mysqli_close($conexion); 
?>