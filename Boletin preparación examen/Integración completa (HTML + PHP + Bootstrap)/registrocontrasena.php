<?php
$mensaje = "";
$tipo = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $pass1 = $_POST["password"];
    $pass2 = $_POST["password2"];

    if ($pass1 !== $pass2) {
        $mensaje = "Las contraseñas no coinciden.";
        $tipo = "danger";
    } else {
        $mensaje = "Registro correcto: $nombre ($email)";
        $tipo = "success";
    }
}
?>
<form method="POST" class="card card-body my-4">
    <input name="nombre" class="form-control mb-2" placeholder="Nombre">
    <input name="email" class="form-control mb-2" placeholder="Email">
    <input type="password" name="password" class="form-control mb-2" placeholder="Contraseña">
    <input type="password" name="password2" class="form-control mb-2" placeholder="Repetir contraseña">
    <button class="btn btn-dark">Registrar</button>
</form>

<?php if ($mensaje): ?>
<div class="alert alert-<?= $tipo ?>"><?= $mensaje ?></div>
<?php endif; ?>
