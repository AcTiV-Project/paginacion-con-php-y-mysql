<?php
include 'config.php'; // Archivo de configuración de la base de datos

$por_pagina = 2;
$total_registros = mysqli_query($conexion, "SELECT COUNT(*) as total FROM estudiantes");
$total_registros = mysqli_fetch_assoc($total_registros);
$total_paginas = ceil($total_registros['total'] / $por_pagina);

echo '<ul class="pagination">';
for ($i = 1; $i <= $total_paginas; $i++) {
    echo '<li><a href="pagina.php?pagina=' . $i . '">' . $i . '</a></li>';
}
echo '</ul>';
?>
