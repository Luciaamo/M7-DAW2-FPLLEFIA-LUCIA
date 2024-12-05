<?php

session_start();

if(!isset($_SESSION['logged_in'])){
    $redirect_url = 'login.php';
} elseif ($_SESSION['role'] === 'admin'){
    $redirect_url = 'manage.php';
} else {
    $redirect_url = 'trivial.php';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Bienvenido al Trivial Interactivo</h1>
    <a href="<?php echo $redirect_url; ?>">⚙️</a>
    <p><a href="trivial.php">Comenzar el trivial</a></p>
</body>
</html>