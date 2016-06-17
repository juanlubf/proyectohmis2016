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
<section class="container">
    <div class="login">
        <h1>Registro</h1>
        <form method="post" action="">
            <p>Usuario<input type="text" name="user" value="" placeholder=""></p>
            <p>Contraseña<input type="password" name="password" value="" placeholder=""></p>
            <p class="submit"><input align="left" type="button" name="volver" value="Volver" onclick="location.href='index.php';">
                <input align="right" type="submit" name="registro" value="Registrarse"></p>
        </form>
    </div>
</section>

<?php include_once 'scriptRegistro.php' ?>

</body>
</html>
