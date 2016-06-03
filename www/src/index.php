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
  <?php include 'Utilidades/conexionBD.php'?>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login to Web App</h1>
      <form method="post" action="">
        <p><input type="text" name="user" value="" placeholder="Usuario o Email"></p>
        <p><input type="password" name="password" value="" placeholder="Contraseña"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Recordarme en este ordenador
          </label>
        </p>
        <p class="submit"><input type="submit" name="login" value="Entrar"></p>
        <p>¿Aún no tienes cuenta?</p>
        <p class="submit"><input type="submit" name="registro" value="Registrarse"></p>
      </form>
    </div>

    <div class="login-help">
      <p>¿Has olvidado tu contraseña? <a href="index.html">Click aquí para resetearla</a>.</p>
    </div>
  </section>

  <?php
	session_start(); //session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie
	function verificar_login($admin, $password, &$userid)
    {
      $cadenaSQL = "select * from Admin;";
      $resultado = mysql_query($cadenaSQL);
      $fila = mysql_fetch_object($resultado);				
	  if (($fila -> usuario) == $admin && ($fila -> passw) == $password) {
        $userid=$fila->idAdmin;
        return 1;
        } else {
          return 0;
        }
      mysql_free_result($resultado);
    }
	
	/*Luego haremos una serie de condicionales que identificaran el momento en el boton de login es presionado y cuando este sea presionado llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/
    if(!isset($_SESSION['userid'])) { //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
	  if(isset($_POST['login'])) { //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
		if(verificar_login($_POST['user'],$_POST['password'],$userid) == 1) { //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
		  /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
		  $_SESSION['userid'] = $userid;
		  //header("location: index.php");
		  echo "Login correcto";
		} else {
		  echo "<div id='error'><h3>Usuario o contraseña incorrectos</h3></div>";
		}
	  }
	} else { // Si la sesión ya se ha iniciado correctamente, redireccionamos autamticamente al indice
  	  //header('location: index.php');
	  session_destroy();
	}
  ?> 
  <!--<section class="about">
    <p class="about-links">
      <a href="http://www.cssflow.com/snippets/login-form" target="_parent">View Article</a>
      <a href="http://www.cssflow.com/snippets/login-form.zip" target="_parent">Download</a>
    </p>
    <p class="about-author">
      &copy; 2012&ndash;2013 <a href="http://thibaut.me" target="_blank">Thibaut Courouble</a> -
      <a href="http://www.cssflow.com/mit-license" target="_blank">MIT License</a><br>
      Original PSD by <a href="http://www.premiumpixels.com/freebies/clean-simple-login-form-psd/" target="_blank">Orman Clark</a>
  </section>-->
</body>
</html>
