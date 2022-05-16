<?php
use PHPUnit\Framework\TestCase;
use ITEC\DAW\Clases\Banco;

final class BancoTest extends TestCase{
    public function testBanco(){
        $cli1 = new Banco("Pepe", 150);
        $cli2 = new Banco("Luis", 1150);
        $cli3 = new Banco("Alex", 50);
        $cli4 = new Banco("Ana", 285);

        $this->assertEquals("Pepe", $cli1->getCliente());
        $this->assertEquals(1150, $cli2->getSaldo());
        $this->assertEquals(203, $cli3->addIngreso(153));
        $this->assertEquals(200, $cli4->takeRetiro(85));
        $this->assertEquals(0, $cli4->takeRetiro(55885));
    }

    public function testBanco2(){
        $cli5 = new Banco("Pepe1", 150);
        $cli6 = new Banco("Luis1", 1150);
        $cli7 = new Banco("Alex1", 50);
        $cli8 = new Banco("Ana1", 285);
        $this->assertEquals(Banco::showList(), $cli5::showList());
        $this->assertEquals(Banco::showList(), $cli8::showList());
        $this->assertEquals("Cliente: Pepe1. Numcuenta: 4. Saldo: 150\n", $cli5->__toString());
        //aqui el método estatico está guardando todo el dinero
        //tanto de la función de arriba como aquí, puesto que es está 'estático'
        //para esta clase y en otras si se comunica
        $this->assertEquals(3138, Banco::MoneyInTheBank());
        //aqui podemos ver todos los clientes
        //print_r(Banco::showList());
    }

}