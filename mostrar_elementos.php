<?php
include 'config.php'; // Archivo de configuración de la base de datos

// Parámetros para la paginación
$por_pagina = 2;
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$desde = ($pagina - 1) * $por_pagina;

// Consulta a la base de datos
$sql = "SELECT * FROM estudiantes LIMIT $desde, $por_pagina";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<p>' . $fila['nombre'] . '</p>';
    }
} else {
    echo 'No se encontraron elementos.';
}
?>
