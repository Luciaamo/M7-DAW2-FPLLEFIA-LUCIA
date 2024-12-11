<?php

function contarElementos($array) {
    return count($array);
}

$array = ["manzana", "banana", "pera", "naranja"];
$cantidad = contarElementos($array);

echo "El array contiene $cantidad elementos.";

?>