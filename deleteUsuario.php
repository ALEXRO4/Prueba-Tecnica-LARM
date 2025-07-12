<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');

// Obtiene el ID del usuario a eliminar desde el formulario (método POST) y lo convierte a entero
$registroEliminado = intval($_POST['eliminar']);

// Prepara la consulta SQL para eliminar el usuario con el ID recibido
$consulta = "DELETE FROM user WHERE id = $registroEliminado";

// Ejecuta la consulta en la base de datos
mysqli_query($conexion, $consulta);

// Cierra la conexión a la base de datos
mysqli_close($conexion);

// Redirige al usuario de vuelta a la página de verUsuarios.php después de eliminar
header('Location: verUsuarios.php');
exit;
?>