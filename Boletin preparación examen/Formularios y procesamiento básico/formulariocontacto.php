<?php
$nombre = $email = $mensaje = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["mensaje"])) {
        $error = "Todos los campos son obligatorios.";
    } else {
        $nombre = htmlspecialchars($_POST["nombre"]);
        $email = htmlspecialchars($_POST["email"]);
        $mensaje = htmlspecialchars($_POST["mensaje"]);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-4">

<form method="POST" class="card card-body">
    <input class="form-control mb-2" name="nombre" placeholder="Nombre">
    <input class="form-control mb-2" name="email" placeholder="Email">
    <textarea class="form-control mb-2" name="mensaje" placeholder="Mensaje"></textarea>
    <button class="btn btn-primary">Enviar</button>
</form>

<?php if ($error): ?>
<div class="alert alert-danger mt-3"><?= $error ?></div>
<?php endif; ?>

<?php if ($nombre && !$error): ?>
<div class="card mt-3 p-3">
    <h4>Datos recibidos</h4>
    <p><b>Nombre:</b> <?= $nombre ?></p>
    <p><b>Email:</b> <?= $email ?></p>
    <p><b>Mensaje:</b> <?= $mensaje ?></p>
</div>
<?php endif; ?>

</body>
</html>
