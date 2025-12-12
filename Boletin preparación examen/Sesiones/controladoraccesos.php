<?php
session_start();
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}
?>
<div class="alert alert-primary m-4">
    Has recargado la página <?= $_SESSION["contador"] ?> veces.
</div>
