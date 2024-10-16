<?php

$logueado = true;

$iconoUsuario = "imagenes_usuarios/usuario_logueado.png";
$iconoInvitado = "imagenes_usuarios/usuario_invitado.png";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ícono de Usuario</title>
</head>
<body>
    <h2>Estado del Usuario</h2>
    <?php if ($logueado): ?>
        <img src="<?php echo htmlspecialchars($iconoUsuario); ?>" alt="Usuario Logueado">
    <?php else: ?>
        <img src="<?php echo htmlspecialchars($iconoInvitado); ?>" alt="Invitado">
    <?php endif; ?>
</body>
</html>
