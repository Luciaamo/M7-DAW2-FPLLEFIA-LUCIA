<?php

session_start();

if (!isset($_SESSION['productos'])) {

    $_SESSION['productos'] = [

        ['nombre' => 'Pan de molde', 'precio' => '1.50 €', 'descripcion' => 'Paquete de 20 rebanadas de pan de molde suave y esponjoso, ideal para desayunos y meriendas'],
        ['nombre' => 'Botella de agua mineral', 'precio' => '0.60 €', 'descripcion' => 'Agua mineral natural, perfecta para hidratarse en cualquier momento del día'],
        ['nombre' => 'Champú para el pelo', 'precio' => '3.20 €', 'descripcion' => 'Champú con fórmula suave que limpia y cuida el pelo dejándolo brillante y fresco'],
        ['nombre' => 'Caja de lápices de colores', 'precio' => '2.75 €', 'descripcion' => 'Lápices de colores vivos y resistentes, ideales para dibujar o colorear'],
        ['nombre' => 'Lata de atún', 'precio' => '1.80 €', 'descripcion' => 'Lata de atún de alta calidad en aceite de girasol, perfecto para ensaladas y platos ligeros'],

    ];

} 


function agregar_producto($nombre, $precio, $descripcion){
    $_SESSION['productos'][] = [
        'nombre' => $nombre,
        'precio' => $precio,
        'descripcion' => $descripcion,
    ];
}

function eliminar_producto($indice){
    if(isset($_SESSION['productos'][$indice])){
        unset($_SESSION['productos'][$indice]);
        $_SESSION['productos'] = array_values($_SESSION['productos']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion']) && $_POST['accion'] === 'agregar') {
    $nombre = $_POST['nombre'];
    $precio = (float)$_POST['precio'];
    $descripcion = $_POST['descripcion'];
    agregar_producto($nombre, $precio, $descripcion);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion']) && $_POST['accion'] === 'eliminar') {
    $indice = (int)$_POST['indice'];
    eliminar_producto($indice);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>Gestión de Productos</h1>

    <!-- Tabla de productos -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['productos'] as $indice => $producto): ?>
                <tr>
                    <td><?= $indice + 1; ?></td>
                    <td><?= htmlspecialchars($producto['nombre']); ?></td>
                    <td><?= number_format($producto['precio'], 2); ?> €</td>
                    <td><?= htmlspecialchars($producto['descripcion']); ?></td>
                    <td>

                        <!-- Formulario para eliminar producto -->
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="accion" value="eliminar">
                            <input type="hidden" name="indice" value="<?= $indice; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Formulario para agregar producto -->
    <h2>Añadir Nuevo Producto</h2>
    <form method="POST" class="mt-4">
        <input type="hidden" name="accion" value="agregar">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" id="precio" name="precio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </form>
</body>
</html>