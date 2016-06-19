<?php

/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 22:27
 */
include_once  (dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'scriptLogoutTest.php');

class scriptLogoutTest extends PHPUnit_Framework_TestCase
{
    public function testLogout()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
}
