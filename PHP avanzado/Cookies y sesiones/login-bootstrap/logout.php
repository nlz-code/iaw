<?php
session_start();
session_destroy();

// 1. Borrar todas las variables de sesión
$_SESSION = array();

// 2. Si se usa una cookie para el ID de sesión, eliminarla
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000, // Fecha en el pasado
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// 3. Destruir la sesión en el servidor
session_destroy();

// Opcional: redirigir al usuario
header("Location: /index.php");