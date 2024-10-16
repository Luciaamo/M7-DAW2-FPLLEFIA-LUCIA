<?php

function generarResumen($texto, $limite) {
    if (strlen($texto) > $limite) {
        return substr($texto, 0, $limite) . '...';
    } else {
        return $texto;
    }
}

$textoOriginal = "Este es un ejemplo de un texto que será acortado para ajustarse a un límite de caracteres.";
$limiteCaracteres = 50;

$resumen = generarResumen($textoOriginal, $limiteCaracteres);
echo $resumen;

?>