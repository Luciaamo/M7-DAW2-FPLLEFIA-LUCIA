<?php

function combinarArrays($array1, $array2) {
    return array_merge($array1, $array2);
}

$array1 = ["manzana", "banana", "pera"];
$array2 = ["naranja", "uva", "kiwi"];
$arrayCombinado = combinarArrays($array1, $array2);

echo "Array combinado: ";
print_r($arrayCombinado);

?>