<?php
session_start();
if (isset($_SESSION["userid"])){
    $user = $_SESSION["userid"];
}
if (isset($_REQUEST["fecha"])){
    $fecha = $_REQUEST["fecha"];
}
if (isset($_REQUEST["desde"])){
    $desde = $_REQUEST["desde"];
}
if (isset($_REQUEST["hasta"])){
    $hasta = $_REQUEST["hasta"];
}
if (isset($_REQUEST["tipoV"])){
    $tipoV = $_REQUEST["tipoV"];
}
include_once "scriptBuscar.php";

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
    <script type="text/javascript" src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.css" />
    <!--[if lt IE 9]<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<section class="container">
    <div class="pAdmin">
        <form id="myForm" method="post" action="resultadoConfirmarReserva.php" enctype="multipart/form-data">
        <?php
        if ($devolver[0] != null){
            echo "<h1> Existen plazas libres </h1>";
            echo "<h2> ¿Desea realizar una reserva?</h2>";
            $x = 0;
            $i = 0;
            foreach ($array as $value) {
                $x = $i % 3;
                switch ($x) {
                    case 0:
                        echo "Deck : [".$value."]<br/>";
                        break;
                    case 1:
                        echo "Planta : [".$value."]<br/>";
                        break;
                    case 2:
                        echo "Plaza : [".$value."]<br/>";
                        break;
                }
                $i++;
            }
        }else{
            echo "<h1> No hay plazas libres </h1>";
        }
        ?>
            <p><input type="submit" value="Confirmar" style="float: right"></p>
            <p><input type="button" name="volver" value="Volver" onclick="location.href='scriptLogout.php';"></p>
        </form>
    </div>
</section>
</body>
</html>