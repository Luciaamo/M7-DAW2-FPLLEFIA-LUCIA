<?php
$fruites = [
    [
        'nom' => 'Manzana',
        'imatge' => 'https://example.com/manzana.jpg',
        'descripcio' => '¡Esta es tu fruta favorita!'
    ],
    [
        'nom' => 'Plátano',
        'imatge' => 'https://img.freepik.com/vector-gratis/racimo-platano-amarillo-maduro-vector-aislado-sobre-fondo-blanco_1284-45456.jpg',
        'descripcio' => 'No seleccionada.'
    ],
    [
        'nom' => 'Naranja',
        'imatge' => 'https://e7.pngegg.com/pngimages/187/615/png-clipart-orange-fruit-orange-tangerine-orange-natural-foods-food-thumbnail.png',
        'descripcio' => 'No seleccionada.'
    ],
    [
        'nom' => 'Fresa',
        'imatge' => 'https://static.vecteezy.com/system/resources/previews/024/596/055/non_2x/strawberry-strawberry-with-transparent-background-transparent-strawberry-ai-generated-free-png.png',
        'descripcio' => 'No seleccionada.'
    ],
    [
        'nom' => 'Kiwi',
        'imatge' => 'https://e7.pngegg.com/pngimages/166/911/png-clipart-kiwi-kiwi.png',
        'descripcio' => 'No seleccionada.'
    ],
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Selecciona tu fruta favorita</h1>

        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Fruta</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-danger">
                    <td>Manzana</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Plátano</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Naranja</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Fresa</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Kiwi</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="">Seleccionar</a></td>
                </tr>
            </tbody>
        </table>

        <!-- Mostrar tarjeta de la fruta seleccionada (actualmente estatica, siempre hay una manzana) -->
        <div class="card mt-4 w-25 shadow-lg">
            <img src="https://static.vecteezy.com/system/resources/previews/023/858/853/non_2x/ai-genrative-green-apple-free-png.png" class="card-img-top img-fluid" alt="Manzana">
            <div class="card-body bg-warning">
                <h5 class="card-title">Manzana</h5>
                <p class="card-text">¡Esta es tu fruta favorita!</p>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>