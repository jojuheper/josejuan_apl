<?php
// functions/select.php
require_once 'db.php';

// Seleccionar todos los usuarios
$sql = "SELECT * FROM usuario";
$result = mysqli_query($conn, $sql);
?>
