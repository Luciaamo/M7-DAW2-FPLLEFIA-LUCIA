<?php

class Llibre {
    public string $titol;
    public string $autor;

    public function descripcio() : string {
        return "El llibre " . $this->titol . " i està escrit " . $this->autor . " .";
    }
}

