<?php
require_once "funciones.php";
define ('MAXFALLOS', 5);
session_start();

$msg = "";
$juegoAcabado = false;

// INICIO NO HAY PALABRA ELEGIDA
if (!isset($_SESSION['palabrasecreta'])) {
    $_SESSION['palabrasecreta'] = elegirPalabra();
    $_SESSION['letrasusuario'] = ""; // Inicialmente no tiene ninguna letra  
    $_SESSION['fallos'] = 0; // Inicialmente no hay ningún fallo
}

if (isset($_GET['letra'])) {

    $letra = strtoupper(($_GET['letra']));

    if (comprobarLetra($letra, $_SESSION['palabrasecreta'])) {

        $_SESSION['letrasusuario'] .= $letra;
    }

    else {

        $_SESSION['fallos']++; 

        if ($_SESSION['fallos'] >= MAXFALLOS) {

            $fallos = $_SESSION['fallos'];
            $msg = "Superado máximo número de fallos. Has perdido ";
            $juegoAcabado = true;
        }
    }
}

$palabraoculta = generaPalabraconHuecos($_SESSION['letrasusuario'], $_SESSION['palabrasecreta']);

if ($palabraoculta == $_SESSION['palabrasecreta']) {

    // Hemos ganado

    $msg = "<br> Enhorabuena has acertado.";
    $juegoAcabado = true;
    session_destroy();

    // Actualizamos la cookie

    if (isset($_COOKIE['partidasGanadas'])) {

        $partidasGanadas = $_COOKIE['partidasGanadas'] + 1;

        setcookie('partidasGanadas', $partidasGanadas, time() + 365*24* 3600);
    }

    else {

        setcookie('partidasGanadas', 1, time() + 365*24* 3600);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Ahorcado</title>
</head>
<body>

<?= $msg ?><br>
PALABRA : <?= $palabraoculta?><br>
Has cometido <?= $_SESSION['fallos']?> fallos<br><br>

<?php if (!$juegoAcabado) : ?>
<form>
    Introduzca una letra: 
    <input type="text" name="letra" size="1">
</form>

<?php else : ?>

    <a href ="index.php">Otra partida</a>

<?php endif; ?>
    
</body>
</html>