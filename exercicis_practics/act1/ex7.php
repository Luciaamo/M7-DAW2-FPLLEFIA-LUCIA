<?php

class Producte {
    public string $nom;
    public float $preu;

    public function __construct(string $nom, float $preu) {
        $this->nom = $nom;
        $this->preu = $preu;
    }

    public function mostrarPreu() : string {
        return "El preu de $this->nom és $this->preu €.";
    }
}