<?php

$vecesNavegador = 0;

if (isset($_COOKIE['veces'])) {

    $vecesNavegador = $_COOKIE['veces'];
}

$vecesNavegador++;
setcookie("veces", $vecesNavegador, time() + 3600 * 24 * 30 * 3);

$contenido = @file_get_contents("accesos.txt");

if ($contenido === false) {

    $contenido = 0;
}

echo " Total de accesos: " . $contenido;

$contenido = $contenido + 1;

file_put_contents("accesos.txt", $contenido);
