<?php

/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 22:28
 */
include_once  (dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'scriptParkingTest.php');

class scriptParkingTest extends PHPUnit_Framework_TestCase
{
    public function testParking()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
}
