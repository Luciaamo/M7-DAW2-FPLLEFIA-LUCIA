<?php

session_start();
//inicializar el carrito
if (!isset($_SESSION['carrito'])){
    $_SESSION['carrito'] = [];
}

var_dump($_SESSION['carrito']);

//añadir productos al carrito
$item = $_POST['item'];

//manera 1 de hacer push
$_SESSION['carrito'][] = $item;

//manera 2 de hacer push
array_push($_SESSION['carrito'], $item);
