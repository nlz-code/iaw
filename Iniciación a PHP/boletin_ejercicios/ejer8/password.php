<?php
function validarContrasena($contrasena) {
    $minLength = 8;
    $hasUppercase = preg_match('/[A-Z]/', $contrasena);
    $hasLowercase = preg_match('/[a-z]/', $contrasena);
    $hasNumber = preg_match('/[0-9]/', $contrasena);
    $hasSpecialChar = preg_match('/[\W_]/', $contrasena);

    if (strlen($contrasena) < $minLength) {
        return "La contraseña debe tener al menos $minLength caracteres.";
    }
    if (!$hasUppercase) {
        return "La contraseña debe contener al menos una letra mayúscula.";
    }
    if (!$hasLowercase) {
        return "La contraseña debe contener al menos una letra minúscula.";
    }
    if (!$hasNumber) {
        return "La contraseña debe contener al menos un número.";
    }
    if (!$hasSpecialChar) {
        return "La contraseña debe contener al menos un carácter especial.";
    }
    return "La contraseña es válida.";
}
echo validarContrasena("Contraseña123!"); // La contraseña es válida.