<?php

function generarSaludo($nombre){
    return "<h1>Hola, " . htmlspecialchars($nombre) . "!</h1>";
}

$saludo = generarSaludo("Lucia");
echo $saludo;

?>