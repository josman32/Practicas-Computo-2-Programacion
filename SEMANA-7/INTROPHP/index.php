<?php
//comentario de una linea
/*
comenatario de varias lineas
*/
$nombre = "Manuel";
echo "Bienvenido@ " . $nombre;


//evaluar
if(isset($_POST["enviar"])){
    $seleccion = $_POST["seleccion"];
    INCLUDE $seleccion . ".php";
}else{
    INCLUDE "es.php";
}
?>

<!DOCTYPE html>
<html lang="en>
<head>
    <meta charset="UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <select name="seleccion" id="">
            <option value="en">English</option>
            <option value="es">Espanish</option>
        </select>
        <input type="submit" name="enviar" value="Seleccionar" />
    </form>
    <h1><?php echo TITLE; ?></h1>
    <h2><?php echo SUBTITLE; ?></h2>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
