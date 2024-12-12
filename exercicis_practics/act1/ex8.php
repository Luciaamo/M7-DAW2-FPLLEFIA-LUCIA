<?php

class Calculadora {

    public function sumar(float $a, float $b) : float {
        return $a + $b;
    }

    public function restar(float $a, float $b) : float {
        return $a - $b;
    }

    public function multiplicar(float $a, float $b) : float {
        return $a * $b;
    }

    public function dividir(float $a, float $b) : float {
        if($b == 0){
            throw new Exception("No es pot dividir per zero.");
        }

        return $a / $b;
    }

}