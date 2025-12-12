<?php
ob_start(); // Evita errores de encabezado
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = intval($_POST['numero']);

    // Validación del rango
    if ($usuario < 1 || $usuario > 10) {
        $_SESSION['mensaje'] = "El número debe estar entre 1 y 10.";
        header("Location: index.php");
        exit();
    }

    // Verificamos que las claves existen antes de usarlas
    if (isset($_SESSION['intentos']) && isset($_SESSION['numero'])) {
        $_SESSION['intentos']--;

        if ($usuario == $_SESSION['numero']) {
            $mensajeFinal = "¡Correcto! El número era " . $_SESSION['numero'] . ".";
            session_destroy();
            session_start();
            $_SESSION['mensaje'] = $mensajeFinal;
        } elseif ($_SESSION['intentos'] > 0) {
            if ($usuario < $_SESSION['numero']) {
                $_SESSION['mensaje'] = "El número es mayor que $usuario. Te quedan " . $_SESSION['intentos'] . " intentos.";
            } else {
                $_SESSION['mensaje'] = "El número es menor que $usuario. Te quedan " . $_SESSION['intentos'] . " intentos.";
            }
        } else {
            $mensajeFinal = "Se acabaron los intentos. El número era " . $_SESSION['numero'] . ".";
            session_destroy();
            session_start();
            $_SESSION['mensaje'] = $mensajeFinal;
        }
    } else {
        $_SESSION['mensaje'] = "Error: sesión no inicializada correctamente.";
    }
}

header("Location: index.php");
exit();
