<?php
$color = "#ffffff";
if (isset($_POST["color"])) $color = $_POST["color"];
?>
<body style="background: <?= $color ?>; padding:20px;">
<form method="POST" class="card card-body">
    <input type="color" name="color" class="form-control mb-2">
    <button class="btn btn-secondary">Cambiar</button>
</form>
</body>
