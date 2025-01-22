<?php

include 'baraja.class.php';
include 'jugador.class.php';

class Partida {

    public $numero_jugadores;
    public $numero_cartas;
    public $turno = 0;
    public $baraja;
    public $carta_en_masa;
    public $array_jugadores = [];
    public $constante_sentido = 1;

    public function __construct($numero_jugadores, $numero_cartas) {
        
        $this->numero_jugadores = $numero_jugadores;
        $this->numero_cartas = $numero_cartas;
        $this->baraja = new Baraja();
        $this->baraja->crea_baraja();
        $this->baraja->mezcla();


         
    }
}