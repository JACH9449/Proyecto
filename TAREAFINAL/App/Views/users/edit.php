<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="/users/update/<?= $user['id'] ?>" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="<?= $user['name'] ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>