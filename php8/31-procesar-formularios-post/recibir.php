<?php
    /* var_dump($_POST); 
    $materia = $_POST['materia']; 

    if($materia == 'web'){
        echo "felicidades por estudiar"; 
    } */

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "procesado con exito!!!"; 
    }else{
        echo "EL formulario no se proceso!!"; 
        
    }
?>