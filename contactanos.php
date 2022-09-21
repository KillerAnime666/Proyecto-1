<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GameStore</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <header>
        <ul class="nav justify-content-center" style="background-color: #240230;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">
                    <img src="resources/images/icon.png" alt="GameStore">
                </a>
            </li>
        </ul>
        <nav class="navbar-brand" style="background-color: #240230; padding-top: 3px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button">INICIO</button>
                    </div>
                </a>
            </div>
        </nav>
    </header>
    <br>
    <section>
        <form id="formajax" method="POST">
            <section>
                <div class="contenedor">
                    <div class="items">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6175.056995029377!2d-68.11370572178062!3d-16.52336201772722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20ee187a3103%3A0x2f2bb2b7df32a24d!2sUniversidad%20Cat%C3%B3lica%20Boliviana%20%22San%20Pablo%22%20Regional%20La%20Paz!5e0!3m2!1ses!2sbo!4v1662445024494!5m2!1ses!2sbo"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="derecho">
                        <h2 style="color: white;">Formulario de Contacto</h2>
                        <input type="text" name="nombre" class="datos" placeholder="Nombre"><br>
                        <input type="text" name="apellido" class="datos" placeholder="Apellidos"><br>
                        <input type="text" name="cell" class="datos" placeholder="Nro. Celular"><br>
                        <input type="text" name="mail" class="datos" placeholder="Correo Electronico"><br>
                        <input id="btnEnviar" name="btnEnviar" type="submit" value="Enviar"/>
                    </div>
                </div>
            </section>
        </form>
    </section>
    <footer class="footerstyle">
        <center>
            <a href="http://facebook.com">
                <img class="imgstyle" src="resources/images/124010.png" alt="facebook">
            </a>
            <a href="https://web.whatsapp.com/">
                <img class="imgstyle" src="resources/images/174879.png" alt="whatsapp">
            </a>
        </center>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btnEnviar').click(function(){
			var datos = $('#formajax').serialize();
            $.ajax({
				type: "POST", 
				url: "formulario.php",
				data: datos,
				success: function(r){
					if(r==1){
						alert("Envío Registrado");
					}else{
						alert("fallo el server");
					}
				}
			});
			return false;
		});
	});
</script>