<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Examen</title>
</head>
<body>

    <form action="procesar.php" method="POST">
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" required>
        <br><br>
        
        <label for="descuento">Descuento (%):</label>
        <input type="number" name="descuento" id="descuento" required>
        <br><br>

        <button type="submit" name="btn_calcular">Ver precio</button>
    </form>

</body>
</html>