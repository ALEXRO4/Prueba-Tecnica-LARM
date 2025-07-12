<?php
// Datos para conexión local
$host_db = "localhost";     
$user_db = "root";          
$pass_db = "";              
$db_name = "practicaT";  

// Crear conexión
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

// Verificar si hay error en la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}



?>
