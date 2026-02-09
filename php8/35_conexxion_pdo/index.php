<?php

    //diferencia con mysqlli -> se concecta con direccntes bases de datos 

    try {

        $servidor = "localhost"; 
        $usuario = "miusuarioAdmin"; 
        $password = "mipassword"; 
        $bd = "curso"; 

        $conexion = new PDO("mysql:host =$sercidor; dbname$bd", $usuario, $password); 
        $nombre = "juan"; 
        $email = "juan@gmail.com"; 

        $sql = "INSERT INTO t_usuario (nombre, email)
                VALUES (:nombre , :email"; 

        $stmt = $conexion -> prepare($sql); 
        $stmt ->bindParam(":nombre", $nombre); 
        $stmt ->bindParam(":email", $email); 
        echo "Usuario agregado con exito"; 
    } catch (PDOException $th) {
        echo "Error: ".$th ->getMessage(); 
    }
?>