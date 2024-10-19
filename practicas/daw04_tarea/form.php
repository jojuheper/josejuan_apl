<?php
require_once 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuario WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $usuario = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo isset($usuario) ? 'update.php' : 'insert.php'; ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo isset($usuario) ? $usuario['id'] : ''; ?>">
        <input class="text" type="text" name="nombre" value="<?php echo isset($usuario) ? $usuario['nombre'] : ''; ?>" placeholder="Nombre" required>
        <input class="text" type="email" name="email" value="<?php echo isset($usuario) ? $usuario['email'] : ''; ?>" placeholder="Email" required>
        <button class="save" type="submit"><?php echo isset($usuario) ? 'Actualizar' : 'Guardar'; ?></button>
    </form>
</body>
</html>
