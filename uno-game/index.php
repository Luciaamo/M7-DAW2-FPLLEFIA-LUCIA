<?php
require_once 'classes/baraja.class.php';
require_once 'classes/jugador.class.php';

// Captura dades del formulari
$num_jugadors = $_POST['num_jugadors'] ?? 0;
$num_cartes = $_POST['num_cartes'] ?? 0;

if ($num_jugadors > 0 && $num_cartes > 0) {
    $baralla = new Baraja();
    $baralla->crea_baraja();
    $baralla->mezcla();

    $jugadors = [];
    for ($i = 1; $i <= $num_jugadors; $i++) {
        $jugador = new Jugador($i);
        for ($j = 0; $j < $num_cartes; $j++) {
            $jugador->afegir_carta(array_pop($baralla->conjunto_cartas));
        }
        $jugadors[] = $jugador;
    }

    $carta_mesa = array_pop($baralla->conjunto_cartas);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joc UNO</title>
</head>
<body>
    <h1>Partida UNO</h1>
    <h2>Carta inicial sobre la taula:</h2>
    <?= $carta_mesa->pinta_carta(); ?>
    <h2>Mans dels jugadors:</h2>
    <?php foreach ($jugadors as $jugador): ?>
        <h3>Jugador <?= $jugador->id ?>:</h3>
        <?= $jugador->mostrar_ma(); ?>
    <?php endforeach; ?>
</body>
</html>
