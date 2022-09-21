<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,
    500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>/
  <!--   <header>
        <ul class="nav justify-content-center" style="background-color: #CBE0F2;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">
                    <img src="resources/images/icon.png" alt="GameStore">
                </a>
            </li>
        </ul>
    </header> -->
    <section>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesion para entrar a la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesion</p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div>
                </div>
                <div class="contenedor__login-register">
                    <form action="" class="formulario__login">
                        <h2>Iniciar Sesion</h2>
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <button>Entrar</button>
                    </form>
                    <form action="resources/php/registro_usuario_be.php" class="formulario__register">
                        <h2>Regístrate</h2>
                        <input type="text" placeholder="Nombre Completo" name = "nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name = "correo">
                        <input type="text" placeholder="Usuario" name = "user">
                        <input type="password" placeholder="Contraseña" = "pass">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
    </section>
    <script src="resources/Js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>