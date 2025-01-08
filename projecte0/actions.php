<?php
session_start();

if (!isset($_SESSION['biblioteca'])) {
    $_SESSION['biblioteca'] = serialize(new Biblioteca());
}

$biblioteca = unserialize($_SESSION['biblioteca']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['afegir'])) {
        $nouLlibre = new Llibre(
            $_POST['titol'],
            $_POST['autor'],
            $_POST['any'],
            $_POST['foto']
        );
        $biblioteca->afegirLlibre($nouLlibre);
    }

    $_SESSION['biblioteca'] = serialize($biblioteca);
    header('Location: index.php');
    exit();
}