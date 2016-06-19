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
$from = $fecha.' '.$desde;
$to = $fecha.' '.$hasta;

$cadenaSQL = "
SELECT idPlaza FROM Plaza
WHERE idPlaza NOT IN (SELECT Plaza_idPlaza FROM reserva
    WHERE Desde >= '".$from."' AND Hasta >= '".$to."'
    )
AND Tipo_Vehiculo = ".$tipoV."
ORDER BY RAND()
LIMIT 1;
";
$resultado = mysqli_query($conexion, $cadenaSQL);
$devolver = mysqli_fetch_row($resultado);

if($devolver[0] != null || $devolver[0] != ''){
    $cadenaSQL = "
    SELECT Deck.nombre, Planta.nombre, Plaza.nombre 
    FROM Deck, Planta, Plaza
    WHERE
    Deck.idDeck = Planta.Deck_idDeck AND 
    Plaza.Planta_idPlanta = Planta.idPlanta AND 
    Plaza.idPlaza = ".$devolver[0]."
    ;";
    $resultado = mysqli_query($conexion, $cadenaSQL);
    $array= array();
    while($fila = mysqli_fetch_array($resultado)){
        array_push($array, $fila[0]);
        array_push($array, $fila[1]);
        array_push($array, $fila[2]);
    }
    //guardamos las variables para aplicacion de consulta sesion
    $_SESSION['idPlaza'] = $devolver[0];
    $_SESSION['from'] = $from;
    $_SESSION['to'] = $to;
}
/*
echo json_encode($cadenaSQL);
*/
?>