<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="/users/edit/<?= $user['id'] ?>">Editar</a>
                <a href="/users/delete/<?= $user['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="/users/create">Crear Usuario</a>
</body>
</html>