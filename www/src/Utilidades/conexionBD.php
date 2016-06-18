<?php
	include_once "variablesBD.php";

	$conexion = mysqli_connect($host, $user, $password, $database)
		or die("Error al conectar con el servidor");
	//echo "Conectado a MySQL." . "<br/>" . "Identificador de conexión: $conexion" . "<br/>";
