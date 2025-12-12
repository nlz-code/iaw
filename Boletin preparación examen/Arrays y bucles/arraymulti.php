<?php
$usuarios = [
    ["nombre" => "Laura", "email" => "laura@mail.com", "edad" => 25],
    ["nombre" => "Pepe", "email" => "pepe@mail.com", "edad" => 19],
    ["nombre" => "Marta", "email" => "marta@mail.com", "edad" => 30]
];

usort($usuarios, function($a, $b) {
    return $a["edad"] <=> $b["edad"];
});
?>
<table class="table table-striped my-4">
    <tr><th>Nombre</th><th>Email</th><th>Edad</th></tr>
    <?php foreach ($usuarios as $u): ?>
    <tr>
        <td><?= $u["nombre"] ?></td>
        <td><?= $u["email"] ?></td>
        <td><?= $u["edad"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
