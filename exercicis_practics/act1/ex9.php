<?php

class Producte {

    public string $nom;
    public float $preu;

    public function __construct(string $nom, float $preu) {
        $this->nom = $nom;
        $this->preu = $preu;
    }
}

$products = [
    new Producte("Samarreta", 10.50),
    new Producte("Mitjons", 4.99),
    new Producte("Pantalons", 15.00),
];

echo '<table border="1">';
echo '<tr><th>Nom</th><th>Preu</th></tr>';
foreach ($products as $product) {
    echo "<tr><td>{$product->nom}</td><td>{$product->preu}€</td></tr>";
}
echo '</table>';