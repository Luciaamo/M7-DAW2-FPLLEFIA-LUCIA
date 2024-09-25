<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números parells entre 50 i 500</title>
    <style>
        .numeros{
            display: inline-block;
            margin: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #007bff;
            border-radius: 10px;
            text-align: center;
            width: 50px;

        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
</head>
<body>

    <h1>Números parells entre 50 i 500</h1>

    <?php
        for ($i = 50; $i<=500; $i+=2){
           
            echo"<div class='numeros'>$i</div>";
        }
    ?>
    
</body>
</html>

