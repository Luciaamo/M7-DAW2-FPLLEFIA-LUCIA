<?php

function obtenerSubcadena($texto, $inicio, $longitud) {
    return substr($texto, $inicio, $longitud);
}

$textoEjemplo = "Hola mundo";
$inicio = 7;
$longitud = 11;

$subcadena = obtenerSubcadena($textoEjemplo, $inicio, $longitud);
echo "La subcadena es: \"$subcadena\"";

?>