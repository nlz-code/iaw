<?php
if (isset($_GET["tema"])) {
    setcookie("tema", $_GET["tema"], time()+60*60*24*30);
    header("Location: index.php");
}

$tema = $_COOKIE["tema"] ?? "claro";
$clases = $tema === "oscuro" ? "bg-dark text-white" : "bg-light";
?>
<body class="<?= $clases ?> p-4">
<a href="?tema=claro" class="btn btn-light">Modo claro</a>
<a href="?tema=oscuro" class="btn btn-dark">Modo oscuro</a>
</body>
