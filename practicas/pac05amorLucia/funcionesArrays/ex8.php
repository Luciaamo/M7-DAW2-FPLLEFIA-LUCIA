<?php

function eliminarDuplicados($array) {
    return array_unique($array);
}

$array = ["manzana", "banana", "pera", "manzana", "naranja", "pera"];
$arraySinDuplicados = eliminarDuplicados($array);

echo "Array sin duplicados: ";
print_r($arraySinDuplicados);

?>