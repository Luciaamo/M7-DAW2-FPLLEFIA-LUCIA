<?php

function convertirHorasMinutos($horas) {
    $minutos = $horas * 60;
    return $minutos;
}

$cantidadHoras = 5; 
$minutosEquivalentes = convertirHorasMinutos($cantidadHoras);
echo "$cantidadHoras horas equivalen a $minutosEquivalentes minutos.";

?>