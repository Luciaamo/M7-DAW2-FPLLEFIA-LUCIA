<?php
class Animal {

    public string $nom;
    public string $tipus;

    public function __construct(string $nom, string $tipus) {

        $this->nom = $nom;
        $this->tipus = $tipus;

    }

    public function saludar(): string {

        return "Hola, sóc un $this->tipus i em dic $this->nom.";
    }

}

$animal = new Animal("Luna", "gos");
echo $animal->saludar();

?>
