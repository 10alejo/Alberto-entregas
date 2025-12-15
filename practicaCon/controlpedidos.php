<?php
include_once "datos/AccesoDatos.php";
include_once "datos/Cliente.php";
include_once "datos/Pedido.php";


$nombre = $_GET["nombre"];
$clave = $_GET["clave"];

$ac = AccesoDatos::getModelo();
$cli = $ac->getCliente($nombre,$clave);



?>