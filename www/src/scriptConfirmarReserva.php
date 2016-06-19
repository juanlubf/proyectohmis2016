<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 15:49
 */
include_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'Utilidades'.DIRECTORY_SEPARATOR.'conexionBD.php');
$user ="";
if (isset($_SESSION['userid'])){
    $user = $_SESSION['userid'];
}
$idPlaza = "";
if (isset($_SESSION["idPlaza"])){
    $idPlaza = $_SESSION["idPlaza"];
}
$from="";
if (isset($_SESSION["from"])){
    $from = $_SESSION["from"];
}
$to = "";
if (isset($_SESSION["to"])){
    $to = $_SESSION["to"];
}

//comprobamos que no hayamos insertado ya la fila
$cadenaSQL = "
SELECT COUNT(idReserva) as total FROM Reserva
    WHERE
     Plaza_idPlaza = '" . $idPlaza . "' 
     AND User_idUser = '" . $user . "' 
     AND Desde = '" . $from . "'
     AND Hasta = '" . $to . "'
";
$res = mysqli_query($conexion, $cadenaSQL);
$n = mysqli_fetch_row($res)[0];

if($n == 0){

    $cadenaSQL = "
        INSERT INTO Reserva (idReserva, Plaza_idPlaza, User_idUser, Desde, Hasta)
        VALUES (NULL,'" . $idPlaza . "','" . $user . "','" . $from . "','" . $to . "')
        ;";
    $resultado = mysqli_query($conexion, $cadenaSQL);

    if ($resultado = TRUE) {
        $cadenaSQL = "SELECT idReserva FROM Reserva ORDER BY idReserva DESC LIMIT 0, 1;";
        $resultado2 = mysqli_query($conexion, $cadenaSQL);
        $id = mysqli_fetch_row($resultado2)[0];
    }
}else{
    $resultado = FALSE;
}
?>
