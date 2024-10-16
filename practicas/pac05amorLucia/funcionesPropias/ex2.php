<?php

function calcularTotal($precio, $cantidad, $impuesto) {
    $subtotal = $precio * $cantidad;
    $impuestoAplicado = $subtotal * ($impuesto / 100);
    $total = $subtotal + $impuestoAplicado;
    return $total;
}

$precioProducto = 50;
$cantidadProducto = 3;
$porcentajeImpuesto = 21;

$totalConImpuesto = calcularTotal($precioProducto, $cantidadProducto, $porcentajeImpuesto);
echo "El precio total con impuesto es: " . number_format($totalConImpuesto, 2), " €";

?>