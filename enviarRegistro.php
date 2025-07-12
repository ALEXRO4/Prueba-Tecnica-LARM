<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

// Variables
$nombre      = $_POST['nombre'];
$apaterno    = $_POST['apaterno'];
$amaterno    = $_POST['amaterno'];
$calle       = $_POST['calle'];
$numero      = $_POST['numero'];
$cp          = $_POST['cp'];
$municipio   = $_POST['municipio'];
$estado      = $_POST['estado'];
$email       = $_POST['email'];
$contrasena  = $_POST['contrasena'];

// Verifica si ya existe un usuario con el mismo correo
$check = $conexion->prepare("SELECT id FROM user WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    // Si ya existe, redirige al formulario con un error
    header("Location: ./formulario.php?error=correo");
    exit;
}
$check->close();

$sql = "INSERT INTO user (nombre, apaterno, amaterno, calle, numero, cp, municipio, estado, email, contrasena) VALUES (
    '$nombre',
    '$apaterno',
    '$amaterno',
    '$calle',
    '$numero',
    '$cp',
    '$municipio',
    '$estado',
    '$email',
    '$contrasena'
)";

if (mysqli_query($conexion, $sql)) {
    header("Location: ./index.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
