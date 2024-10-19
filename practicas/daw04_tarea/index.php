<?php 
require_once 'select.php';
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
 </head>
 <body>
 
<div>
    <a href="form.php">Agregar nuevo usuario</a>
</div>

<table>
    <tr class="">
        <th class="title">ID</th>
        <th class="title">Nombre</th>
        <th class="title">Email</th>
        <th class="title">Acciones</th>
    </tr>
    <?php while ($usuario = mysqli_fetch_assoc($result)): ?>
        <tr class="">
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nombre']; ?></td>
            <td><?php echo $usuario['email']; ?></td>
            <td class="buttons">
                <a class="edit" href="form.php?id=<?php echo $usuario['id']; ?>">Editar</a>
                <a class="delete" href="delete.php?id=<?php echo $usuario['id']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
<?php mysqli_close($conn); ?>
 </body>
 </html>
