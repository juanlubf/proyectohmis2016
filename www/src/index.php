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
<?php include_once "scriptLogin.php";
global $error;?>
<body>
  <section class="container">
    <div class="login">
      <h1>Acceso a la web del parking</h1>
      <form method="post" action="">
        <p><input type="text" name="user" value="" placeholder="Usuario"></p>
        <p><input type="password" name="password" value="" placeholder="Contraseña"></p>
        <?php if($error) echo "<label>Usuario o contraseña incorrectos</label>";?>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Recordarme en este ordenador
          </label>
        </p>
        <p class="submit"><input type="submit" name="login" value="Entrar"></p>
        <p>¿Aún no tienes cuenta?</p>
          <p class="submit"><input type="button" name="registro" value="Registrarse" onClick="location.href='panelRegistro.php';"/></p>
      </form>
    </div>
  </section>
</body>
</html>
