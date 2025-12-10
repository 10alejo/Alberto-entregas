<?php
// Definimos la función
function calcularPrecioFinal($precio, $descuento) {
    // Calculamos el descuento (Precio - (Precio * Descuento / 100))
    // Tu fórmula anterior (precio * descuento) no tenía mucho sentido matemático para un precio final.
    $resultado = $precio - ($precio * ($descuento / 100));
    return $resultado;
}

// 1. Comprobamos si el usuario ha enviado el formulario
if (isset($_POST['btn_calcular'])) {

    // 2. Recogemos los datos (usamos POST porque el form es POST)
    // Usamos el operador de fusión null (??) por seguridad, o verificamos con isset
    $precio = $_POST['precio'];
    $descuento = $_POST['descuento'];

    // 3. Validamos que no estén vacíos
    if (empty($precio) || empty($descuento)) {
        echo "<h1>Error: Por favor rellena todos los campos.</h1>";
        echo "<a href='calculadora.php'>Volver</a>";
    } else {
        // 4. Llamamos a la función
        $precioFinal = calcularPrecioFinal($precio, $descuento);

        echo "<h1>Resultados:</h1>";
        echo "Precio original: " . $precio . "€<br>";
        echo "Descuento aplicado: " . $descuento . "%<br>";
        echo "<strong>Precio Final: " . $precioFinal . "€</strong>";
    }

} else {
    // Si alguien intenta entrar directamente a procesar.php sin enviar el formulario
    echo "Acceso no permitido. Debes enviar el formulario.";
}
?>