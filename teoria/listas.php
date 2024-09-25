<?php

//ARRAY ESCALAR INDEXADO
// $estudiantes = array('Dídac', 'David', 'Lucía');
// $lista = array("Suleiman", "Brian", "Dani");

// //var_dump($lista);
// print_r($lista);

// //DESDE LA VERSION 5.4 PHP
// $lista2 = ["Dídac", "Kevin", "David", 87, 32, 78.23, true];

// echo $lista2[1];

// $lista2[2] = "Yehor";

// // añadir elementos a un array
// $colores = ['rojo', 'azul', 'verde'];

// $colores[] = 'Naranja';
// print_r($colores);

// 2. ARRAYS ASOCIATIVOS
$tutor = [
    "nombre" => "Lucía",
    "apellidos" => "Amor González",
    "edad" => 19
];

echo $tutor["apellidos"];

$tutor["edad"] = 18;

// print_r( array_keys($tutor));


//RECORRER ARRAY CON UN FOR
$numeros = [1,2,3,4,5,6,7,8,9];
foreach($numeros as $num){
    echo ($num * 2) . ' ';
}

//recorrer un array asociativo
$ciudades = [
    "París" => "Francia",
    "Barcelona" => "Espanya",
    "Londres" => "Reino Unido"
];

foreach ($ciudades as $ciudad => $pais){
    echo "La ciudad de $ciudad está en $pais";
}













?>