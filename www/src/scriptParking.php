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
$plazas = mysqli_fetch_array($resultado);
mysqli_free_result($resultado);

$cadenaSQL = "select count(idDeck) from Deck;";
$resultado = mysqli_query($conexion, $cadenaSQL);
$decks = mysqli_fetch_array($resultado);
mysqli_free_result($resultado);

$cadenaSQL = "select count(idPlanta) from Planta;";
$resultado = mysqli_query($conexion, $cadenaSQL);
$plantas = mysqli_fetch_array($resultado);
mysqli_free_result($resultado);

$cadenaSQL = "select count(idReserva) from Reserva;";
$resultado = mysqli_query($conexion, $cadenaSQL);
$reservas = mysqli_fetch_array($resultado);
mysqli_free_result($resultado);

if (isset($_POST['confirmar'])) {
    $cadenaSQL = "INSERT INTO Deck(nombre) VALUES ('Edificio');";
    $resultado = mysqli_query($conexion, $cadenaSQL);
    //mysqli_free_result($resultado);

    $cadenaSQL = "select @id:=max(idDeck) from Deck;";
    $resultado = mysqli_query($conexion, $cadenaSQL);
    //mysqli_free_result($resultado);

    $cadenaSQL = "INSERT INTO Planta(nombre, Deck_idDeck) VALUES ('Planta', @id);";
    for ($i = 0; $i < $_POST['plantas']; $i++) {
        $resultado = mysqli_query($conexion, $cadenaSQL);
       // mysqli_free_result($resultado);
    }

    $cadenaSQL = "select @id2:=max(idPlanta) from Planta;";
    $resultado = mysqli_query($conexion, $cadenaSQL);
    //mysqli_free_result($resultado);

    $cadenaSQL = "INSERT INTO Plaza(nombre, Planta_idPlanta, Tipo_Vehiculo) VALUES ('Plaza', @id2, 1);";
    for ($i = 0; $i < $_POST['plazas']; $i++) {
        $resultado = mysqli_query($conexion, $cadenaSQL);
       // mysqli_free_result($resultado);
    }
}