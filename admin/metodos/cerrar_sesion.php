<?php
session_start();

// Destruye la sesión actual y redirige al usuario a la página de inicio de sesión
session_destroy();
header("Location: ../index.php");
exit();
?>
