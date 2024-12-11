<?php

function filtrarMayores($numeros, $valor) {
    return array_filter($numeros, function($numero) use ($valor) {
        return $numero > $valor;
    });
}

$numeros = [10, 5, 20, 8, 15];
$valor = 10;
$numerosFiltrados = filtrarMayores($numeros, $valor);

echo "Números mayores a $valor: ";
print_r($numerosFiltrados);

?>