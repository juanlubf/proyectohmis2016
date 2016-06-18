<?php
/**
 * Created by PhpStorm.
 * User: Juanlu
 * Date: 16/06/2016
 * Time: 18:47
 */

include_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'Utilidades'.DIRECTORY_SEPARATOR.'conexionBD.php');

session_start(); //session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie

/**
 * @param $admin
 * @param $password
 * @param $userid
 * @return int
 */
function verificar_login($admin, $password, &$userid, &$esAdmin)
{
    global $conexion;
    $a = mysqli_real_escape_string($conexion, $admin);
    $p = mysqli_real_escape_string($conexion, $password);
    $cadenaSQL = "select * from User where nombre='$a' and password='$p';";
    $resultado = mysqli_query($conexion, $cadenaSQL);
    $fila = $resultado->fetch_object();
    if ($fila != null) {
        $userid = $fila->idUser;
        $esAdmin = $fila->esAdmin;
        return 1;
    } else {
        return 0;
    }
    mysqli_free_result($resultado);
}

/*Luego haremos una serie de condicionales que identificaran el momento en el boton de login es presionado y cuando este sea presionado llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/
if(!isset($_SESSION['userid'])) { //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
    if(isset($_POST['login'])) { //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
        if(verificar_login($_POST['user'],$_POST['password'],$userid, $esAdmin) == 1) { //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
            /*Si el login fue correcto, registramos la variable de sesión.*/
            if (isset($_POST['remember_me'])){
                $_SESSION['userid'] = $userid;
            }
            if ($esAdmin)
                header('location: panelAdmin.php');
            else
                header('location: panelUsuario.php');
            //echo "Login correcto";
        } else {
            //echo "<div id='error'><h3>Usuario o contraseña incorrectos</h3></div>";
        }
    }
} else { // Si la sesión ya se ha iniciado correctamente, redireccionamos automaticamente al panel
    header('location: panelAdmin.php');
    //session_destroy();
}

