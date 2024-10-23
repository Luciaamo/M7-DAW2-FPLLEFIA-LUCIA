<?php
    // Array multidimensional amb la informació de cada casa
    $casas_info = [
        "Gryffindor" => [
        "background_color" => "#740001",
        "text_color" => "#FFD700",
        "welcome_message" => "Coratge, valor i determinació. Benvingut a Gryffindor!",
        "message_background" => "#D3A625",
        "image" => "images/gryffindor.png"
        ],
        "Hufflepuff" => [
        "background_color" => "#FFDB00",
        "text_color" => "#60605B",
        "welcome_message" => "Lleialtat, paciència i treball dur. Benvingut a Hufflepuff!",
        "message_background" => "#EEE117",
        "image" => "images/hufflepuff.png"
        ],
        "Ravenclaw" => [
        "background_color" => "#0E1A40",
        "text_color" => "#946B2D",
        "welcome_message" => "Intel·ligència, creativitat i saviesa. Benvingut a Ravenclaw!",
        "message_background" => "#5D5D5D",
        "image" => "images/ravenclaw.jpg"
        ],
        "Slytherin" => [
        "background_color" => "#1A472A",
        "text_color" => "#AAAAAA",
        "welcome_message" => "Ambició, astúcia i lideratge. Benvingut a Slytherin!",
        "message_background" => "#5D5D5D",
        "image" => "images/slytherin.png"
        ]
    ];

    $casas = array_keys($casas_info);
    $casa_seleccionada = $casas[array_rand($casas)];

    $casa_info = $casas_info[$casa_seleccionada];


?>


<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvingut a la teva casa de Hogwarts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: <?= $casa_info['background_color'] ?>;
            color: <?= $casa_info['text_color'] ?>;
        }
        .welcome-message {
            background-color: <?= $casa_info['message_background'] ?>;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>¡Benvingut a <?= $casa_seleccionada ?> <?= htmlspecialchars($nom) ?> <?= htmlspecialchars($cognoms) ?>!</h1>
        <div class="welcome-message mt-4">
            <p><?= $casa_info['welcome_message'] ?></p>
            <img src="images/<?= $casa_info['image'] ?>" alt="Escut de <?= $casa_seleccionada ?>" style="max-width: 200px;">
        </div>
    </div>
</body>
</html>