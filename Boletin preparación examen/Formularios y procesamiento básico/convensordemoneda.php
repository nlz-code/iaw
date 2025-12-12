<?php
$resultado = "";
if (isset($_GET["euros"]) && is_numeric($_GET["euros"])) {
    $resultado = number_format($_GET["euros"] * 1.08, 2);
}
?>
<form method="GET" class="card card-body mt-3">
    <input type="text" name="euros" class="form-control mb-2" placeholder="Euros">
    <button class="btn btn-success">Convertir</button>
</form>

<?php if ($resultado): ?>
<div class="alert alert-primary mt-3">
    USD: <?= $resultado ?>
</div>
<?php endif; ?>
