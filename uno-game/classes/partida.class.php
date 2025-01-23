<?php

class Partida {

    public $numero_jugadores;
    public $numero_cartas;
    public $turno = 0;
    public $baraja;
    public $carta_en_mesa;
    public $array_jugadores = [];
    public $constante_sentido = 1;

    public function __construct($numero_jugadores, $numero_cartas) {
        $this->numero_jugadores = $numero_jugadores;
        $this->numero_cartas = $numero_cartas;
        $this->baraja = new Baraja();
        $this->baraja->crea_baraja();
        $this->baraja->mezcla();
    }

    // Controlar el flux principal del joc
    public function jugar() {
        echo "Torn de jugar: Jugador {$this->turno}<br>";
        // Mostrar estat del joc: cartes dels jugadors, carta sobre la taula, etc.
        foreach ($this->array_jugadores as $jugador) {
            $jugador->mostrar_ma();
        }
    }

    // Aplicar les regles per a les cartes especials
    public function normas_uno($carta) {
        switch ($carta->numero) {
            case 'reverse':
                $this->cambiar_sentido();
                break;
            case 'skip':
                $this->cambiar_turno();
                break;
            case '+2':
                // El següent jugador roba dues cartes
                $this->array_jugadores[($this->turno + 1) % $this->numero_jugadores]->afegir_carta($this->baraja->conjunto_cartas[0]);
                $this->cambiar_turno();
                break;
        }
    }

    // Canviar el torn al següent jugador
    public function cambiar_turno() {
        $this->turno = ($this->turno + 1) % $this->numero_jugadores;
    }

    // Canviar el sentit del joc
    public function cambiar_sentido() {
        $this->constante_sentido *= -1;
    }
}


?>