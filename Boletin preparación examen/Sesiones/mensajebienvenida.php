<?php
session_start();

if (isset($_POST["nombre"])) {
    $_SESSION["nombre"] = $_POST["nombre"];
}

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php");
}
?>

<?php if (!isset($_SESSION["nombre"])): ?>
<form method="POST" class="card card-body my-4">
    <input name="nombre" class="form-control mb-2" placeholder="Tu nombre">
    <button class="btn btn-success">Entrar</button>
</form>
<?php else: ?>
<div class="alert alert-info my-4">
    Hola, <?= $_SESSION["nombre"] ?> 👋
</div>
<a href="?logout=1" class="btn btn-danger">Cerrar sesión</a>
<?php endif; ?>
