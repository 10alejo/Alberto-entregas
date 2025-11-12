<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

    <?php
        
        $intentos = 0;
        $contador_6 = 0;
        $tiempo = microtime(true);

        do {

            $numero = random_int(1,10);
            $intentos++;

            if ($numero == 6) {

                $contador_6++;   
            }

            else {

                $contador_6 = 0;
            }

        }

        while ($contador_6 < 3);

        $tiempoTranscurrido = microtime(true) - $tiempo;

        echo "Han salido tres 6 seguidos tras generar " . $intentos . " números en " . ($tiempoTranscurrido * 1000) . " milisegundos.";
        
    ?>

    
</body>
</html>