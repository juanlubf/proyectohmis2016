<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 15:26
 */
session_start();
include_once "scriptConfirmarReserva.php";
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/ >
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!--[if lt IE 9]<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<section class="container">
    <div class="pAdmin">
            <h1>Estado Confirmacion Reserva</h1>
        <?php
        if($resultado == TRUE) {
            echo "La Reserva ha sido exitosa <br>";
            echo "id registro :[".$id."]<br>";
            
        }else{
            echo"Registro de reserva ha fallado o bien su reserva ya se realizo <br>";
        }
        echo "user id :" . $user . "<br>";
        echo "idPlaza :" . $idPlaza . "<br>";
        echo "from :" . $from . "<br>";
        echo "to :" . $to . "<br>";
        ?>
            <p><input type="button" name="volver" value="Volver" onclick="location.href='scriptLogout.php';"></p>
            </form>
        </div>
    </section>
</body>
</body>
</html>
    