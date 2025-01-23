<?php


class Jugador {

    public $mano = [];
    public $id;

    public function __construct($id) {
        $this->id = $id;
    }

    // Afegir una carta a la mà del jugador
    public function afegir_carta($carta) {
        $this->mano[] = $carta;
    }

    // Eliminar una carta de la mà del jugador
    public function eliminar_carta($carta) {
        $index = array_search($carta, $this->mano);
        if ($index !== false) {
            unset($this->mano[$index]);
        }
    }

    // Mostrar les cartes del jugador
    public function mostrar_ma() {
        foreach ($this->mano as $carta) {
            echo $carta->pinta_carta();
        }
    }
}


?>