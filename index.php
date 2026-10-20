<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de productos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eeeeee;
            margin: 0;
            padding: 30px;
        }

        .contenedor {
            background-color: white;
            max-width: 500px;
            margin: auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 10px #bbbbbb;
        }

        h1 {
            text-align: center;
            color: #2457a7;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background-color: #2457a7;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #173b75;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Tienda de productos</h1>

    <form action="conexion.php" method="POST">

        <h3>Producto 1</h3>

        <label for="producto1">Nombre del producto:</label>
        <input type="text" id="producto1" name="producto1"
               required maxlength="100">

        <label for="precio1">Precio:</label>
        <input type="number" id="precio1" name="precio1"
               min="0" step="0.01" required>

        <h3>Producto 2</h3>

        <label for="producto2">Nombre del producto:</label>
        <input type="text" id="producto2" name="producto2"
               required maxlength="100">

        <label for="precio2">Precio:</label>
        <input type="number" id="precio2" name="precio2"
               min="0" step="0.01" required>

        <h3>Producto 3</h3>

        <label for="producto3">Nombre del producto:</label>
        <input type="text" id="producto3" name="producto3"
               required maxlength="100">

        <label for="precio3">Precio:</label>
        <input type="number" id="precio3" name="precio3"
               min="0" step="0.01" required>

        <button type="submit">Enviar y calcular</button>

    </form>

</div>

</body>
</html>
