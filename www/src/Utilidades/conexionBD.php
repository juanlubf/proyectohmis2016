<?php
	include_once "variablesBD.php";

	$conexion = mysql_connect($host, $user, $password)
		or die("Error al conectar con el servidor");
	//echo "Conectado a MySQL." . "<br/>" . "Identificador de conexión: $conexion" . "<br/>";

	//Seleccion de la base de datos
	
	mysql_select_db($database, $conexion)
		or die("Error al seleccionar la base de datos");
	//echo "Base de datos ... seleccionada";

?>