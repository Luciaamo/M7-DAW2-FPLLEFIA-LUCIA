<?php

function esPar($numero) {
    return $numero % 2 === 0;
}

$numero = 10;
if (esPar($numero)) {
    echo "$numero es un número par.";
} else {
    echo "$numero es un número impar.";
}

?>