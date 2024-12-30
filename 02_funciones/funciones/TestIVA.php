<?php

use PHPUnit\Framework\TestCase;

//require_once '../bootstrap.php';
//require_once '..\02_funciones\funciones\iva.php';
require_once 'iva.php';

class TestIVA extends TestCase
{
    public function testConcatenateStrings()
    {
        //$myClass = new MyClass();
        //$str1 = 'hello';
        //$str2 = 'world';
        //$expectedResult = 'helloworld';

        //$result = $myClass->concatenateStrings($str1, $str2);

        $precioObtenido = precioConIVA(10, "GENERAL");
        $precioEsperado = 12.1;

        $this->assertEquals($precioEsperado, $precioObtenido);
    }
}