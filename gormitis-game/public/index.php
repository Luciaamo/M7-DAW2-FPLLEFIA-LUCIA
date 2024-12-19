<?php
session_start();
require_once '..src/config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gormitis - Crear Personatget</title>
    <link rel="stylesheet" href="assets/css">k
</head>
<body>
    <h1>Crear i Veure Personatges</h1>
    <form action="../src/controllers/CrearPersonatgeController.php" method="POST">
        <label for="name">Nom del personatge:</label>
        <input type="text" id="name" name="name" required>

        <label for="type">Tipus:</label>
        <select name="type" id="type" required>
            <option value="foc">Foc</option>
            <option value="aigua">Aigua</option>
            <option value="terra">Terra</option>
            <option value="aire">Aire</option>
        </select>

        <button type="submit">Crear</button>
    </form>
</body>
</html>