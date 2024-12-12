<?php

class LlibreValorsPerDefecte {
    public string $titol = 'El senyor dels Anells';
    public string $autor = 'J.R.R. Tolkien';

    public function descripcio() : string{
        return "El llibre " . $this->titol . " i està escrit " . $this->autor . " .";
    }
}