<?php

session_start();

require 'data.php';

if ($_SESSION['role'] !== 'player') {
    header('Location: index.php');
    exit;
}

if (!isset($_SESSION['question_index'])) {
    $_SESSION['question_index'] = 0;
}

$question_index = $_SESSION['question_index'];
$question = $questions[$question_index];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer = $_POST['answer'];
    if ($answer === $question['answer']) {
        $_SESSION['question_index']++;
        if ($_SESSION['question_index'] >= count($questions)) {
            echo "<h1>¡Felicidades! Has completado el trivial.</h1>";
            session_destroy();
            exit;
        } else {
            header('Location: trivial.php');
            exit;
        }
    } else {
        $error = "Respuesta incorrecta. Intenta de nuevo.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivial</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Pregunta <?php echo $question_index + 1; ?> </h1>
    <p> <?php echo $question['question']; ?> </p>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST">
        <?php foreach ($question['options'] as $option) : ?>
            <label>
            <input type="radio" name="answer" value="<?php echo $option; ?>" required>
                <?php echo $option; ?>
            </label><br>
        <?php endforeach; ?>
        <button type="submit">Responder</button>
    </form>
</body>
</html>