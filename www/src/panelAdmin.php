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
        <h1>Configuración del parking</h1>
        <form method="post" action="">
            <p>Número total de plazas disponibles actualmente: <?php echo $suma[0];?></p>
            <p><input type="button" value="Añadir planta" onclick="mostrar('addPlaza')"></p>
            <p class="addPlaza">Plazas <input type="number">
                <input type="submit" value="Confirmar" style="float: right;"></p>
            <p><input type="button" name="volver" value="Volver" onclick="location.href='scriptLogout.php';"></p>
        </form>
    </div>
</section>

<script>
    function mostrar(str) {
        document.getElementsByClassName(str)[0].style.display = 'block';
    }
</script>

</body>
</html>
