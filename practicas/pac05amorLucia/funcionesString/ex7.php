<?php

function eliminarEspacios($texto) {
    return trim($texto);
}

$textoEjemplo = "   Hola mundo   ";
$textoSinEspacios = eliminarEspacios($textoEjemplo);
echo "Texto sin espacios: \"$textoSinEspacios\"";

?>