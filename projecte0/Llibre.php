<?php
class Llibre {
    
    private $titol;
    private $autor;
    private $anyPublicacio;
    private $foto;

    public function __construct($titol, $autor, $anyPublicacio, $foto) {
        $this->titol = $titol;
        $this->autor = $autor;
        $this->anyPublicacio = $anyPublicacio;
        $this->foto = $foto;
    }

    public function getDetalls() {
        return "{$this->titol} - {$this->autor} ({$this->anyPublicacio})";
    }

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
