<?php
$tabla = "";
if (isset($_POST["numero"]) && is_numeric($_POST["numero"])) {
    $n = $_POST["numero"];
    ob_start();
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$n x $i</td><td>" . ($n*$i) . "</td></tr>";
    }
    $tabla = ob_get_clean();
}
?>
<form method="POST" class="card card-body my-4">
    <input type="number" name="numero" min="1" max="12" class="form-control mb-2" placeholder="Número (1-12)">
    <button class="btn btn-primary">Generar tabla</button>
</form>

<?php if ($tabla): ?>
<table class="table table-bordered">
    <tr><th>Operación</th><th>Resultado</th></tr>
    <?= $tabla ?>
</table>
<?php endif; ?>
