<?php

session_start();

require 'data.php';

if ($_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de preguntas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Gestión de preguntas</h1>
    <a href="add_edit_question.php">Añadir nueva pregunta</a>
    <ul>
        <?php foreach ($questions as $question) : ?>
            <li>
                <?php echo $question['question']; ?>
                <a href="add_edit_question.php?id=<?php echo $question['id']; ?>">Editar</a>
                <a href="delete_question.php?id=<?php echo $question['id']; ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>    
    </ul>
</body>
</html>