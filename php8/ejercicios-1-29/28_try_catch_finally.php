<?php   

    // es una estructura de control de eerores
    //permite ejecutar codigo que puede fallar 
    // captrura y mabneja errores  sin romper el programa 
    //funally es opcional pero recomendaddo 

    try {
        $a = 10; 
        $b = 0; 
        if ($b === 0){
            throw new Exception("No se puede dividir entre cero"); 
        }
        echo $a / $b; 
    } catch (\Throwable $th) {
        echo $th->getMessage(); 
    }finally{
        echo "operacion terminada"; 
    }

    echo "<hr>"; 

    try {
        $email = "correo.com"; 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("El ccorreo no es valido");
        }
        echo "correo valido $email"; 
    } catch (Exception $th) {
        echo "Error" . $th ->getMessage(); 
    }

?>