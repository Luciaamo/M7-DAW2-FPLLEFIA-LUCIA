<?php
session_start();
require_once 'llibre.php';
require_once 'biblioteca.php';
require_once 'actions.php';

$biblioteca = unserialize($_SESSION['biblioteca']);
$llibres = $biblioteca->mostrarLlibres();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió de biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Biblioteca Virtual</h1>
        <form action="" method="post" class="mb-5">
            <div class="mb-3">
                <label for="titol" class="form-label">Títol</label>
                <input type="text" class="form-control" name="titol" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor" required>
            </div>
            <div class="mb-3">
                <label for="any" class="form-label">Any de publicació</label>
                <input type="number" class="form-control" name="any" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">URL de la foto</label>
                <input type="url" class="form-control" name="foto" required>
            </div>
            <button type="submit" name="afegir" class="btn btn-primary">Afegir Llibre</button>
        </form>

        <h2>Llibres disponibles</h2>
        <div class="row">
            <?php foreach ($llibres as $llibre): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $llibre->foto; ?>" class="card-img-top" alt="<?php echo $llibre->titol; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $llibre->titol; ?></h5>
                            <p class="card-text">Autor: <?php echo $llibre->autor; ?></p>
                            <p class="card-text">Any: <?php echo $llibre->anyPublicacio; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>