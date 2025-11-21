<?php 

class Persona2 {
    private $nombre;
    private $edad;
    private $nota;

    function __construct(string $nombre, int $edad){
    $this -> nombre = $nombre;
    $this -> edad = $edad;
    $this -> nota = 7;
 
    }


function getnombre (){
    return $this->nombre;
}

function _get ($atributo){
    return $this->$atributo;
}



}

$p = new Persona2("Pepe", 45);
echo $p -> getnombre()."\n";
echo $p ->nota. "\n";
echo $p -> nombre. "\n";

?>