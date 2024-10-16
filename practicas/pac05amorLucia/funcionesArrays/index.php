<?php

echo '<h1>Parte 2: Manipulación de strings y arrays</h1>';

echo '<h2>Funciones de Arrays</h2>';

// 1. Sumar valores de un array

echo '<h3>1. Sumar valores de un array</h3>';

function sumarArray($numeros) {
    return array_sum($numeros);
}

$numeros = [1, 2, 3, 4, 5];
$suma = sumarArray($numeros);
echo "La suma total es: " . $suma;
echo '<br>';
echo '<br>';
echo '<br>';

// 2. Ordenar un array alfabéticamente

echo '<h3>2. Ordenar un array alfabéticamente</h3>';

function ordenarArrayAlfabetico($nombres) {
    sort($nombres);
    return $nombres;
}

$nombres = ["Carlos", "Ana", "Beatriz", "David"];
$nombresOrdenados = ordenarArrayAlfabetico($nombres);

echo "Nombres ordenados alfabéticamente: ";
print_r($nombresOrdenados);
echo '<br>';
echo '<br>';
echo '<br>';


// 3. Filtrar elementos mayores a un valor

echo '<h3>3. Filtrar elementos mayores a un valor</h3>';

function filtrarMayores($numeros, $valor) {
    return array_filter($numeros, function($numero) use ($valor) {
        return $numero > $valor;
    });
}

$numeros = [10, 5, 20, 8, 15];
$valor = 10;
$numerosFiltrados = filtrarMayores($numeros, $valor);

echo "Números mayores a $valor: ";
print_r($numerosFiltrados);
echo '<br>';
echo '<br>';
echo '<br>';

// 4. Buscar un valor en un array

echo '<h3>4. Buscar un valor en un array</h3>';

function buscarEnArray($array, $valor) {
    return in_array($valor, $array);
}

$array = ["manzana", "banana", "pera", "naranja"];
$valor = "kiwi";
$encontrado = buscarEnArray($array, $valor);

if ($encontrado) {
    echo "El valor '$valor' se encuentra en el array.";
} else {
    echo "El valor '$valor' no se encuentra en el array.";
}
echo '<br>';
echo '<br>';
echo '<br>';

// 5. Contar elementos de un array

echo '<h3>5. Contar elementos de un array</h3>';

function contarElementos($array) {
    return count($array);
}

$array = ["manzana", "banana", "pera", "naranja"];
$cantidad = contarElementos($array);

echo "El array contiene $cantidad elementos.";
echo '<br>';
echo '<br>';
echo '<br>';

// 6. Obtener el valor máximo de un array

echo '<h3>6. Obtener el valor máximo de un array</h3>';

function obtenerMaximo($numeros) {
    return max($numeros);
}

$numeros = [10, 5, 20, 8, 15];
$maximo = obtenerMaximo($numeros);

echo "El valor máximo es: " . $maximo;
echo '<br>';
echo '<br>';
echo '<br>';

// 7. Obtener el valor mínimo de un array

echo '<h3>7. Obtener el valor mínimo de un array</h3>';

function obtenerMinimo($numeros) {
    return min($numeros);
}

$numeros = [10, 5, 20, 8, 15];
$minimo = obtenerMinimo($numeros);

echo "El valor mínimo es: " . $minimo;
echo '<br>';
echo '<br>';
echo '<br>';

// 8. Eliminar duplicados de un array

echo '<h3>8. Eliminar duplicados de un array</h3>';

function eliminarDuplicados($array) {
    return array_unique($array);
}

$array = ["manzana", "banana", "pera", "manzana", "naranja", "pera"];
$arraySinDuplicados = eliminarDuplicados($array);

echo "Array sin duplicados: ";
print_r($arraySinDuplicados);
echo '<br>';
echo '<br>';
echo '<br>';

// 9. Combinar dos arrays

echo '<h3>9. Combinar dos rayas</h3>';

function combinarArrays($array1, $array2) {
    return array_merge($array1, $array2);
}

$array1 = ["manzana", "banana", "pera"];
$array2 = ["naranja", "uva", "kiwi"];
$arrayCombinado = combinarArrays($array1, $array2);

echo "Array combinado: ";
print_r($arrayCombinado);
echo '<br>';
echo '<br>';
echo '<br>';

// 10. Dividir un array en fragmentos

echo '<h3>10. Dividir un array en fragmentos</h3>';

function dividirArray($array, $tamanio) {
    return array_chunk($array, $tamanio);
}

$array = ["manzana", "banana", "pera", "naranja", "uva", "kiwi"];
$tamanio = 2;
$arrayDividido = dividirArray($array, $tamanio);

echo "Array dividido en fragmentos de tamaño $tamanio: ";
print_r($arrayDividido);


?>