<?php
// config/db.php

$host = 'localhost';
$dbname = 'prueba';    // Nombre de tu base de datos
$username = 'root';      // Usuario de la base de datos (ajusta según tu configuración)
$password = 'admin1234';          // Contraseña de la base de datos

// Crear la conexión a la base de datos
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
