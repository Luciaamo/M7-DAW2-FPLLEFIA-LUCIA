<?php

function generarTablaProductos($productos) {

    echo '<table class="table table-bordered">';
    echo '<thead><tr><th>Nombre</th><th>Precio</th><th>Disponibilidad</th></tr></thead>';
    echo '<tbody>';
    
    foreach ($productos as $producto) {
        $disponibilidad = $producto['disponible'] ? 'En stock' : 'Agotado';
        $colorFila = $producto['disponible'] ? '' : 'style="background-color: #f8d7da;"'; // Fila roja si está agotado
        echo "<tr $colorFila>";
        echo '<td>' . ucfirst($producto['nombre']) . '</td>';
        echo '<td>' . number_format($producto['precio'], 2) . ' €</td>';
        echo "<td>$disponibilidad</td>";
        echo '</tr>';
    }
    
    echo '</tbody>';
    echo '</table>';
}

function muestraInfoContacto($nombre, $telefono, $foto) {
    echo '<div class="card mt-4" style="max-width: 400px;">';
    echo '<div class="card-body">';
    echo "<h5 class='card-title'>$nombre</h5>";
    echo "<p class='card-text'>Teléfono: $telefono</p>";
    echo "<img src='$foto' alt='Avatar' class='img-fluid rounded-circle' style='width: 100px; height: 100px;'>";
    echo '</div>';
    echo '</div>';

}

?>