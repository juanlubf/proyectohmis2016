<?php

/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 22:32
 */
include_once  (dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'scriptTiposVehiculosTest.php');

class scriptTiposVehiculosTest extends PHPUnit_Framework_TestCase
{
    public function testTiposVehiculo()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
}
