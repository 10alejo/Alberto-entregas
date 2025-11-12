<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        define('PI', 3.14);

        function esfera ($radio, $area_o_volumen) {

            $valor = 1;

            if ($area_o_volumen == 'area') {

                return 4 * PI * $radio * $radio;

            }

            else {

                return 4 / 3 * PI * $radio * $radio * $radio;

            }

         }
         
    ?>

</body>
</html>