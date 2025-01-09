<?php
session_start();
require_once 'Llibre.php';
require_once 'Biblioteca.php';

// Inicialitzar la biblioteca en la sessió
if (!isset($_SESSION['biblioteca'])) {
    $_SESSION['biblioteca'] = serialize(new Biblioteca());
}

$biblioteca = unserialize($_SESSION['biblioteca']);

// Afegir un llibre
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['afegir'])) {
    $titol = $_POST['titol'];
    $autor = $_POST['autor'];
    $any = $_POST['any'];
    $foto = $_POST['foto'];

    $nouLlibre = new Llibre($titol, $autor, $any, $foto);
    $biblioteca->afegirLlibre($nouLlibre);
    $_SESSION['biblioteca'] = serialize($biblioteca);
}

// Cercar llibres
$resultatsCerca = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cercar'])) {
    $textCerca = $_POST['textCerca'];
    $resultatsCerca = $biblioteca->cercarLlibre($textCerca);
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Llibres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
    <h1 class="mb-4">Gestor de Llibres</h1>

    <!-- Formulari per afegir llibres -->
    <form method="POST" class="mb-4">
        <h2>Afegir un llibre</h2>
        <div class="mb-3">
            <label for="titol" class="form-label">Títol</label>
            <input type="text" class="form-control" id="titol" name="titol" required>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="mb-3">
            <label for="any" class="form-label">Any de publicació</label>
            <input type="number" class="form-control" id="any" name="any" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">URL de la foto</label>
            <input type="url" class="form-control" id="foto" name="foto" required>
        </div>
        <button type="submit" name="afegir" class="btn btn-primary">Afegir llibre</button>
    </form>

    <!-- Formulari per cercar llibres -->
    <form method="POST" class="mb-4">
        <h2>Cercar llibres</h2>
        <div class="mb-3">
            <label for="textCerca" class="form-label">Escriu el títol del llibre o part d'ell</label>
            <input type="text" class="form-control" id="textCerca" name="textCerca">
        </div>
        <button type="submit" name="cercar" class="btn btn-secondary">Cercar llibre</button>
    </form>

    <!-- Visualització de llibres -->
    <h2>Llibres disponibles</h2>
    <div class="row">
        <?php foreach ($biblioteca->mostrarLlibres() as $llibre): ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="<?= $llibre->getFoto(); ?>" class="card-img-top" alt="Portada del llibre">
                    <div class="card-body">
                        <h5 class="card-title"><?= $llibre->getTitol(); ?></h5>
                        <p class="card-text"><?= $llibre->getDetalls(); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Resultats de la cerca -->
    <?php if (!empty($resultatsCerca)): ?>
        <h2>Resultats de la cerca</h2>
        <div class="row">
            <?php foreach ($resultatsCerca as $llibre): ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="<?= $llibre->getFoto(); ?>" class="card-img-top" alt="Portada del llibre">
                        <div class="card-body">
                            <h5 class="card-title"><?= $llibre->getTitol(); ?></h5>
                            <p class="card-text"><?= $llibre->getDetalls(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</body>
</html>
