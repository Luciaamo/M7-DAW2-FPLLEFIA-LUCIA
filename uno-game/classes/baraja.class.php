<?php

include 'carta.class.php';

class Baraja {
    
    public $conjunto_cartas = [];

    public function crea_baraja() {
        foreach (['red', 'yellow', 'blue', 'green'] as $color) {

            for ($i = 1; $i <= 9; $i++) {
                $this->conjunto_cartas[] = new Carta($color, $i);
            }

            $this->conjunto_cartas[] = new Carta($color, 'reverse');
            $this->conjunto_cartas[] = new Carta($color, 'skip');
            $this->conjunto_cartas[] = new Carta($color, '+2');

        }   
    }
    
    public function mezcla() {
        shuffle($this->conjunto_cartas);
    }

    public function pinta_baraja() {
        foreach ($this->conjunto_cartas as $carta) {
            echo $carta->pinta_carta();
        }
    }

    public function pinta_baraja_girada() {
        foreach ($this->conjunto_cartas as $carta) {
            echo $carta->pinta_baraja_girada();
        }
    }
}

?>