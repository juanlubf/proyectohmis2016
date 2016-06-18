<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
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
<?php include_once 'scriptParking.php';
global $suma;?>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
<script>
    $(function() {
        $('#basicExample').timepicker();
    });
</script>
<section class="container">
    <div class="pAdmin">
        <h1>Consulta de disponibilidad</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <p>Introduzca la fecha y la hora</p>
            <p><input id="datepicker" type="text">
                <input id="basicExample" type="text" class="time" />
            </p>
            <p><input type="button" value="Buscar" style="float: right" onclick=""></p>
            <p><input type="button" name="volver" value="Volver" onclick="location.href='scriptLogout.php';"></p>
        </form>
    </div>
</section>

</body>
</html>