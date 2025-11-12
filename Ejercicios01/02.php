<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <?php

        $numero_aleatorio = random_int(1,9);

        echo "Número generado $numero_aleatorio"."</br>";

        for ($i = 1; $i <= $numero_aleatorio; $i++) {

        $color = ($i %2 == 0) ? "blue" : "red";

        for ($j = 1; $j <= $i; $j++) {

            echo "<span style= 'color: $color'>$i</span>";
        }

        echo "</br>";

        }
       
    ?>
    
</body>
</html>