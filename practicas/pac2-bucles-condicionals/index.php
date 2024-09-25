<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    <style>
        body{
            background-color: #ccffcc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contenidos{
            padding: 30px;
            border-radius: 10px;

        }
        
    </style>
</head>
<body>
    <?php
        echo '<div class="contenidos">';
        echo "<h1>PRÁCTICA 2 - 19/09/2024</h1>";
        echo "<p>Ejemplo 1:";
        echo "<br>";
        echo '<a = href = "ex1.php" target = blank>HAZ CLICK PARA VER EL EJEMPLO 1</a>';
        echo "<p>Ejemplo 2:";
        echo "<br>";
        echo '<a = href = "ex2.php" target = blank>HAZ CLICK PARA VER EL EJEMPLO 1</a>';
        echo "<p>Ejemplo 3:";
        echo "<br>";
        echo '<a = href = "ex3.php" target = blank>HAZ CLICK PARA VER EL EJEMPLO 1</a>';
        echo '</div>';
    ?>
</body>
</html>