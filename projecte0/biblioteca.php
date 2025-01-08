<?php
class Biblioteca {

    public $llibres = [];

    public function afegirLlibre($llibre){
        $this->llibres[] = $llibre;
    }

    public function mostrarLlibres(){
        return $this->llibres;
    }

    public function cercarLlibre($titol){
        $resultats = [];
        foreach ($this->llibres as $llibre) {
            if (stripos($llibre->titol, $titol) !== false) {
                $resultats[] = $llibre;
            }
        }
        return $resultats;
    }
}
 