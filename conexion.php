<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Debes enviar el formulario desde la página principal.");
}

$producto1 = trim($_POST["producto1"] ?? "");
$producto2 = trim($_POST["producto2"] ?? "");
$producto3 = trim($_POST["producto3"] ?? "");

$precio1 = $_POST["precio1"] ?? "";
$precio2 = $_POST["precio2"] ?? "";
$precio3 = $_POST["precio3"] ?? "";

if (
    $producto1 === "" || $producto2 === "" || $producto3 === "" ||
    !is_numeric($precio1) ||
    !is_numeric($precio2) ||
    !is_numeric($precio3) ||
    $precio1 < 0 || $precio2 < 0 || $precio3 < 0
) {
    exit("Verifica los nombres y los precios ingresados.");
}

$precio1 = (float) $precio1;
$precio2 = (float) $precio2;
$precio3 = (float) $precio3;

// Sumar los tres precios
$subtotal = $precio1 + $precio2 + $precio3;

// Calcular el descuento del 16 %
$descuento = $subtotal * 0.16;

// Calcular el total a pagar
$total = $subtotal - $descuento;

// Función para mostrar los valores en pesos colombianos
function pesos($valor) {
    return "$" . number_format($valor, 2, ",", ".");
}

// Evitar que los nombres ingresados se interpreten como HTML
function seguro($texto) {
    return htmlspecialchars(
        $texto,
        ENT_QUOTES,
        "UTF-8"
    );
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la compra</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eeeeee;
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
            color: #2457a7;
            text-align: center;
        }

        .total {
            color: #168044;
            font-size: 24px;
            font-weight: bold;
        }

        .dato {
            padding: 10px;
            background-color: #f3f6fa;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #2457a7;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Resultado de la compra</h1>

    <div class="dato">
        <strong>Producto 1:</strong>
        <?= seguro($producto1) ?><br>
        <strong>Precio:</strong>
        <?= pesos($precio1) ?>
    </div>

    <div class="dato">
        <strong>Producto 2:</strong>
        <?= seguro($producto2) ?><br>
        <strong>Precio:</strong>
        <?= pesos($precio2) ?>
    </div>

    <div class="dato">
        <strong>Producto 3:</strong>
        <?= seguro($producto3) ?><br>
        <strong>Precio:</strong>
        <?= pesos($precio3) ?>
    </div>

    <hr>

    <p>
        <strong>Subtotal:</strong>
        <?= pesos($subtotal) ?>
    </p>

    <p>
        <strong>Descuento del 16 %:</strong>
        <?= pesos($descuento) ?>
    </p>

    <hr>

    <p class="total">
        Total a pagar: <?= pesos($total) ?>
    </p>

    <a href="index.php">Volver al formulario</a>

</div>

</body>
</html>
