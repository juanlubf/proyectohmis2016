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
        <form name="formulario" method="post" action="">
            <p>Usuario<input type="text" name="user" maxlength="20">
                <label id="er1" style="display: none;" >Usuario debe contener al menos 5 caracteres</label>
            </p>
            <p>Contraseña<input type="password" name="pass" maxlength="20">
                <label id="er2" style="display: none;" >Contraseña debe contener al menos 6 caracteres</label>
            </p>
            <p>Repita la contraseña<input type="password" name="pass2" maxlength="20">
                <label id="er3" style="display: none;" >Las contraseñas no coinciden</label>
            </p>
            <p class="submit"><input style="float: left" type="button" name="volver" value="Volver" onclick="location.href='index.php';">
                <input type="button" name="registro" value="Registrarse" onclick="comprobar(this.form)"></p>
        </form>
    </div>
</section>

<script>
    function comprobar (form) {
        if (form.user.value.length < 5) {
            document.getElementById("er1").style.display = 'block';
            document.getElementById("er2").style.display = 'none';
            document.getElementById("er3").style.display = 'none';
        } else {
            if (form.pass.value.length < 6) {
                document.getElementById("er1").style.display = 'none';
                document.getElementById("er2").style.display = 'block';
                document.getElementById("er3").style.display = 'none';
            } else {
                if (form.pass.value != form.pass2.value) {
                    document.getElementById("er1").style.display = 'none';
                    document.getElementById("er2").style.display = 'none';
                    document.getElementById("er3").style.display = 'block';
                } else {
                    form.submit();
                }
            }
        }
    }
</script>
<?php include_once 'scriptRegistro.php' ?>
</body>
</html>
