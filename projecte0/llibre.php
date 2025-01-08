<?php
class Llibre {
    public $titol;
    public $autor;
    public $anyPublicacio;
    public $foto;

    public function __construct($titol, $autor, $anyPublicacio, $foto) {
        $this->titol = $titol;
        $this->autor = $autor;
        $this->anyPublicacio = $anyPublicacio;
        $this->foto = $foto;
    }

    public function getDetalls() {
        return "<strong>{$this->titol}</strong> de {$this->autor} ({$this->anyPublicacio})";
    }
    
}