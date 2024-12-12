<?php

class Animal {

    public string $nom;
    public string $tipus;

    public function __construct(string $nom, string $tipus) {

        $this->nom = $nom;
        $this->tipus = $tipus;

    }

}

?>
