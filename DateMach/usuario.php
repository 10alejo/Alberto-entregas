<?php

 class Usuario{

    function __construct (private $nombre, private $clave, private $acceso){

    }
 }
 
 function  _get($name){
    if (property_exists($this, $name)){
        return $this -> $name;
    }
 }


?>