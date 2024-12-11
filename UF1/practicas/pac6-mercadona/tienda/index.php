<?php
include 'includes/header.php';
include 'includes/funciones.php';
include 'data/productos.php';

// Recoger los datos enviados desde el formulario
$nombre = $_POST['nombre'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$foto = $_POST['foto'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadona - Tienda Online</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php mostrarHeader($nombre, $foto); ?>

<div class="container">
    <h1 class="my-5">Nuestros productos</h1>
    
    <?php generarTablaProductos($productos); ?>
    
    <?php if (!empty($nombre) && !empty($telefono) && !empty($foto)): ?>
        <h2>Información de contacto</h2>
        <?php muestraInfoContacto($nombre, $telefono, $foto); ?>
    <?php endif; ?>
    
</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>