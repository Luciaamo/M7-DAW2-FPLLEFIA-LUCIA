<?php

function dividirPalabras($texto) {
    return explode(" ", $texto);
}

$textoEjemplo = "Hola mundo";
$arrayPalabras = dividirPalabras($textoEjemplo);

echo "Palabras en el texto:\n";
print_r($arrayPalabras);

?>