<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Mercadona</title>
    <!-- link css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhFtAU6auU8tT94WrHftJbDrCEXSU1oBoqyl2QvZJiW3" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <div class="container text-center my-5">
        <h1>Bienvenido a Mercadona</h1>
        <p>Por favor, completa el siguiente formulario para continuar tu compra.</p>
    </div>
</div>

<div class="container">
    <form action="index.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>
        
        <div class="mb-3">
            <label for="telefono" class="form-label">Número de Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>
        
        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" required>
        </div>
        
        <div class="mb-3">
            <label for="codigo" class="form-label">Código de Socio</label>
            <input type="text" class="form-control" id="codigo" name="codigo" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OmhuP+IlRH9sENB0oLrn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>