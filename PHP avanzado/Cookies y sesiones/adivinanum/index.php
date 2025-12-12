<?php
session_start();
if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = rand(1, 10); // Número aleatorio entre 1 y 10
    $_SESSION['intentos'] = 5;         // Intentos disponibles
    $_SESSION['mensaje'] = "He pensado un número entre 1 y 10. ¡Intenta adivinarlo!";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina el número</title>
</head>
<body>
    <h1>Juego de Adivinar el Número</h1>
    <p><?php echo $_SESSION['mensaje']; ?></p>

    <?php if ($_SESSION['intentos'] > 0) : ?>
        <form action="juego.php" method="post">
            <label>Introduce un número (1-10):</label>
            <input type="number" name="numero" min="1" max="10" required>
            <button type="submit">Probar</button>
        </form>
    <?php else: ?>
        <form method="get">
            <button type="submit">Reiniciar juego</button>
        </form>
        <?php session_destroy(); ?>
    <?php endif; ?>
</body>
</html>
