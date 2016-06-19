<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 19/06/2016
 * Time: 21:48
 */
include_once  (dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'scriptBuscar.php');
class scriptBuscarTest extends PHPUnit_Framework_TestCase{
    public function testBuscar()
    {
        $foo = true;
        $this->assertTrue($foo);
    }  
}
?>