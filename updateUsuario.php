<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

// Sanitiza las entradas
$id_actualizar = mysqli_real_escape_string($conexion, $_POST['actualizar']);
$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$apaterno = mysqli_real_escape_string($conexion, $_POST['apaterno']);
$amaterno = mysqli_real_escape_string($conexion, $_POST['amaterno']);
$calle = mysqli_real_escape_string($conexion, $_POST['calle']);
$numero = mysqli_real_escape_string($conexion, $_POST['numero']);
$cp = mysqli_real_escape_string($conexion, $_POST['cp']);
$municipio = mysqli_real_escape_string($conexion, $_POST['municipio']);
$estado = mysqli_real_escape_string($conexion, $_POST['estado']);
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

$sql = "UPDATE user SET
    nombre = '$nombre',
    apaterno = '$apaterno',
    amaterno = '$amaterno',
    calle = '$calle',
    numero = '$numero',
    cp = '$cp',
    municipio = '$municipio',
    estado = '$estado',
    email = '$email',
    contrasena = '$contrasena'
    WHERE id = '$id_actualizar'";

if (mysqli_query($conexion, $sql)) {
    header("Location: ./verUsuarios.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>