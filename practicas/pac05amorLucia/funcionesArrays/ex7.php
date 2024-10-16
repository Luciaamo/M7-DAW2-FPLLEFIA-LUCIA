<?php

function obtenerMinimo($numeros) {
    return min($numeros);
}

$numeros = [10, 5, 20, 8, 15];
$minimo = obtenerMinimo($numeros);

echo "El valor mínimo es: " . $minimo;

?>