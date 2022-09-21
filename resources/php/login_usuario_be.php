<?php
    session_start();

    include("conexion_be.php");

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE user = '$user' and pass = '$pass'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $user;
        header("location: ../../inicio.php");
        exit;
    }else{
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../../index.php";
            </script>
        ';
        exit;
    }
?>