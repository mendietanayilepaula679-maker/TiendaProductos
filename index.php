<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de productos</title>
</head>
<body>

<h1>Formulario de productos</h1>

<form action="conexion.php" method="POST">

    <h3>Producto 1</h3>

    Nombre del producto:
    <input type="text" name="Producto1" required>
    <br><br>

    Precio del producto:
    <input type="number" name="Precio1" min="0"
           step="0.01" required>
    <br><br>

    <h3>Producto 2</h3>

    Nombre del producto:
    <input type="text" name="Producto2" required>
    <br><br>

    Precio del producto:
    <input type="number" name="Precio2" min="0"
           step="0.01" required>
    <br><br>

    <h3>Producto 3</h3>

    Nombre del producto:
    <input type="text" name="Producto3" required>
    <br><br>

    Precio del producto:
    <input type="number" name="Precio3" min="0"
           step="0.01" required>
    <br><br>

    <input type="submit" value="Enviar">

</form>

</body>
</html>
