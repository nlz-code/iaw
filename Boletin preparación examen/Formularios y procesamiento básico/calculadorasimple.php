<?php
$resultado = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];
    $op = $_POST["op"];

    if (!is_numeric($n1) || !is_numeric($n2)) {
        $error = "Introduce números válidos.";
    } else {
        switch ($op) {
            case "+": $resultado = $n1 + $n2; break;
            case "-": $resultado = $n1 - $n2; break;
            case "*": $resultado = $n1 * $n2; break;
            case "/": $resultado = $n2 != 0 ? $n1 / $n2 : "No se puede dividir por 0"; break;
        }
    }
}
?>
<form method="POST" class="card card-body mt-3">
    <input type="text" name="num1" class="form-control mb-2" placeholder="Número 1">
    <input type="text" name="num2" class="form-control mb-2" placeholder="Número 2">

    <select name="op" class="form-select mb-2">
        <option value="+">Suma</option>
        <option value="-">Resta</option>
        <option value="*">Multiplicación</option>
        <option value="/">División</option>
    </select>

    <button class="btn btn-primary">Calcular</button>
</form>

<?php if ($resultado !== ""): ?>
<div class="alert alert-info mt-3">Resultado: <?= $resultado ?></div>
<?php endif; ?>

<?php if ($error): ?>
<div class="alert alert-danger mt-3"><?= $error ?></div>
<?php endif; ?>
