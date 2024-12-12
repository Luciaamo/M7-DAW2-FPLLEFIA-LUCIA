<?php

class Producte {

    public string $nom;
    public float $preu;

    public function __construct(string $nom, float $preu) {
        $this->nom = $nom;
        $this->preu = $preu;
    }

}

$productes = [
    new Producte("Llibre", 10.99),
    new Producte("Bolígraf", 1.50),
    new Producte("Agenda", 5.99),
];

echo '<table border="1">';
echo '<tr><th>Nom</th><th>Preu</th></tr>';
foreach ($productes as $producte) {
    echo "<tr><td>{$producte->nom}</td><td>{$producte->preu}€</td></tr>";
}
echo '</table>';

?>
