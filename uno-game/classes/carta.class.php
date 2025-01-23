<?php

class Carta {
    
    public $palo;
    public $numero;

    public function __construct($palo, $numero){
        $this->palo = $palo;
        $this->numero = $numero;
    }

    public function pinta_carta() {
        return "<img src='../images/cartas_uno/{$this->palo}_{$this->numero}.png' alt='{$this->palo} {$this->numero}'/>";
    }

    public function pinta_carta_link() {
        return "<a href='jugar.php?carta={$this->palo}_{$this->numero}'>{$this->pinta_carta()}</a>";
    }

    public function pinta_carta_girada() {
        return "<img src='../images/cartas_uno/carta_girada.png' alt='Carta girada'/>";
    }

}

?>