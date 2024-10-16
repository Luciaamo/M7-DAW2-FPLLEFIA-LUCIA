<?php

$persones = [
    [
        "foto" => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.istockphoto.com%2Fes%2Ffotos%2Fhombre-de-frente&psig=AOvVaw0pwWvf5p2-noVDSay8Ba3J&ust=1728570226606000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCODDkIXAgYkDFQAAAAAdAAAAABAE",
        "nom" => "Joan",
        "telefon" => "657541210",
        "correu" => "joangarcia@gmail.com",
        "edat" => 28,
        "professio" => "Enginyer"
    ],
    [
        "foto" => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.es%2Ffotos%2Fpersona-mujer&psig=AOvVaw0dy-6b41oxWMLFuWRW4MZS&ust=1728570310417000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMiQ_6zAgYkDFQAAAAAdAAAAABAI",
        "nom" => "Ana",
        "telefon" => "632422015",
        "correu" => "anamartinez@gmail.com",
        "edat" => 30,
        "professio" => "Dissenyadora"
    ],
    [
        "foto" => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.es%2Ffotos%2Fpersonas&psig=AOvVaw0pwWvf5p2-noVDSay8Ba3J&ust=1728570226606000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCODDkIXAgYkDFQAAAAAdAAAAABAI",
        "nom" => "Adrià",
        "telefon" => "610221002",
        "correu" => "adriaperez@gmail.com",
        "edat" => 30,
        "professio" => "Advocat"
    ],
];

echo "<h1>Llista de Persones</h1>";

foreach ($persones as $persona) {
    echo "<div style='border: 1px solid #000; padding: 10px; margin: 10px; width: 200px;'>";
    echo "<img src='" . $persona['foto'] . "' alt='Foto de " . $persona['nom'] . "' style='width:150px;height:150px;'><br>";
    echo "<strong>" . $persona['nom'] . "</strong><br>";
    echo "<input type='hidden' name='index' value='" . $index . "'>";
    echo "<button type='submit'>Més informació</button>";
    echo "</div>";
}

?>