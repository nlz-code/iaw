<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Empleados</title>
</head>
<body>
    <h2>Gestión de Empleados</h2>
    <form method="post" action="crear.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required>

        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="puesto">Puesto:</label>
        <input type="text" name="puesto" id="puesto" required>

        <button type="submit" class="guardar">Guardar</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>DNI</th>
                <th>Email</th>
                <th>Puesto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($empleados as $empleados):?>
            <tr>
                <td><?php echo $empleados ['nombre']?></td>
                <td><?php echo $empleados ['apellidos']?></td>
                <td><?php echo $empleados ['dni']?></td>
                <td><?php echo $empleados ['email']?></td>
                <td><?php echo $empleados ['puesto']?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
