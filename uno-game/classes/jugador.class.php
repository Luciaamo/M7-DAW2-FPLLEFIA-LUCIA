<?php

class Jugador {
    
    public $mano = [];
    public $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function afegir_carta($carta) {
        $this->mano[] = $carta;
    }

    public function eliminar_carta($carta) {
        foreach ($this->mano as $key => $c) {
            if ($c->palo === $carta->palo && $c->numero === $carta->numero) {
                unset($this->mano[$key]);
                break;
            }
        }

        $this->mano = array_values($this->mano);
    }

    public function mostrar_ma() {
        foreach ($this->mano as $carta) {
            echo $carta->pinta_carta();
        }
    }
}

?>