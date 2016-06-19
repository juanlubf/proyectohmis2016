<?php
/**
 * Created by PhpStorm.
 * User: Juanlu
 * Date: 16/06/2016
 * Time: 20:57
 */

if ($_POST) {
    include_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'Utilidades'.DIRECTORY_SEPARATOR.'conexionBD.php');
    $a = mysqli_real_escape_string($conexion, $_POST['user']);
    $p = mysqli_real_escape_string($conexion, $_POST['pass']);

    $cadenaSQL = "insert into user (nombre, password, esAdmin) values ('$a', '$p', FALSE);";
    $resultado = mysqli_query($conexion, $cadenaSQL);
    $fila = $resultado->fetch_object();
    header('location: panelUsuario.php');
}
