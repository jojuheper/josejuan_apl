<?php
// functions/insert.php
require_once 'db.php';  // Incluir la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuario (nombre, email) VALUES ('$nombre', '$email')";

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
