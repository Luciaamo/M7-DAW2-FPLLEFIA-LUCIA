<?php
echo "<h1>Teoria concatenacion</h1>";

//creamos variables
// frase
//{}
$nombre = "Lucía";
$pais = "España";
$edad = 19;

echo "Hola me llamo" . $nombre . " tengo " . $edad . " años ";
echo "<br>";
echo "Hola me llamo {$nombre} tengo {$edad} y nací en {$pais}";



?>