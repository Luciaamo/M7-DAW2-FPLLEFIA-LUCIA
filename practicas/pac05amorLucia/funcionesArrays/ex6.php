<?php

function obtenerMaximo($numeros) {
    return max($numeros);
}

$numeros = [10, 5, 20, 8, 15];
$maximo = obtenerMaximo($numeros);

echo "El valor máximo es: " . $maximo;

?>