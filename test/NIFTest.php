<?php
use PHPUnit\Framework\TestCase;
use ITEC\DAW\Clases\NIF;

final class NIFTest extends TestCase{
    public function testNIF(){
        $nif1 = new NIF(25339645);
        $nif0 = new NIF(253396456546879168);
        $this->assertEquals('25339645B',$nif1->__toString());
        $this->assertTrue($nif1->is_validLetra('B'));
        $this->assertEquals('0XX',$nif0->__toString());
        $nif0->setNumber(55897123);
        $this->assertEquals('55897123E',$nif0->__toString());
        
    }
}