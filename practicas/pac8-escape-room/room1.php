<?php

session_start();

if (!isset($_SESSION['room']) || $_SESSION['room'] != 1) {
    header('Location: index.php');
    exit;
}

$message = "";

// Procesar la respuesta del formulario
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $respuesta = trim($_GET['resposta']); // Recoger la respuesta del usuario

    // La respuesta correcta para esta habitación
    $respuestaCorrecta = "mapa"; // Ajusta según tu enigma

    if (strcasecmp($respuesta, $respuestaCorrecta) == 0) {
        // Si la respuesta es correcta, avanzar a la siguiente habitación
        $message ="<div class='alert alert-success mt-3'>¡Felicidades! ¡Has completado el juego!</div>";
        $_SESSION['room'] = 2; // Cambiar a la siguiente habitación
        header('Location: room2.php'); // Redirigir a room2.php
        exit;
    } else {
        // Si la respuesta es incorrecta, mostrar un mensaje de error
        $message = "<div class='alert alert-danger mt-3'>Respuesta incorrecta. ¡Inténtalo de nuevo!</div>";
    }
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Habitación 1</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 22rem;">
        <h2 class="card-title text-center">Habitación 1</h2>
        <p class="card-text">Quin animal fa miaow?</p>
        <form method="POST">
            <div class="mb-3">
                <input type="text" name="answer" class="form-control" required placeholder="Respuesta">
            </div>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
        <?= $message; ?> <!-- Muestra el mensaje de éxito o error -->
    </div>
</body>
</html>
