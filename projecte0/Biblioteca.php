<?php
class Biblioteca {

    private $llibres = [];

    public function afegirLlibre(Llibre $llibre) {
        $this->llibres[] = $llibre;
    }

    public function cercarLlibre($text) {
        $resultats = [];
        foreach ($this->llibres as $llibre) {
            if (stripos($llibre->getTitol(), $text) !== false) {
                $resultats[] = $llibre;
            }
        }
        return $resultats;
    }

    public function mostrarLlibres() {
        return $this->llibres;
    }
}

?>
