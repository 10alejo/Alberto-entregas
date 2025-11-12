<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
    <?php

        $n1 = random_int(1,10);
        $n2 = random_int(1,10);

        echo " 1º Número: $n1 </br>";
        echo " 2º Número: $n2 </br>";
        
        echo "</br>";
        
        // Operaciones 
        
        echo "$n1 + $n2 = ".($n1+$n2)."</br>";
        echo "$n1 - $n2 = ".($n1-$n2)."</br>";
        echo "$n1 * $n2 = ".($n1*$n2)."</br>";
        echo "$n1 / $n2 = ".($n1/$n2)."</br>";
        echo "$n1 % $n2 = ".($n1%$n2)."</br>";
        echo "$n1 ** $n2 = ".($n1**$n2)."</br>";

    ?>

</body>
</html>