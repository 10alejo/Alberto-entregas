<?php

$contenido = "";

if (isset($_GET['fichero'])) {

    $fichero = $_GET['fichero'];

    if (is_readable($fichero)) {

        $tlinea = file($fichero);
        $contador = 0;
        $contenido = "<code><pre>";

        foreach ($tlinea as $linea) {
            $contador++;
            $contenido .= $contador . ":" . htmlspecialchars($linea);
            //$contarCaracteres += strlen($linea);
            
        }

        $contenido .= "</pre></code>";
        $contenido .= "Nº de líneas = " . count($linea) . "<br>";
        //$contenido .= "Nº de líneas = " .$contarCaracteres;
        $contenido .= "Nº de carácteres = " . filesize($fichero) . "</br>";
    } 
    
    else {

        $contenido = "El fichero " .$_GET['fichero']. " no éxiste o no se puede leer";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Fichero</title>
</head>

<body>

    <h1> Mostrando un Fichero </h1>

    <?php if ($contenido) : ?>

        <?= $contenido ?>

    <?php else: ?>

        <form>Fichero a mostrar: <input type="text" name="fichero"></form>

    <?php endif ?>

</body>

</html>