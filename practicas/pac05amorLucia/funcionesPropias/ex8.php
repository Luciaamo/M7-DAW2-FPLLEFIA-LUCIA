<?php

function calcularDescuento($precioOriginal, $descuento) {
    $montoDescuento = $precioOriginal * ($descuento / 100);
    $precioFinal = $precioOriginal - $montoDescuento;
    return round($precioFinal, 2);
}

$precioOriginal = 100;
$porcentajeDescuento = 20;

$precioFinalConDescuento = calcularDescuento($precioOriginal, $porcentajeDescuento);
echo "El precio final con descuento es: " . $precioFinalConDescuento, " €";

?>