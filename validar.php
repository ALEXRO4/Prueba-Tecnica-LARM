<?php

include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

// Verifica que la petición sea de tipo POST (es decir, que venga de un formulario)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    // Si algún campo está vacío, redirige al login con un mensaje de error
    if ($email == '' || $contrasena == '') {
        header("Location: login.html?error=empty");
        exit();
    }

    // Prepara una consulta para buscar el usuario por email
    $stmt = $conexion->prepare("SELECT contrasena FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Si existe un usuario con ese email
    if ($stmt->num_rows === 1) {
        $stmt->bind_result($pass_db);
        $stmt->fetch();

        // Compara la contraseña ingresada con la de la base de datos
        if ($contrasena === $pass_db) {
            // Si es correcta, inicia sesión y redirige a verUsuarios.php
            session_start();
            $_SESSION['email'] = $email;
            header("Location: verUsuarios.php");
            exit();
        } else {
            // Si la contraseña es incorrecta, redirige con error
            header("Location: index.php?error=wrongpass");
            exit();
        }
    } else {
        // Si no existe el usuario, redirige con error
        header("Location: index.php?error=nouser");
        exit();
    }
} else {
    // Si no es una petición POST, redirige al login
    header("Location: index.php");
    exit();
}
