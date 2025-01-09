<?php

// Classe que representa la biblioteca de llibres 
class Biblioteca {

    // Propietat privada que emmagatzema els llibres a un array

    private $llibres = [];

    // Mètode per afegir un llibre a la biblioteca

    public function afegirLlibre(Llibre $llibre) {
        $this->llibres[] = $llibre;
    }

    // Mètode per buscar llibres per títol

    public function cercarLlibre($text) {
        $resultats = []; // Array que emmagatzemarà els resultats de la cerca

        foreach ($this->llibres as $llibre) {
            // Compara si el text buscat hi és al títol del llibre (sense importar majúscules/minúscules)

            if (stripos($llibre->getTitol(), $text) !== false) {
                $resultats[] = $llibre; // Si ho troba, ho afegeix a l'array de resultats
            }
        }
        return $resultats; // Retorna els llibres trobats 
    }

    // Mètode per mostrar tots els llibres de la bibioteca
    public function mostrarLlibres() {
        return $this->llibres; // Retorna l'array de llibres
    }
}

?>
