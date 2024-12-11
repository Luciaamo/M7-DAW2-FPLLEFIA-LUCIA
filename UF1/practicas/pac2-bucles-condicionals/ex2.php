<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taules de multiplicar</title>
    <style>
        .tabla{
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
            display: inline-block;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #A52A2A;
            border-radius: 10px;
            text-align: center;
            width: 100px;
            
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
</head>
<body>
    <h1>Taules de multiplicar</h1>
    <?php

        for($i = 1; $i <=11; $i++){
            echo '<div class="tabla">';

            for($j = 1; $j<=9; $j++){
                $resultado = $i * $j;
                echo "<p>$i x $j = $resultado</p>";
            }
            echo '</div>';
        }

        

    ?>
</body>
</html>