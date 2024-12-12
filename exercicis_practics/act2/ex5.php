<?php

class Persona {
    
    public string $nom;
    public int $edat;

    public function __construct(string $nom, int $edat) {
        $this->nom = $nom;
        $this->edat = $edat;
    }

    public function benvinguda(): string {
        return "Hola! Em dic $this->nom i tinc $this->edat anys.";
    }
}

$persona1 = new Persona("Anna", 30);
$persona2 = new Persona("Pere", 25);

echo $persona1->benvinguda();
echo "<br>";
echo $persona2->benvinguda();

?>
