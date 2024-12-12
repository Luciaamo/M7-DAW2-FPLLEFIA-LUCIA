<?php

function dividirArray($array, $tamanio) {
    return array_chunk($array, $tamanio);
}

$array = ["manzana", "banana", "pera", "naranja", "uva", "kiwi"];
$tamanio = 2;
$arrayDividido = dividirArray($array, $tamanio);

echo "Array dividido en fragmentos de tamaño $tamanio: ";
print_r($arrayDividido);

?>