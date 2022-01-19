<?php

use PHPUnit\Framework\TestCase;
include './src/dni.php';

class dniTest extends TestCase {

    public function testContarCaracteres() {
       
        $objeto = new dni('53890477', 'M');
        $this->assertEquals(9, $objeto->contarCaracteres());

    }
    
    public function testLetra() {
       
        $objeto = new dni('53890477', 'M');
        $this->assertEquals('M', $objeto->sacarLetra());

    }
}


?>