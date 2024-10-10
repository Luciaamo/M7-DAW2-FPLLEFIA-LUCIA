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
echo substr($cadena2, 4, 4);

?>