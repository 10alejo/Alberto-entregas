<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<code>
    <?php

        $numeroAzar = random_int(1,9);
        $contar_espacios = $numeroAzar -1;
        $contar_asceriscos = 1;

        echo "Número Generado $numeroAzar"."</br>";

        for ($i = 1; $i <= $numeroAzar; $i++) {

            for ($j = 1; $j <= $contar_espacios; $j++) {

                echo "&nbsp";

            }

            for ($k = 1; $k <= $contar_asceriscos; $k++) {

                echo "*";

            }

            $contar_asceriscos+=2;
            $contar_espacios--;
            echo "</br>";

        }

    ?>

</code>
</body>
</html>