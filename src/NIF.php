<?php
namespace ITEC\DAW\Clases;

class NIF{
    private int $Nif;
    private string $letra;
    private static array $rango = [
        "a-j"=> ["A","B","C","D","E","F","G","H","I","J"],
        "k-s"=> ["K","L","N","M","Ñ","O","P","Q","R","S"],
        "t-z"=> ["T","U","V","W","X","Y","Z",""]
    ];
    /**
     * Para calcular NIF debe tener 8 digitos
     * @param int $NIF
     */
    public function __construct(int $Nif)
    {
        if(strlen(strval($Nif))==8){
            $this->Nif = $Nif;
            $this->letra = $this->calcularLetra($Nif);
        }
    }

    private function calcularLetra(int $num){
        
        $PrimDig = floor($num / 10000000);
        if($PrimDig == 1){
            return "A";
        }elseif($PrimDig == 2){
            return "B";
        }elseif($PrimDig == 3){
            return "C";
        }elseif($PrimDig == 4){
            return "D";
        }elseif($PrimDig == 5){
            return "E";
        }elseif($PrimDig == 6){
            return "F";
        }elseif($PrimDig == 7){
            return "G";
        }elseif($PrimDig == 8){
            return "H";
        }elseif($PrimDig == 9){
            return "I";
        }elseif($PrimDig == 0){
            return "J";
        }
        /*
        esto es otra manera, pero con numeros aleatorios los tests no van a salir bien
        if(($num%4 || $num%5) && !$num%3){
            $clave = array_rand(self::$rango["a-j"],1);
            return self::$rango["a-j"][$clave];
        }elseif(($num%3 || $num%7) && !$num%2){
            $clave = array_rand(self::$rango["k-s"],1);
            return self::$rango["k-s"][$clave];
        }else{
            $clave = array_rand(self::$rango["t-z"],1);
            return self::$rango["t-z"][$clave];

        }
        */
    }

    /**
     * comprueba si un NIF tiene esa letra
     * @param string $letr
     */
    public function is_validLetra(string $letr): bool{
        //este metodo comprueba si 2 string son iguales, insensible a Mayus o Minus,
        //devuelve 0 si es correcto
        return strcasecmp($this->letra, $letr) == 0;
    }
    
    public function __toString()
    {
        return $this->Nif . $this->letra;
    }

    public function ChangeNumber(int $num){
        if(isset($this) == false && strlen(strval($num))==8){
            $this->Nif = $num;
            $this->letra = $this->calcularLetra($num);
        }
    }
}
$dni = new NIF(25608320);
var_dump($dni);
//var_dump($dni->is_validLetra("n"));
$dni->ChangeNumber(25608321);
var_dump($dni);
//$dni->ChangeNumber(12121212);
//var_dump($dni);
?>