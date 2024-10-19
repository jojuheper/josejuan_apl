<?php
// functions/update.php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Actualizar los datos en la base de datos
    $sql = "UPDATE usuario SET nombre='$nombre', email='$email' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
