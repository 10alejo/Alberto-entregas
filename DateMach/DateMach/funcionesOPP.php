<?php
include_once 'usuario.php';
/**
 * Checks if the provided username and password are valid.
 *
 * @param string $username The username to validate.
 * @param string $password The password to validate.
 * @return bool Returns true if the username and password are valid, false otherwise.
 */

function cargarTabla(): array {
    $tuser =[];
    $fich = fopen("usuarios.dat" , "r");
    $resu = false;
    while ($valores  = fgetcsv($fich)){
        $usr = new Usuario(valores[0], valores[1], valores[2]){
            $tuser[] = $usr;
        }
        
    }
}

function accesoValido($username, $password): bool {

    // COMPLETAR
    $fichero = fopen("usuarios.dat", "r");
    $resu = false;
    while ($valores = fgetcsv($fichero)) {
        if ($valores[0] == $username && password_verify($password, $valores[1])) {
            $resu = true;
            break;
        }
    }
    fclose($fichero);
    return $resu;
}

/**
 * Records a new access for the given username.
 *
 * @param string $username The username for which to record the access.
 * @return int The result of the access recording operation.
 */
function anotarNuevoAcceso($username):int {

    // COMPLETAR
    $fichero = fopen("usuarios.dat", "r");
    $resu = false;
    $usuarios = [];
    while ($valores = fgetcsv($fichero)) {
        if ($valores[0] == $username) {
            $valores[2] = $valores[2]+1;
            $resu = true;
        }
           $usuarios[] = $valores;
    }
    fclose($fichero);

    if ($resu){
        volcarDatos($usuarios);
    }
    return $resu;
}
/**
 * Vuelca los datos del array de ysyaruis en el fichero
 * 
 */
function volcarDatos($tabla){
$aux = [];
$fich = fopen("usuarios.dat", "w");
foreach ($tabla as $valores){
    fputcsv($fich, $valores); 
}
fclose($fich);
}

/**
 * Registers a user with a given username and time.
 *
 * @param string $username The username of the user to register.
 * @param int $time The time associated with the registration.
 */
function registra($username,$time) {

    // COMPLETAR 

    $ip = $_SERVER['REMOTE_ADDR']; 
    $nombre = $username;
    $tiempo = date("d-m-Y h:i", $time);
    $linea = $ip. ", " .$nombre . ", " .$tiempo . "\n";

    $resu = @file_put_contents("registro.log", $linea, FILE_APPEND);

    return $resu;
}