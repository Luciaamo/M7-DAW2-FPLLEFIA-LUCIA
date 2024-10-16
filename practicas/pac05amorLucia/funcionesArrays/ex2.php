<?php

function ordenarArrayAlfabetico($nombres) {
    sort($nombres);
    return $nombres;
}

$nombres = ["Carlos", "Ana", "Beatriz", "David"];
$nombresOrdenados = ordenarArrayAlfabetico($nombres);

echo "Nombres ordenados alfabéticamente: ";
print_r($nombresOrdenados);

?>