<?php
session_start();

$productos = ["Camiseta", "Pantalón", "Sudadera"];

if (isset($_GET["add"])) {
    $_SESSION["carrito"][] = $productos[$_GET["add"]];
}
?>
<h3 class="mt-4">Productos</h3>
<?php foreach ($productos as $i => $p): ?>
    <div class="card p-2 mb-2">
        <?= $p ?>
        <a href="?add=<?= $i ?>" class="btn btn-primary btn-sm">Añadir</a>
    </div>
<?php endforeach; ?>

<h3 class="mt-4">Carrito</h3>
<ul class="list-group">
<?php
if (!empty($_SESSION["carrito"])) {
    foreach ($_SESSION["carrito"] as $item) {
        echo "<li class='list-group-item'>$item</li>";
    }
} else {
    echo "<li class='list-group-item'>Carrito vacío</li>";
}
?>
</ul>
