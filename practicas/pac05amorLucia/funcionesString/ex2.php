<?php

function contarPalabras($texto) {
    return str_word_count($texto);
}

$textoEjemplo = "Hola mundo";
$cantidadPalabras = contarPalabras($textoEjemplo);
echo "El texto contiene $cantidadPalabras palabras.";

?>