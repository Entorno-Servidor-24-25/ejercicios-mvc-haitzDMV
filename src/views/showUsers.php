<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de usuarios</h1>
    <ul>
        <?php if (!empty($listaUsuarios)): ?>
            <?php foreach ($listaUsuarios as $usuario): ?>
                <li><?php echo htmlspecialchars($usuario['name']); ?>
                    <form action="deleteUser.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($usuario['id']); ?>">
                        <input type="submit" value="Eliminar usuario">
                    </form>
                </li>
                <?php endforeach; ?>
        <?php else: ?>
            <li>No hay usuarios registrados.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
