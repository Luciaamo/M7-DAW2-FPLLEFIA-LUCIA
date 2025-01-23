<?php

include 'carta.class.php';

class Baraja {
    
    public $conjunto_cartas = [];
    
    // Crear totes les cartes del joc
    public function crea_baraja() {
        $colors = ['red', 'yellow', 'blue', 'green'];
        $valors = [1, 2, 3, 4, 5, 6, 7, 8, 9, 'reverse', 'skip', '+2'];
    
        foreach ($colors as $color) {
            foreach ($valors as $valor) {
                $this->conjunto_cartas[] = new Carta($color, $valor, uniqid());
            }
        }
    }
    
    // Barallar les cartes
    public function mezcla() {
        shuffle($this->conjunto_cartas);
    }
    
    // Pintar la baralla amb totes les cartes
    public function pinta_baraja() {
        foreach ($this->conjunto_cartas as $carta) {
            echo $carta->pinta_carta();
        }
    }
    
    // Pintar la baralla girada
    public function pinta_baraja_girada() {
        foreach ($this->conjunto_cartas as $carta) {
            echo $carta->pinta_carta_girada();
        }
    }
}
    

?>