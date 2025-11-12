<?php
session_start();

$_SESSION["nombre"] = "Pepito Conejo";
$_SESSION["contador"] = 1;
print "<p> SESION 01 => El nombre es $_SESSION[nombre]</p>";
