<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'personas';

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
}
?>
