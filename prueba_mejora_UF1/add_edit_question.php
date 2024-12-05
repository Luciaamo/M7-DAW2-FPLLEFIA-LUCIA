<?php

session_start();
require_once 'data.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}


$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$question = '';
$options = ['', '', ''];
$answer = '';

if ($id !== null) {
    foreach ($questions as $item) {
        if ($item['id'] === $id) {
            $question = $item['question'];
            $options = $item['options'];
            $answer = $item['answer'];
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question = $_POST['question'];
    $options = [$_POST['option1'], $_POST['option2'], $_POST['option3']];
    $answer = $_POST['answer'];

    if ($id !== null) {
        foreach ($questions as $index => $item) {
            if ($item['id'] === $id) {
                $questions[$index] = [
                    'id' => $id,
                    'question' => $question,
                    'options' => $options,
                    'answer' => $answer
                ];    
                break;
            }
        }
    } else {

        $newId = count($questions) + 1;
        $questions[] = [
            'id' => $newId,
            'question' => $question,
            'options' => $options,
            'answer' => $answer
        ];
    }

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
    <title> <?php echo $id !== null ? 'Editar' : 'Añadir'; ?> Pregunta </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><?= $id !== null ? 'Editar Pregunta' : 'Añadir Pregunta' ?></h1>
        <form method="POST">
            <label>Pregunta:</label>
            <input type="text" name="question" value="<?= htmlspecialchars($question) ?>" required>
            <label>Opciones:</label>
            <input type="text" name="option1" value="<?= htmlspecialchars($options[0]) ?>" required>
            <input type="text" name="option2" value="<?= htmlspecialchars($options[1]) ?>" required>
            <input type="text" name="option3" value="<?= htmlspecialchars($options[2]) ?>" required>
            <label>Respuesta Correcta:</label>
            <input type="text" name="answer" value="<?= htmlspecialchars($answer) ?>" required>
            <button type="submit"><?= $id !== null ? 'Guardar Cambios' : 'Añadir Pregunta' ?></button>
            <a href="manage.php">Cancelar</a>
        </form>

</body>
</html>

