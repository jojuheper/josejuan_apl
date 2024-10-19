<?php
// functions/delete.php
require_once 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el registro de la base de datos
    $sql = "DELETE FROM usuario WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
