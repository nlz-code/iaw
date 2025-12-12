<?php

setcookie($_POST['cookie'], $_POST['valor'], time() + 60*60*24);

header('Location: index.php');