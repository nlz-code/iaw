<?php

foreach ($_COOKIE as $clave => $valor) {
    setcookie($clave, '', time() - 60*60*24);
}
header('Location: index.php');