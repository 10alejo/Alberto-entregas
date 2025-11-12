<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del formulario</title>
</head>
<body>

    <p>Nombre: <?php echo $_SESSION['nombre'] ?? '';?></p>
    <p>Apellidos: <?php echo $_SESSION['apellidos'] ?? '';?></p>
    <p>Pais: <?php echo $_SESSION['pais'] ?? '';?></p>
    <p>Género: <?php echo $_SESSION['genero'] ?? '';?></p>
    
</body>
</html>