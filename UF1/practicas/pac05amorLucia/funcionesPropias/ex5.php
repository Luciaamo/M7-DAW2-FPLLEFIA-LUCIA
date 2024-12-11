<?php

function calcularEdad($anyoNacimiento) {
    $anyoActual = date("Y");
    $edad = $anyoActual - $anyoNacimiento;
    return $edad;
}

$anyoNacimiento = 2005;
$edadActual = calcularEdad($anyoNacimiento);
echo "La edad actual es: " . $edadActual . " años.";

?>