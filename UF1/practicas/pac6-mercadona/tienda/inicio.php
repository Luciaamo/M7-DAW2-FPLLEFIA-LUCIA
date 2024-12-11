<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Mercadona</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="container text-center my-5">
        <h1>Bienvenido a Mercadona</h1>
        <p>Por favor, completa el siguiente formulario para continuar tu compra.</p>
    </div>
</div>

<div class="container">
    <div class="form-container mx-auto" style="max-width: 600px;">
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            
            <div class="mb-3">
                <label for="telefono" class="form-label">Número de Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            
            <div class="mb-3">
                <label for="foto" class="form-label">URL de la Foto de Perfil:</label>
                <input type="url" class="form-control" id="foto" name="foto" required>
            </div>
            
            <button type="submit" class="btn btn-custom btn-block">Enviar</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>