<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'admin' && $password === '1234'){
        $_SESSION['logged_in'] = true;
        $_SESSION['role'] = 'admin';
        header('Location: manage.php');
        exit;
    } elseif ($username === 'player' && $password === '5678'){
        $_SESSION['logged_in'] = true;
        $_SESSION['role'] = 'player';
        header('Location: trivial.php');
        exit;
    } else {
        $error = "Usuario y/o contraseña incorrectos";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form method="POST">
        <label for="">Usuario: </label>
        <input type="text" name="username" required>
        <label for="">Contraseña: </label>
        <input type="password" name="password" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>