<?php
$mensaje = "";

if (isset($_POST["puntuacion"])) {
    $p = $_POST["puntuacion"];
    if ($p <= 2) $mensaje = "Lo sentimos, mejoraremos.";
    elseif ($p == 3) $mensaje = "Gracias por tu opinión.";
    else $mensaje = "¡Nos alegra que estés satisfecho!";
}
?>
<form method="POST" class="card card-body my-4">
<?php for ($i=1; $i<=5; $i++): ?>
    <label><input type="radio" name="puntuacion" value="<?= $i ?>"> <?= $i ?></label><br>
<?php endfor; ?>
<button class="btn btn-success mt-2">Enviar</button>
</form>

<?php if ($mensaje): ?>
<div class="alert alert-info"><?= $mensaje ?></div>
<?php endif; ?>
