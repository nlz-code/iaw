<?php
if (isset($_GET["lang"])) {
    setcookie("idioma", $_GET["lang"], time()+60*60*24*30);
    header("Location: index.php");
}

$idioma = $_COOKIE["idioma"] ?? "es";
?>
<a href="?lang=es" class="btn btn-danger">Español</a>
<a href="?lang=en" class="btn btn-primary">English</a>

<div class="alert alert-info mt-3">
    <?= $idioma === "es" ? "Hola!" : "Hello!" ?>
</div>
