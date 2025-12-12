<?php
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $edad = $_POST["edad"];
    if (is_numeric($edad)) {
        $mensaje = $edad < 18 ? "Eres menor" : "Eres mayor de edad";
    }
}
?>
<form method="POST" class="card card-body mt-3">
    <input type="text" name="edad" class="form-control mb-2" placeholder="Edad">
    <button class="btn btn-dark">Enviar</button>
</form>

<?php if ($mensaje): ?>
<div class="alert alert-warning mt-3"><?= $mensaje ?></div>
<?php endif; ?>
