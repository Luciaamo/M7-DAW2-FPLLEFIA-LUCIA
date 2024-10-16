<?php

$nombre = "";

$valorNombre = !empty($nombre) ? $nombre : "Ingrese su nombre";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h2>Formulario de Contacto</h2>
    <form action="#" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($valorNombre); ?>">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>