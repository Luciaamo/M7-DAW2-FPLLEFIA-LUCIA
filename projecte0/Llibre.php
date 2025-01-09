<?php

// Classe que representa un llibre
class Llibre {

    private $titol; //Títol del llibre
    private $autor; //Autor del llibre
    private $anyPublicacio; //Any de publicació del llibre
    private $foto; //URL de la foto de la portada del llibre

    // Constructor que inicialitza les propietats del llibre
    public function __construct($titol, $autor, $anyPublicacio, $foto) {
        $this->titol = $titol; // Assigna el títol
        $this->autor = $autor; // Assigna l'autor
        $this->anyPublicacio = $anyPublicacio; // Assigna l'any de publicació
        $this->foto = $foto; // Assigna la URL de la foto
    }

    // Mètode per obtenir els detalls del llibre (títol, autor i any)
    public function getDetalls() {
        return "{$this->titol} - {$this->autor} ({$this->anyPublicacio})";
    }

    // Mètodes getters per obtenir les propietats del llibre 
    
    public function getTitol() {
        return $this->titol;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAnyPublicacio() {
        return $this->anyPublicacio;
    }
}
?>
