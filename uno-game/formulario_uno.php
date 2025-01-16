<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari UNO</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>Configuració del Joc UNO</h1>
    <form action="index.php" method="POST">
        <label for="num_jugadors">Nombre de jugadors (1-5):</label>
        <input type="number" id="num_jugadors" name="num_jugadors" min="1" max="5" required>
        <br>
        <label for="num_cartes">Nombre de cartes per jugador:</label>
        <input type="number" id="num_cartes" name="num_cartes" min="1" max="7" required>
        <br>
        <button type="submit">Inicia la Partida</button>
    </form>
</body>
</html>
