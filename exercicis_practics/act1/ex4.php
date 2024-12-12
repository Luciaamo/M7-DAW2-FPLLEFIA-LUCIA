<?php

class LlibreTripat {
    public string $titol;
    public string $autor;

    public function __construct(string $titol, string $autor)
    {
        $this->titol = $titol;
        $this->autor = $autor;
    }

    public function descripcio() : string {
        return "El llibre " . $this->titol . " i està escrit " . $this->autor . " .";
    }

    public function getAutor() : string {
        return $this->autor;
    }
    
}