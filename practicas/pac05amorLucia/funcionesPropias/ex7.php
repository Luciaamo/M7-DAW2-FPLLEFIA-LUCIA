<?php

function generarEnlaceDescarga($archivo) {
    return '<a href="' . htmlspecialchars($archivo) . '" download>Descargar</a>';
}

$nombreArchivo = "INICI.html";
$enlaceDescarga = generarEnlaceDescarga($nombreArchivo);
echo $enlaceDescarga;

?>