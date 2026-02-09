<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"); 
    if(empty($nombre = $_POST['nombre'])){
        echo "ELnombre es $nombre"; 
    }else{
        echo "Nomnadaste nombre!!!!";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Procesar formulario en el mismo script</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="">Escribe tu nombre</label>
        <br>
        <input type="text" name="nombre">
        <br>
        <button>Procesar</button>
    </form>
</body>
</html>