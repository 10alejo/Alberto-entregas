<?php
session_start();

if (isset($_POST['enviar'])) {

if (isset($_POST['nombre'])) {

    $nombre = $_POST['nombre'];
    $_SESSION['nombre'] = $nombre;
}

if (isset($_POST['apellidos'])) {

   $apellidos = $_POST['apellidos'];
   $_SESSION['apellidos'] = $apellidos;
}

if (isset($_POST['pais'])) {

    $pais = $_POST['pais'];
    $_SESSION['pais'] = $pais;
}

if (isset($_POST['genero'])) {

    $genero = $_POST['genero'];
    $_SESSION['genero'] = $genero;
}

header("Location: resultado.php");
exit();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recogida de Datos</title>
</head>
<body>


    <form action="index.php" method="post">
    <label for="">Introduce tu nombre:</label><input type="text" name="nombre"><br><br>
    <label for="">Introduce tus apellidos:</label><input type="text" name="apellidos"><br><br>
    <label for="">País:</label><input type="text" name="pais"><br><br>
    <label for="">Género:</label><input type="text" name="genero"><br><br>
    <input type="submit" name="enviar" value="Enviar">

    </form>



    
</body>
</html>