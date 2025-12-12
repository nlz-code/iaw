<?php
$nombres = ["Ana", "Luis", "Carlos", "Noelia", "Sofía"];
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $buscar = trim($_POST["nombre"]);
    if (in_array($buscar, $nombres)) {
        $mensaje = "El nombre <b>$buscar</b> está en la lista ✔️";
    } else {
        $mensaje = "El nombre <b>$buscar</b> NO está en la lista ❌";
    }
}
?>
<form method="POST" class="card card-body my-4">
    <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre a buscar">
    <button class="btn btn-dark">Buscar</button>
</form>

<?php if ($mensaje): ?>
<div class="alert alert-info"><?= $mensaje ?></div>
<?php endif; ?>
