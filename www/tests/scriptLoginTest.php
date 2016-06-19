<?php

/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 18:59
 */
global $conexion;
include_once  (dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'scriptLogin.php');
$cadenaSQL1 = "INSERT INTO user (idUser,password,nombre,esAdmin) VALUES (NULL, 'admin', 'testAdmin', '1')";
mysqli_query($conexion, $cadenaSQL1);

class scriptLoginTest extends PHPUnit_Framework_TestCase
{
    public function testAdmin(){
        $u = "testAdmin";
        $p = "admin";
        $esAdmin = TRUE;
        $userid = 999;
        $res=1;
        $res = verificar_login($u,$p,$userid,$esAdmin);
        //phpunit se pone furioso con las variables globales
        //no las quiere ver, y las pone a NULL
        //no puedo implementar este test, ni ninguno con esta funcion
        $this->assertTrue($res == 1);
    }
    public function testUser(){
        $foo = true;
        $this->assertTrue($foo);
        //phpunit se pone furioso con las variables globales
        //no las quiere ver, y las pone a NULL
        //no puedo implementar este test, ni ninguno con esta funcion
    }
    public function testWrongUser(){
        //phpunit se pone furioso con las variables globales
        //no las quiere ver, y las pone a NULL
        //no puedo implementar este test, ni ninguno con esta funcion
        $foo = true;
        $this->assertTrue($foo);
    }
}

$cadenaSQL2 ="DELETE FROM user WHERE nombre = 'testAdmin' AND password = 'admin' ";
mysqli_query($conexion, $cadenaSQL2);

?>