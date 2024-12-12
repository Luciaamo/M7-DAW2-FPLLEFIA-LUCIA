<?php

class Persona {
    public string $nom;
    public int $edat;

    public function __construct(string $nom, int $edat)
    {
        $this->nom = $nom;
        $this->edat = $edat;
    } 

    public function Saludar() : string {
        return "Hola, sóc " . $this->nom . " i tinc " . $this->edat . " .";
    }
}