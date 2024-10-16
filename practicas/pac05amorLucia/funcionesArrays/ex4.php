<?php

function buscarEnArray($array, $valor) {
    return in_array($valor, $array);
}

$array = ["manzana", "banana", "pera", "naranja"];
$valor = "kiwi";
$encontrado = buscarEnArray($array, $valor);

if ($encontrado) {
    echo "El valor '$valor' se encuentra en el array.";
} else {
    echo "El valor '$valor' no se encuentra en el array.";
}

?>