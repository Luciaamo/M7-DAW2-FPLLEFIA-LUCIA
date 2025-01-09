<?php
session_start(); // Inicia la sessió per mantenir la informació entre les sol.licituds
require_once 'Llibre.php'; // Requerix la classe Llibre
require_once 'Biblioteca.php'; // Requereix la classe Biblioteca

// Inicialitza la biblioteca a la sessió si no existeix ja 
if (!isset($_SESSION['biblioteca'])) {
    $_SESSION['biblioteca'] = serialize(new Biblioteca()); // Serialitza un nou objecte Biblioteca i el guarda a la sessió
}

$biblioteca = unserialize($_SESSION['biblioteca']); // Deserialitza l'objecte Biblioteca de la sessió

// Lógica per afegir un llibre
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['afegir'])) {
    // Rep les dades del formulari d'afegir el llibre
    $titol = $_POST['titol'];
    $autor = $_POST['autor'];
    $any = $_POST['any'];
    $foto = $_POST['foto'];

    // Crea un nou objecte llibre amb les dades rebudes

    $nouLlibre = new Llibre($titol, $autor, $any, $foto);

    // Afegeix el llibre a la biblioteca

    $biblioteca->afegirLlibre($nouLlibre);

    // Guarda la biblioteca actualitzada a la sessió
    $_SESSION['biblioteca'] = serialize($biblioteca);
}

// Lógica per cercar llibres
$resultatsCerca = []; // Array per emmagatzemar els resultats de la cerca
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cercar'])) {

    // Rep el text de cerca del formulari 
    $textCerca = $_POST['textCerca'];

    // Realitza la cerca de llibres
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

    <!-- Visualització dels llibres disponibles -->
    <h2>Llibres disponibles</h2>
    <div class="row">
        <!-- Recorre tots els llibres de la biblioteca i els mostra en targetes -->
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
            <!-- Mostra els llibres trobats a la cerca -->
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