<?php

/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 22:25
 */
include_once  (dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'scriptConfirmarReserva.php');

class scriptConfirmarReservaTest extends PHPUnit_Framework_TestCase
{
    public function testConfirmar()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
}
