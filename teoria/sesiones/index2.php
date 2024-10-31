<?php
session_name('PRUEBA-SESSION');
session_start();

$_SESSION['username'] = "Juan";
$_SESSION['age'] = "Juan";

echo $_SESSION['username'];