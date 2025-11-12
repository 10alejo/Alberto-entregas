<?php

/**
 * Calcula la letra de control asociado a un nif
 * @param int $digitos
 * @return string
 */
function calculaNIF(int $digitos): String {

    $letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
    $pos = $digitos % 23;
    return $letras[$pos];
}

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Calcula NIF</title>
</head>

<body>

    <?php if ($_SERVER['REQUEST_METHOD'] == "GET") : ?>

        <form method='POST'>
            <p>DNI: <input type='number' name='dni'></p>
            <input type='submit' value='Enviar' />
        </form>
    <?php else : ?>

        <?php // Proceso el formulario 

        if (ctype_digit($_POST['dni'])) {

            echo "Tu NIF es: " . $_POST['dni'] . calculaNIF((int)$_POST['dni']);
        }

        else {

            echo "Error, el valor no es númerico";
        }
        ?>

    <?php endif ?>

</body>

</html>