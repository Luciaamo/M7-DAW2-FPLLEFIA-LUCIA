<?php
session_start();
session_destroy(); // Destruye toda la sesión activa
header("Location: login.php"); // Redirige al login
exit;