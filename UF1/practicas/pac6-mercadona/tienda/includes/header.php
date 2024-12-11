
<?php
function mostrarHeader($nombre = '', $foto = '') {

    echo '<header class="navbar navbar-expand-lg navbar-light bg-light mb-5">';
    echo '<div class="container-fluid">';
    echo '<a class="navbar-brand" href="#">';
    echo '<img src="../data/assets/logo-mercadona.jpg" alt="logo-mercadona" style="height: 50px;">';
    echo '</a>';
    
    if (!empty($nombre) && !empty($foto)) {
        echo '<div class="d-flex align-items-center">';
        echo "<h2 class='me-3 mb-0 px-4'>Bienvenida $nombre</h2>";
        echo "<img src='$foto' alt='Avatar' class='rounded-circle' style='width: 50px; height: 50px;'>";
        echo '</div>';
    }

    echo '</div>';
    echo '</header>';

}

?>