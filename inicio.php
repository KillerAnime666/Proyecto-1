<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor inicia sesión");
            </script>
        ';
        header("location: index.php");
        session_destroy();
        die();
    }
    session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GameStore</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <a href="resources/php/cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>