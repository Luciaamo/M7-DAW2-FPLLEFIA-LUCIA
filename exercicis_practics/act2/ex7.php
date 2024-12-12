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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = $_POST['nom'];
    $edat = (int)$_POST['edat'];
    $persona = new Persona($nom, $edat);
    echo $persona->benvinguda();
}

?>

<form method="POST" action="">

    <input type="text" name="nom" required>
    <input type="number" name="edat" required>
    <button type="submit">Enviar</button>

</form>
