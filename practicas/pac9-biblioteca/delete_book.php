<?php
session_start();

// Verificar si el usuario tiene sesión iniciada y es administrador
if (!isset($_SESSION['username']) || $_SESSION['role'] !== "admin") {
    header("Location: login.php");
    exit;
}

// Verificar si se recibió un ID válido
if (isset($_GET['id'])) {
    $libros = $_SESSION['libros'] ?? [];
    foreach ($libros as $key => $libro) {
        if ($libro['id'] == $_GET['id']) {
            unset($libros[$key]);
            break;
        }
    }

    // Guardar los cambios en la sesión
    $_SESSION['libros'] = array_values($libros); // Reindexar el array
}

// Redirigir al home
header("Location: home.php");
exit;