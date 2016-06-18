<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<?php include_once 'scriptParking.php';
global $suma;?>
<section class="container">
    <div class="pAdmin">
        <h1>Consulta de disponibilidad</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <p>Introduzca la fecha y la hora</p>
            <p><link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/ >
                <script src="jquery.js"></script>
                <script src="jquery.datetimepicker.js"></script></p>
            <p class="addPlaza">Plazas <input type="number">
                <input type="submit" value="Confirmar" style="float: right;"></p>
            <p><input type="button" name="volver" value="Volver" onclick="location.href='scriptLogout.php';"></p>
        </form>
    </div>
</section>

</body>
</html>