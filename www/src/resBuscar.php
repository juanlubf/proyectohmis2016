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
<?php
echo $fecha;
echo "<br/>";
echo $desde;
?>

</body>
</html>