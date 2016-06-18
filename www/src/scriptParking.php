<?php
/**
 * Created by PhpStorm.
 * User: Juanlu
 * Date: 18/06/2016
 * Time: 13:36
 */

include_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'Utilidades'.DIRECTORY_SEPARATOR.'conexionBD.php');

$cadenaSQL = "select count(idPlaza) from Plaza;";
$resultado = mysqli_query($conexion, $cadenaSQL);
$suma = mysqli_fetch_array($resultado);