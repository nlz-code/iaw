<?php
$paises = ["España", "Francia", "Italia", "Alemania", "Portugal"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-4">

<ul class="list-group">
<?php foreach ($paises as $pais): ?>
    <li class="list-group-item"><?= $pais ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>
