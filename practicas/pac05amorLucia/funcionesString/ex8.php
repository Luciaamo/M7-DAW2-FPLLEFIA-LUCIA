<?php

function contarOcurrencias($texto, $palabra) {
    return substr_count($texto, $palabra);
}

$textoEjemplo = "Hola mundo Hola, espero que estes bien. Hola.";
$palabraBuscar = "Hola";

$cantidadOcurrencias = contarOcurrencias($textoEjemplo, $palabraBuscar);
echo "La palabra \"$palabraBuscar\" aparece $cantidadOcurrencias veces en el texto.";

?>