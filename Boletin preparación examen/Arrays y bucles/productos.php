<?php
$productos = [
    "Teclado" => 29.99,
    "Ratón" => 15.50,
    "Monitor" => 159.90,
    "USB 64GB" => 10.00
];

$total = 0;
foreach ($productos as $precio) $total += $precio;
?>

<ul class="list-group my-4">
<?php foreach ($productos as $nombre => $precio): ?>
    <li class="list-group-item">
        <?= $nombre ?> — <?= number_format($precio, 2) ?> €
    </li>
<?php endforeach; ?>
</ul>

<div class="alert alert-success">
    Total: <?= number_format($total, 2) ?> €
</div>
