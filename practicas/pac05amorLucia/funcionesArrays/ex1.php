<?php

function sumarArray($numeros) {
    return array_sum($numeros);
}

$numeros = [1, 2, 3, 4, 5];
$suma = sumarArray($numeros);
echo "La suma total es: " . $suma;

?>