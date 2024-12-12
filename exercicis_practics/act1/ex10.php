<?php

class Animal {
    public string $nom;
    public string $tipus;

    public function __construct(string $nom, string $tipus) {
        $this->nom = $nom;
        $this->tipus = $tipus;
    }

    public function descriure(): string {
        return "Aquest és un $this->tipus anomenat $this->nom.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $tipus = $_POST['tipus'];
    $animal = new Animal($nom, $tipus);
    echo $animal->descriure();
}
?>

<form method="POST" action="">
    <input type="text" name="nom" required>
    <input type="text" name="tipus" required>
    <button type="submit">Enviar</button>
</form>