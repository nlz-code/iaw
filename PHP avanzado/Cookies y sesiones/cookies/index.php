<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 4px 8px;
        }
        body {
            background-color: <?php echo isset($_COOKIE['fondo']) ? $_COOKIE['fondo'] : 'white'; ?>;
        }
    </style>
</head>
<body>
    <h1>Cookies</h1>

    <table>
        <thead>
            <tr>
                <th>Cookie</th>
                <th>Valor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_COOKIE as $clave => $valor): ?>
            <tr>
                <td><?php echo $clave?></td>
                <td><?php echo $valor?></td>
                <td><a href="borrar_cookie.php?cookie=<?php echo $clave ?>">Borrar</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form action="crear_cookies.php" method="post">
        Nombre: <input name="cookie" required>
        Valor: <input name="valor" required>
        <input type="submit" value="Crear">
    </form>

    <p><a href="borrar_cookies.php">Borrar Cookies</a></p>
</body>
</html>