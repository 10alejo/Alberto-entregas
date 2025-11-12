<?php
// Funciones auxilires  
// ------------------------------------------------------------------
function estaVacio($valor)
{
    return empty(trim($valor));
}

function hayMayusculas($valor)
{

    for ($i = 0; $i < strlen($valor); $i++) {
        if (ctype_upper($valor[$i])) {
            return true;
        }
        return false;
    }
}

function hayMinusculas($valor)
{

    for ($i = 0; $i < strlen($valor); $i++) {
        if (ctype_lower($valor[$i])) {
            return true;
        }
        return false;
    }
}

function hayDigito($valor)
{

    for ($i = 0; $i < strlen($valor); $i++) {
        if (ctype_digit($valor[$i])) {
            return true;
        }
        return false;
    }
}

function hayNoAlfanumerico($valor)
{
    for ($i = 0; $i < strlen($valor); $i++) {
        if (!ctype_alnum($valor[$i])) {
            return true;
        }
        return false;
    }
}

function postvalor(string $elemento): string
{
    if (isset($_POST[$elemento])) {
        $resu = $_POST[$elemento];
    } else {
        $resu = "";
    }
    return $resu;
}
//--------------------------------------------------------------------
// Proceso los datos
$msg = "";
$registrado = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $msg = "Formulario procesado";
    $registrado = true;

    // No hay valores vacios

    foreach ($_POST as $campo => $valor) {

        if (estaVacio($valor)) {

           $campoVacio = $campo;
            break;

        }
    }

    // No es un email

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $msg = "El email no es correcto";

    }

    // Validando contraseña

    if ($_POST['contraseña1'] != $_POST['contraseña2']) {

        $msg = "Las contraseñas no coinciden";

    } elseif (strlen($_POST['contraseña1']) < 8) {

        $msg = "La contraseña debe tener al menos 8 caracteres";

    } elseif (!hayMayusculas($_POST['contraseña1'])) {

        $msg = "La contraseña debe tener al menos una mayúscula";

    } elseif (!hayMinusculas($_POST['contraseña1'])) {

        $msg = "La contraseña debe tener al menos una minúscula";

    } elseif (!hayDigito($_POST['contraseña1'])) {

        $msg = "La contraseña debe tener al menos un dígito";

    } elseif (!hayNoAlfanumerico($_POST['contraseña1'])) {

        $msg = "La contraseña debe tener al menos un carácter no alfanumérico";

    }

    // Contraseña Pasado todos los controles
    
    //$registrado = true;

} // PETICIÓN POST

?>
<html>

<head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
    <title>Registrar Usuario</title>
</head>

<body>
    <div id="container" style="width: 600px;">
        <div id="header">
            <h1>FORMULARIO DE REGISTRO</h1>
        </div>


        <div id="content">
            <?php if (!$registrado): ?>
                <form method="post">
                    <fieldset>
                        <legend>Datos para registrar:</legend>
                        Nombre:
                        <input type="text" name="nombre" placeholder="Nombre"
                            value="<?= postvalor('nombre') ?>" size="10"><br>
                        Correo electrónico:
                        <input type="text" name="email" placeholder="Correo electrónico"
                            value="<?= postvalor('email')  ?>" size="15"><br>
                        Contraseña
                        <input type="text" name="contraseña1" placeholder="Contraseña"
                            value="<?= postvalor('contraseña1')  ?>" size="10"><br>
                        Contraseña
                        <input type="text" name="contraseña2" placeholder="Contraseña"
                            value="<?= postvalor('contraseña2') ?>" size="10"> (Repetir )<br>
                        <input type="submit" value="Enviar" />
                        <input type="reset" value="Limpiar" />
                    </fieldset>
                </form>
                <?= $msg ?>
            <?php else: ?>
                Sus datos son correctos. <br><b> Ha sido registrado en el sistema.<b><br>
                    <?php endif ?>
        </div>
    </div>
</body>

</html>