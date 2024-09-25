<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre aleatori parell o senar</title>
    <style>
        .par{
            background-color: lightblue;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .impar{
            background-color: lightcoral;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        h1{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Nombre aleatori parell o senar</h1>
    <?php
        $numero = rand(0, 100);
        
        if($numero % 2 == 0){
            echo '<div class="par">El nombre ' . $numero . ' és parell.</div>';
        }else{
            echo '<div class="impar">El nombre ' . $numero . ' és senar.</div>';
        }
    ?>
</body>
</html>