<?php
session_start();
require_once '../src/config/config.php';
require_once '../src/classes/Jugador.php';

$jugadors = $_SESSION['jugadors'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Personatges</title>
</head>
<body>
    <h1>Selecciona els teus personatges</h1>
    <form action="../src/controllers/SeleccionarController.php" method="POST">
        <?php foreach ($jugadors as $index => $jugador) : ?>
            <label>
                <input type="checkbox" name="characters[]" value="<?= $index ?>">
                <?= htmlspecialchars($jugador->getNom()) ?>
            </label>
            <br>
        <?php endforeach; ?>
        <button type="submit">Continuar</button>
    </form>
</body>
</html>