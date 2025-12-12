<?php
$mensaje = "Es tu primera visita.";

if (isset($_COOKIE["visita"])) {
    $mensaje = "Tu última visita fue el: " . $_COOKIE["visita"];
}

setcookie("visita", date("d/m/Y H:i:s"), time()+60*60*24*30);
?>

<div class="alert alert-warning mt-4"><?= $mensaje ?></div>
