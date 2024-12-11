<?php

$idioma = "en";

$saludo = ($idioma === "es") ? "Hola" : (($idioma === "en") ? "Hello" : "Idioma no soportado");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Multilingüe</title>
</head>
<body>
    <h2><?php echo $saludo; ?></h2>
</body>
</html>