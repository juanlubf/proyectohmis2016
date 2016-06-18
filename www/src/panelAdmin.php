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
global $plazas;
global $decks;
global $plantas;
global $reservas?>
<section class="container">
    <div class="pAdmin">
        <h1>Configuración del parking</h1>
        <form method="post" action="">
            <p>Número total de reservas activas actualmente: <?php echo $reservas[0];?></p>
            <p><input type="button" value="Añadir edificio" onclick="mostrar('mostrar', 0)">
                <input type="button" value="Mostrar edificios" style="float: right" onclick="mostrar('mostrar', 1)"></p>
            <p class="mostrar">Plantas <input name="plantas" type="number" placeholder="0">
                <br><br>Plazas por planta <input name="plazas" type="number" placeholder="0"></p>
            <p class="mostrar">Número total de edificios <?php echo $decks[0];?>
                <br><br>Número total de plantas <?php echo $plantas[0];?>
                <br><br>Número total de plazas <?php echo $plazas[0];?></p>
            <p><input type="submit" name="confirmar" value="Confirmar" style="float: right;">
                <input type="button" name="volver" value="Cerrar sesión" onclick="location.href='scriptLogout.php';"></p>
        </form>
    </div>
</section>

<script>
    function mostrar(str, num) {
        var aux = document.getElementsByClassName(str);
        for (var i = 0; i < aux.length; i++)
            aux[i].style.display = 'none';
        aux[num].style.display = 'block';
    }
</script>

</body>
</html>
