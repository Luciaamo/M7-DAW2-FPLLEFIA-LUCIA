<?php

// 1. Convertir un texto en mayúsculas

function convertirMayusculas($texto) {
    return strtoupper($texto);
}

$textoOriginal = "hola mundo";
$textoEnMayusculas = convertirMayusculas($textoOriginal);
echo $textoEnMayusculas;
echo '<br>';
echo '<br>';
echo '<br>';


// 2. Contar palabras en un texto

function contarPalabras($texto) {
    return str_word_count($texto);
}

$textoEjemplo = "Hola mundo";
$cantidadPalabras = contarPalabras($textoEjemplo);
echo "El texto contiene $cantidadPalabras palabras.";
echo '<br>';
echo '<br>';
echo '<br>';

//3. Obtener una subcadena

function obtenerSubcadena($texto, $inicio, $longitud) {
    return substr($texto, $inicio, $longitud);
}

$textoEjemplo = "Hola mundo";
$inicio = 7;
$longitud = 11;

$subcadena = obtenerSubcadena($textoEjemplo, $inicio, $longitud);
echo "La subcadena es: \"$subcadena\"";
echo '<br>';
echo '<br>';
echo '<br>';

// 4. Reemplazar palabras en una frase
function reemplazarPalabras($texto, $buscar, $reemplazar) {
    return str_replace($buscar, $reemplazar, $texto);
}

$textoEjemplo = "Hola mundo";
$palabraBuscar = "mundo";
$palabraReemplazar = "a todos";

$textoModificado = reemplazarPalabras($textoEjemplo, $palabraBuscar, $palabraReemplazar);
echo "Texto modificado: \"$textoModificado\"";
echo '<br>';
echo '<br>';
echo '<br>';

// 5. Invertir una cadena de texto
function invertirTexto($texto) {
    return strrev($texto);
}

$textoEjemplo = "Hola mundo";
$textoInvertido = invertirTexto($textoEjemplo);
echo "Texto invertido: \"$textoInvertido\"";
echo '<br>';
echo '<br>';
echo '<br>';

// 6. Comparar dos strings

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
echo '<br>';
echo '<br>';
echo '<br>';

// 7. Eliminar espacios en blanco

function eliminarEspacios($texto) {
    return trim($texto);
}

$textoEjemplo = "   Hola mundo   ";
$textoSinEspacios = eliminarEspacios($textoEjemplo);
echo "Texto sin espacios: \"$textoSinEspacios\"";
echo '<br>';
echo '<br>';
echo '<br>';

// 8. Contar ocurrencias de una palabra en un texto

function contarOcurrencias($texto, $palabra) {
    return substr_count($texto, $palabra);
}

$textoEjemplo = "Hola mundo Hola, espero que estes bien. Hola.";
$palabraBuscar = "Hola";

$cantidadOcurrencias = contarOcurrencias($textoEjemplo, $palabraBuscar);
echo "La palabra \"$palabraBuscar\" aparece $cantidadOcurrencias veces en el texto.";
echo '<br>';
echo '<br>';
echo '<br>';

// 9. Dividir una cadena en palabras

function dividirPalabras($texto) {
    return explode(" ", $texto);
}

$textoEjemplo = "Hola mundo";
$arrayPalabras = dividirPalabras($textoEjemplo);

echo "Palabras en el texto:\n";
print_r($arrayPalabras);









?>