<?php 

    //if else 
        //si no es verdadero hacemos esto 

    
        //verificar si un numero es positivo o negativo 
        $numero =-5; 
        if ($numero) {
            echo"tenemos un positivo o es cero y el numero es $numero";

           
        } else {
            echo "El numero $numero  es negativo!!!!! "; 
        }

        //veroficar si un usuario esta logeado 
        $usuarioLogeado = false; 

        if($usuarioLogeado){
            echo "Acceso permitido "; 

        }else{
            echo "No cuentas con las crendeciales para poder acceder"; 
        }
        


?>