
<?php

$Producto1 = $_POST['Producto1'] ?? '';
$Precio1 = $_POST['Precio1'] ?? 0;

$Producto2 = $_POST['Producto2'] ?? '';
$Precio2 = $_POST['Precio2'] ?? 0;

$Producto3 = $_POST['Producto3'] ?? '';
$Precio3 = $_POST['Precio3'] ?? 0;

// Convertir los precios a números
$Precio1 = (float) $Precio1;
$Precio2 = (float) $Precio2;
$Precio3 = (float) $Precio3;

// Sumar los precios
$Suma = $Precio1 + $Precio2 + $Precio3;

// Calcular el descuento del 16 %
$Descuento = $Suma * 0.16;

// Calcular el total a pagar
$Total = $Suma - $Descuento;

echo "<h1>Información de los productos</h1>";

echo "El nombre del producto 1 es: "
    . htmlspecialchars($Producto1) . "<br>";

echo "El precio del producto 1 es: $"
    . number_format($Precio1, 2, ',', '.') . "<br><br>";

echo "El nombre del producto 2 es: "
    . htmlspecialchars($Producto2) . "<br>";

echo "El precio del producto 2 es: $"
    . number_format($Precio2, 2, ',', '.') . "<br><br>";

echo "El nombre del producto 3 es: "
    . htmlspecialchars($Producto3) . "<br>";

echo "El precio del producto 3 es: $"
    . number_format($Precio3, 2, ',', '.') . "<br><br>";

echo "<hr>";

echo "La suma de los precios es: $"
    . number_format($Suma, 2, ',', '.') . "<br>";

echo "El descuento del 16% es: $"
    . number_format($Descuento, 2, ',', '.') . "<br>";

echo "<h2>Total a pagar: $"
    . number_format($Total, 2, ',', '.') . "</h2>";

echo "<a href='index.php'>Volver al formulario</a>";

?>
