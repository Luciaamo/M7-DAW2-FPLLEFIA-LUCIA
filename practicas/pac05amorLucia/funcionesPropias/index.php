

<?php

// 1. Generar saludo personalizado

function generarSaludo($nombre){
    return "<h1>Hola, " . htmlspecialchars($nombre) . "!</h1>";
}

$saludo = generarSaludo("Lucia");
echo $saludo;

// 2. Calcular el precio total de un producto

function calcularTotal($precio, $cantidad, $impuesto) {
    $subtotal = $precio * $cantidad;
    $impuestoAplicado = $subtotal * ($impuesto / 100);
    $total = $subtotal + $impuestoAplicado;
    return $total;
}

$precioProducto = 50;
$cantidadProducto = 3;
$porcentajeImpuesto = 21;

$totalConImpuesto = calcularTotal($precioProducto, $cantidadProducto, $porcentajeImpuesto);
echo "El precio total con impuesto es: " . number_format($totalConImpuesto, 2), " €";
echo "<br>";
echo "<br>";
echo "<br>";


// 3. Generar un resumen acortado

function generarResumen($texto, $limite) {
    if (strlen($texto) > $limite) {
        return substr($texto, 0, $limite) . '...';
    } else {
        return $texto;
    }
}

$textoOriginal = "Este es un ejemplo de un texto que será acortado para ajustarse a un límite de caracteres.";
$limiteCaracteres = 50;

$resumen = generarResumen($textoOriginal, $limiteCaracteres);
echo $resumen;
echo "<br>";
echo "<br>";
echo "<br>";

// 4. Conversión de temperaturas

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
echo "<br>";
echo "<br>";
echo "<br>";

// 5. Cálculo de edad a partir del año de nacimiento

function calcularEdad($anyoNacimiento) {
    $anyoActual = date("Y");
    $edad = $anyoActual - $anyoNacimiento;
    return $edad;
}

$anyoNacimiento = 2005;
$edadActual = calcularEdad($anyoNacimiento);
echo "La edad actual es: " . $edadActual . " años.";
echo "<br>";
echo "<br>";
echo "<br>";

// 6. Determinar si un número es par o impar

function esPar($numero) {
    return $numero % 2 === 0;
}

$numero = 10;
if (esPar($numero)) {
    echo "$numero es un número par.";
} else {
    echo "$numero es un número impar.";
}

echo "<br>";
echo "<br>";
echo "<br>";

// 7. Generar enlace de descarga

function generarEnlaceDescarga($archivo) {
    return '<a href="' . htmlspecialchars($archivo) . '" download>Descargar</a>';
}

$nombreArchivo = "INICI.html";
$enlaceDescarga = generarEnlaceDescarga($nombreArchivo);
echo $enlaceDescarga;
echo "<br>";
echo "<br>";
echo "<br>";

// 8. Calcular descuento aplicado

function calcularDescuento($precioOriginal, $descuento) {
    $montoDescuento = $precioOriginal * ($descuento / 100);
    $precioFinal = $precioOriginal - $montoDescuento;
    return round($precioFinal, 2);
}

$precioOriginal = 100;
$porcentajeDescuento = 20;

$precioFinalConDescuento = calcularDescuento($precioOriginal, $porcentajeDescuento);
echo "El precio final con descuento es: " . $precioFinalConDescuento, " €";
echo "<br>";
echo "<br>";
echo "<br>";


// 9. Conversión de horas a minutos

function convertirHorasMinutos($horas) {
    $minutos = $horas * 60;
    return $minutos;
}

$cantidadHoras = 5; 
$minutosEquivalentes = convertirHorasMinutos($cantidadHoras);
echo "$cantidadHoras horas equivalen a $minutosEquivalentes minutos.";


?>