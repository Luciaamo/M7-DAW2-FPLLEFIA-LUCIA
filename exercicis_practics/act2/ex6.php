<?php

class Calculadora {

    public function sumar(float $a, float $b): float {
        return $a + $b;
    }

}

$calculadora = new Calculadora();
echo "La suma de 5 i 3 és: " . $calculadora->sumar(5, 3);

?>
