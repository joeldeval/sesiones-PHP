<?php
// inicia sesión
$_SESSION['codigo'];
session_destroy();
header("Location:sesion.php");
?>
