<?php

if(isset($_GET['cookie'])) {
    setcookie($_GET['cookie'], '', time() - 60*60*24);
}
header('Location: index.php');