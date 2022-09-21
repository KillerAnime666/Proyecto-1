<?php
	// Conexión con la base de datos

	$conexion = mysqli_connect('localhost', 'root', '', 'gamestore');

	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$cell = $_POST['cell'];
	$mail = $_POST['mail'];

	// INSERT INTO 

	$sql="INSERT INTO contacto (id, nombre, apellido, cell, mail)
			values (null, '$nombre', '$apellido', '$cell', '$mail')";
			
	echo mysqli_query($conexion, $sql);	
?>