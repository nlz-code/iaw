<?php
session_start();

// Simulación de credenciales (reemplazar con base de datos segura)
$usuarios = [
  'admin' => password_hash('1234', PASSWORD_DEFAULT)
];

// Recoger datos del formulario
$email = $_POST['admin'] ?? '';
$password = $_POST['1234'] ?? '';
$recordar = isset($_POST['remember']);

// Validación
if (array_key_exists($email, $usuarios) && password_verify($password, $usuarios[$email])) {
  $_SESSION['usuario'] = $email;

  // Opcional: cookie si se marcó "Recordarme"
  if ($recordar) {
    setcookie('usuarioRecordado', $email, time() + (86400 * 30), "/");
  }

  echo "<h2>Bienvenida, $email</h2>";
  echo "<p>Inicio de sesión exitoso.</p>";
} else {
  echo "<h2>Error de autenticación</h2>";
  echo "<p>Correo o contraseña incorrectos.</p>";
}
?>
