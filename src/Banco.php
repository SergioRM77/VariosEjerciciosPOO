<?php
namespace ITEC\DAW\Clases;

class Banco{
    private static int $IDCliente = 0;
    private int $numcuenta = 0;
    private string $cliente;
    private int $saldo;
    private static array $listaClientes = [];
    private static int $totalBanco = 0;

    public function __construct(string $cliente, int $saldo)
    {
        $this->cliente = $cliente;
        $this->saldo = $saldo;
        $this->numcuenta = Banco::asignarIDCliente();
        self::addToListClient();
        
    }

    private static function asignarIDCliente(){
         return Banco::$IDCliente++;
    }

    private function addToListClient(){
        return Banco::$listaClientes[self::$IDCliente] = $this;
    }

    public static function showList(){
        return self::$listaClientes;
    }

    /**
     * ingreso de efectivo
     * @param int $ingreso
     */
    public function addIngreso(int $ingreso){
        return $this->saldo += $ingreso;
    }

    /**
     * retirar efectivo hasta llegar a 0
     * @param int $retiro
     */
    public function takeRetiro(int $retiro){
        return $this->saldo > $retiro ? $this->saldo -= $retiro : $this->saldo = 0;
        
    }



    public static function MoneyInTheBank(){
        foreach (self::$listaClientes as $numclient => $client) {
            self::$totalBanco += $client->saldo;
        }
        return self::$totalBanco;
    } 
    public function __toString()
    {
        return "Cliente: " . $this->cliente . ". Numcuenta: " . $this->numcuenta .". Saldo: " . $this->saldo ."\n";
    }

    public function getCliente(){
        return $this->cliente;
    }
    public function getSaldo(){
        return $this->saldo;
    }
}
/*
$cli0 = new Banco("Sergio", 100);
echo $cli0;
$cli00 = new Banco("Juan", 1000);
echo $cli00;

$cli1 = new Banco("Pepe", 100);
$cli1->addIngreso(156);
echo $cli1;
$cli1->takeRetiro(100);
echo $cli1;
$cli1->takeRetiro(1000);
echo $cli1;
print_r(Banco::showList());

echo Banco::MoneyInTheBank();
*/
?>