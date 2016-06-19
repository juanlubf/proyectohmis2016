<?php

/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 13:10
 */
include_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'Utilidades'.DIRECTORY_SEPARATOR.'conexionBD.php');
$cadenaSQL = "
SELECT * from Tipo_Vehiculo;
";
$resultado = mysqli_query($conexion, $cadenaSQL);
$array= array();
while($fila = mysqli_fetch_array($resultado)){
    array_push($array, $fila[0]);
    array_push($array, $fila[1]);
}

?>