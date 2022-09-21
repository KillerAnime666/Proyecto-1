<?php
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO usuario (nombre_completo, correo, user, pass) VALUES ('$nombre_completo', '$correo', '$user', '$pass')";

    $ejecutar = mysqli_query($conexion, $query);
?>