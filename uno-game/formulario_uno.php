<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari UNO</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

</head>
<body>

    <div class="video-background">
        <video autoplay muted loop>
            <source src="images/cartas_uno/video_fondo_uno.mp4" type="video/mp4">
        </video>
    </div>

    <div class="form-container">
        <h1>Crear Partida UNO</h1>
        <form action="index.php" method="post">
            <label for="jugadores">Número de Jugadores (1-5):</label>
            <input type="number" id="jugadores" name="jugadores" min="1" max="5" required>

            <label for="cartas">Número de Cartas Iniciales:</label>
            <input type="number" id="cartas" name="cartas" min="1" required>

            <button type="submit">Iniciar Partida</button>
        </form>
    </div>
</html>
