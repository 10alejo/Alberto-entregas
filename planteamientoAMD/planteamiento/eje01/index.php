<?php
session_start();
include_once 'funciones.php';



if (isset($_SESSION['dni'])) {

    if (isset($_GET['orden'])) {
        if ($_GET['orden'] == 'salir') {

            // ALMACENAR LOS PUNTOS EN FICHERO Y CERRAR LA SESION
            // MOSTRAR VISTA DE INICIAL
            
            exit();
        }
        if ($_GET['orden'] == 'continuar' && $_SESSION['puntos'] > 0) {
            // CAMBIAR LOS  PUNTOS DE LA SESION CON VALORES ALEATORIA
            $_SESSION['puntos'] += 10;
            if ($_SESSION['puntos'] <= 0) {
                $_SESSION['puntos'] = 0;
            }
        }
    } 
    include 'vistas/puntos.php';
}




if ($_SERVER['REQUEST_METHOD'] == "GET" && !isset($_SESSION['dni'])) {
        include 'vistas/login.php';
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {


    if (isset($_SESSION['dni']) && isset($_SESSION['clavehash'])){

        if (!is_nan($_SESSION['puntos']) && $_SESSION['puntos'] < 0){
             include 'vistas/login.php';
            $msg = "los puntos tienen que tener un valor numerico ";
        
        }elseif ($_SESSION['dni'] != $this ->dni || $_SESSION['nombre'] != $this ->nombre ) {
                include 'vistas/login.php';
            $msg = "usuario o contraseña incorrecta"; 
            }else{
                include 'puntos.php';
            }
    }
    }else{
         include 'vistas/login.php';
            $msg = "usuario o contraseña incorrecta";
    }
 
   
    
    
    

?>


