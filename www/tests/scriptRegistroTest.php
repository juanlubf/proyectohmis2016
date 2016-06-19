<?php

/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 22:29
 */
include_once  (dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'scriptRegistroTest.php');

class scriptRegistroTest extends PHPUnit_Framework_TestCase
{
    public function testRegistro()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
}
