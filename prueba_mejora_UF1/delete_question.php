<?php

session_start();
require_once 'data.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;

if ($id !== null) {

    foreach ($questions as $key => $item) {
        if ($item['id'] === $id) {
            unset($data[$key]);
            break;
        }
    }

    $data = array_values($questions);
    file_put_contents('data.php', '<?php $data = ' . var_export($data, true) . ';');
    header('Location: manage.php');
    exit;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar pregunta</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Eliminar pregunta</h1>
    <p>¿EStás seguro/a de que quieres eliminar esta pregunta?</p>
    <form method="POST">
        <a href="manage.php">Cancelar</a>
        <a href="delete_question.php?id=<?= $id ?>&confirm=true"">Eliminar</a>
    </form>
</body>
</html>