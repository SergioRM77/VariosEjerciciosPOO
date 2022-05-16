<?php
use PHPUnit\Framework\TestCase;
use ITEC\DAW\Clases\Fecha;

final class FechaTest extends TestCase{
    public function testFecha(){
        $fecha = Fecha::createFecha(20, 5, 2000);
        $fecha2 = Fecha::createFecha(21, 5, 2000);
        $fechaFinAnnio = new Fecha(31,12,2010);
        $this->assertTrue($fecha->is_validDate());
        $this->assertEquals('20/5/2000',$fecha->getFechaStr());
        $this->assertEquals('1/1/2011',$fechaFinAnnio->DiaSiguiente());
        $this->assertEquals($fecha2->getFechaStr(),$fecha->DiaSiguiente());


    }
}