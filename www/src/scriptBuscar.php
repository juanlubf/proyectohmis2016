<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 5:22
 */
include_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'Utilidades'.DIRECTORY_SEPARATOR.'conexionBD.php');
/*
 *encontrar en la bbdd 
 */
$cadenaSQL = "
SELECT idPlaza FROM Plaza
WHERE idPlaza NOT IN (SELECT Plaza_idPlaza FROM reserva
/*aqui va condicion de disponibilidad*/
)
ORDER BY RAND()
LIMIT 1;
";
$resultado = mysqli_query($conexion, $cadenaSQL);
$devolver = mysqli_fetch_row($resultado);
echo json_encode($devolver);