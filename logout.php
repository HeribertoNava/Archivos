<?php
require_once('login_helper.php');

// Cerrar sesión
logout();

// Redireccionar a la página de inicio de sesión
header('Location: encabezado.php');
exit();
?>
