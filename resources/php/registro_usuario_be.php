<?php
    include ("conexion_be.php");

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO usuario (nombre_completo, correo, user, pass) 
                VALUES ('$nombre_completo', '$correo', '$user', '$pass')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Registrado Exitosamente");
                window.location = "../../login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no registrado");
                window.location = "../../login.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>