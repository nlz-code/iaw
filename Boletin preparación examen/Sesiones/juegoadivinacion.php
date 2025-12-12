<?php
session_start();

if (!isset($_SESSION["numero"])) {
    $_SESSION["numero"] = rand(1, 100);
}

$mensaje = "";

if (isset($_POST["intento"])) {
    $i = $_POST["intento"];
    if (!is_numeric($i)) {
        $mensaje = "Introduce un número válido.";
    } elseif ($i > $_SESSION["numero"]) {
        $mensaje = "El número es MENOR.";
    } elseif ($i < $_SESSION["numero"]) {
        $mensaje = "El número es MAYOR.";
    } else {
        $mensaje = "¡Correcto! Número reiniciado.";
        $_SESSION["numero"] = rand(1, 100);
    }
}
?>
<form method="POST" class="card card-body my-4">
    <input type="number" name="intento" class="form-control mb-2">
    <button class="btn btn-dark">Probar</button>
</form>

<?php if ($mensaje): ?>
<div class="alert alert-warning"><?= $mensaje ?></div>
<?php endif; ?>
