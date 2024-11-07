
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inici</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://basementescaperoom.com/los-angeles/template/images/room-header-bg-thebasement.jpg'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">Benvingut!</h2>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Nom:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dificultat" class="form-label">Nivell de Dificultat:</label>
                <select name="" id="dificultat" class="form-select" required>
                    <option value="">Selecciona un nivell</option>
                    <option value="facil">Fàcil</option>
                    <option value="mig">Mig</option>
                    <option value="dificil">Difícil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Comença el Joc</button>
        </form>
    </div>
</body>
</html>


<?php

session_start();

$_SESSION['room'] = 1;

$endevinalles = [
    
    'facil' => [
        ['pregunta' => "Quin ratolí famós va ser creat per Walt Disney?", 'resposta' => "Mickey Mouse"],
        ['pregunta' => "Qui és el millor amic de Bob Esponja?", 'resposta' => "Patricio"],
        ['pregunta' => "Quin superheroi és conegut com l'Home d'Acer?", 'resposta' => "Superman"]
    ],
    'mig' => [
        ['pregunta' => "Quin és el nom de la saga de pel·lícules en què apareixen Frodo i l'anell únic?", 'resposta' => "El senyor dels Anells"],
        ['pregunta' => "Quin actor interpreta a Jack Sparrow en Pirates del Carib?", 'resposta' => "Johnny Depp"],
        ['pregunta' => "Quin és el títol de la sèrie en què els protagonistes viuen a Winterfell?", 'resposta' => "Joc de Trons"]
    ],
    'dificil' => [
        ['pregunta' => "Qui va dirigir la pel·lícula Pulp Fiction?", 'resposta' => "Quentin Tarantino"],
        ['pregunta' => "Quin és el nom complet de la cantant coneguda com Lady Gaga?", 'resposta' => "Stefani Joanne Angelina Germanotta"],
        ['pregunta' => "En quin any es va estrenar la primera pel·lícula de Star Wars?", 'resposta' => "1977"]
    ]
];

?>