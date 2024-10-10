<?php

//1. Longitud de caracteres --> strlen()

$cadena = "hola mundo";
echo strlen($cadena);

//2. strpos
echo strpos($cadena, "mundo");

//3. str_replace
echo str_replace("mundo", "Barcelona", $cadena);

//4. strolower
echo strtolower($cadena);

//5. toupper
echo strtoupper($cadena);

//6. ucfirst
echo ucfirst($cadena);

//7. ucwords
echo ucwords($cadena);

//8. trim
// elimina espacios en blanco al principio y final de una cadena
$cadena2 = 'leo messi';
echo trim($cadena2);

//9. substr()
// obtiene una parte de una cadena
echo substr($cadena2, 4, 2);

//10. implode
//separa una lista con un limitador que tu pongas
$array = ["Hola", "Mundo", "PHP"];
echo implode(" ", $array);

//11. explode
//transforma una cadena en un array (inverso de implode)
$cadena = "Hola,Mundo,PHP";
$array = explode(",",$cadena);
print_r($array);
foreach ($array as $a){
    echo $a;
}

//12. in array() mira si existe o no en un array
$os = ["Mac", "NT", "Irix", "Linux"];
if (in_array("Irix", $os)){
    echo "Existe Irix";
}

//13. array_search
//busca un valor en un array y devuelve la clave correspondiente. Si no está saca false
$array = ["manzana", "pera", "naranja"];
echo array_search("naranja", $array);

//14. array_map
$arraymap = [1, 2, 3, 4];
$resultado = array_map(function($numero) {
    return $numero = 2;
}, $arraymap);
print_r($resultado); // Resultado: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8)

//15. array_filter()
$arrayfilter = [1,2,3,4,5,6,7,8];
$resultado = array_filter($arrayfilter, function($n){
    return $n %2 ==0;
});


?>