<?php

function compararStrings($cadena1, $cadena2) {
    return strcmp($cadena1, $cadena2) === 0;
}

$cadena1 = "Hola, mundo";
$cadena2 = "Hola, mundo!";

if (compararStrings($cadena1, $cadena2)) {
    echo "Las cadenas son iguales.";
} else {
    echo "Las cadenas son diferentes.";
}

?>