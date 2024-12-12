<?php

function reemplazarPalabras($texto, $buscar, $reemplazar) {
    return str_replace($buscar, $reemplazar, $texto);
}

$textoEjemplo = "Hola mundo";
$palabraBuscar = "mundo";
$palabraReemplazar = "a todos";

$textoModificado = reemplazarPalabras($textoEjemplo, $palabraBuscar, $palabraReemplazar);
echo "Texto modificado: \"$textoModificado\"";

?>