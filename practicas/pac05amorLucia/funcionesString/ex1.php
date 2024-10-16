<?php

function convertirMayusculas($texto) {
    return strtoupper($texto);
}

$textoOriginal = "hola mundo";
$textoEnMayusculas = convertirMayusculas($textoOriginal);
echo $textoEnMayusculas;

?>