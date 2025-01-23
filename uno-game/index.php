<?php

include_once 'classes/carta.class.php';
include_once 'classes/baraja.class.php';
include_once 'classes/jugador.class.php';
include_once 'classes/partida.class.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Crear els jugadors i iniciar la partida
    $partida = new Partida($_POST['numero_jugadores'], $_POST['numero_cartas']);
    for ($i = 0; $i < $_POST['numero_jugadores']; $i++) {
        $jugador = new Jugador($i);
        // Afegir cartes a cada jugador
        for ($j = 0; $j < $_POST['numero_cartas']; $j++) {
            $jugador->afegir_carta($partida->baraja->conjunto_cartas[0]);
            array_shift($partida->baraja->conjunto_cartas);  // Treure la carta de la baralla
        }
        $partida->array_jugadores[] = $jugador;
    }
    $_SESSION['partida'] = serialize($partida);
}

// Mostrar la partida
$partida = unserialize($_SESSION['partida']);
$partida->jugar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joc UNO</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>Partida UNO</h1>
    <br>
    <h2>Carta inicial sobre la taula:</h2>
    
    <!-- <?= $carta_mesa->pinta_carta(); ?>
    <h2>Mans dels jugadors:</h2>
    <?php foreach ($jugadors as $jugador): ?>
        <h3>Jugador <?= $jugador->id ?>:</h3>
        <?= $jugador->mostrar_ma(); ?>
    <?php endforeach; ?>  -->

</body>
</html>
