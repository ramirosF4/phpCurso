<?php

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $nombre = $_FILES["archivo"]["name"]; 
        $temporal = $_FILES["archivo"]["tmp_name"]; 

        $destino = "subidos/". $nombre; 
        echo $destino; 
        if(move_uploaded_file($temporal , $destino)){
            echo "Archivo subido con exito"; 
        }else{
            echo "No se puede subir archivos"; 
        }
    }
?>