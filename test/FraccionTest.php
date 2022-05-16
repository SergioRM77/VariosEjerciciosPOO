<?php
use PHPUnit\Framework\TestCase;
use ITEC\DAW\Clases\Fraccion;

final class FraccionTest extends TestCase{
    public function testFraccion(){
        $obj1 = new Fraccion(3,7);
        $obj2 = new Fraccion(5,8);
        $obj3 = new Fraccion(1,0);
        $obj4 = new Fraccion(0,0);

        $this->assertEquals(1.053, Fraccion::SumarFr($obj1, $obj2));
        $this->assertEquals(-0.197, Fraccion::RestaFr($obj1, $obj2));
        $this->assertEquals(0.2675, Fraccion::MultiplicarFr($obj1, $obj2));
        $this->assertEquals(0.6848, Fraccion::DividirrFr($obj1, $obj2));
        $this->assertEquals(0, Fraccion::MultiplicarFr($obj1, $obj3));
        $this->assertEquals(0, Fraccion::DividirrFr($obj2, $obj4));
    }
}

?>