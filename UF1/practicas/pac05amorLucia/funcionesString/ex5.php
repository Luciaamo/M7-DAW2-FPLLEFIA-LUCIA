<?php

function invertirTexto($texto) {
    return strrev($texto);
}

$textoEjemplo = "Hola mundo";
$textoInvertido = invertirTexto($textoEjemplo);
echo "Texto invertido: \"$textoInvertido\"";

?>