<?php

function convertirTemperatura($temperatura, $escala) {
    if ($escala === "C") {
        $resultado = ($temperatura - 32) * 5 / 9;
        return round($resultado, 2);
    } elseif ($escala === "F") {
        $resultado = ($temperatura * 9 / 5) + 32;
        return round($resultado, 2);
    } else {
        return "Escala no válida. Usa 'C' para Celsius o 'F' para Fahrenheit.";
    }
}

$temperaturaC = 25; 
$temperaturaF = 77;

$convertidoACelsius = convertirTemperatura($temperaturaF, "C");
$convertidoAFahrenheit = convertirTemperatura($temperaturaC, "F");

echo "$temperaturaF grados Fahrenheit son " . $convertidoACelsius . " grados Celsius.\n";
echo "<br>";
echo "$temperaturaC grados Celsius son " . $convertidoAFahrenheit . " grados Fahrenheit.\n";

?>