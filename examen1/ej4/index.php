<?php

$productes = [
    [
        "nom" => "Ordinador portàtil",
        "preu" => 800,
        "oferta" => true
    ],
    [
        "nom" => "Ratolí",
        "preu" => 20,
        "oferta" => false
    ],
    [
        "nom" => "Teclat",
        "preu" => 100,
        "oferta" => true
    ],
    [
        "nom" => "Monitor",
        "preu" => 150,
        "oferta" => false
    ]
];

echo "<h1>Taula de Productes</h1>";
echo "<table border='1' style='width: 50%; border-collapse: collapse;'>";
echo "<tr><th>Nom</th><th>Preu</th></tr>";

foreach ($productes as $producte) {


    echo "<td>" . $producte['nom'] . "</td>";
    echo "<td>" . $producte['preu'] . " €</td>";
    echo "</tr>";
    
}

echo "</table>";

?>