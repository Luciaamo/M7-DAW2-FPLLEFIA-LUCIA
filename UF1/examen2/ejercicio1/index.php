<?php

require_once 'header.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <?php

        echo "<h1>¡Bienvenida, " . ($_SESSION['nombre'] ?? '') . " " . ($_SESSION['apellidos'] ?? '') . "!</h1>";
    ?>
    
    <h1>Esta es la página de inicio</h1>

</body>
</html>