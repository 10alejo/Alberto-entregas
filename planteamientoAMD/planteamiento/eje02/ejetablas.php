<?php

// DATOS DE PRUEBA
$precios = [250, 10, 50, 100, 50, 25, 5, 200, 10, 300, 50];
// Definimos rangos: 'Barato' hasta 20 inclusive, 'Medio' hasta 100, 'Caro' más de 100
$categorias = ['Barato','Medio','Caro'];




// LLAMADAS A FUNCIONES


$res1 = agruparPorCategoria($precios, $categorias);
print_r($res1);

$preciosRandom = generarDatos(1,500,20);
$res2 = agruparPorCategoria($preciosRandom, $categorias);
print_r($res2);



/**
 * Agrupa los precios según si son menores o iguales al valor de la categoría
 * En array tiene que estar los datos ORDENADOS de mas baratos a más caros
 * @param array $precios Lista numérica
 * @param array $categorias Array asociativo con los nombre de las categorias
 * @return array Array multidimensional
 */
function agruparPorCategoria($precios, $categorias): array {
if ($precios <= 20){
$categorias = ['Barato'];
}elseif($precios <=100){
$categorias = ['Medio'];
}else{
 $categorias = ['Caro'];
}

      $resultado = [$categorias];
    
    return $resultado;
}

function generarDatos($min,$max, $nunelementos): array {
    $max = 300;
    $min = 5;
    $length = 11;
    $preciosRandom = random_int($min , $max);
    $nuneelementos = random_bytes($length);
   for ($i = 0; $i < $nuneelementos; $i ++) {
        $resultado = [$preciosRandom];
     }
         
    
    return $resultado;
}
