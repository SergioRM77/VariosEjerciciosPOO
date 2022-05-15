<?php
namespace ITEC\DAW\Clases;

class Fraccion{
    private int $numerador;
    private int $denominador;

    public function __construct(int $numerador, int $denominador)
    {
        $this->numerador = $numerador;
        $this->denominador = $denominador;
        
    }

    private function FraccionResult(object $obj){
        //bcdiv(num1,num2,numDecimales)te divide 2 numeros y limitas los decimales devueltos
        return bcdiv($obj->numerador, $obj->denominador, 3);
    }
    
    /**
     * devuelve suma de fracciones a resultado con decimales
     * @param object $obj1
     * @param object $obj2
     * @return
     */
    public static function SumarFr(object $obj1, object $obj2){
        //tambien existe is_a($objeto, "nombre_de_clase") te devuelve bool
        if($obj1 instanceof Fraccion && $obj2 instanceof Fraccion){
            $resultado = $obj1->FraccionResult($obj1) + $obj2->FraccionResult($obj2);
            return $resultado;
        }
        return null;
    }

    /**
     * devuelve la resta de 2 fracciones en resultado decimal
     * @param object $obj1
     * @param object $obj2
     * @return
     */
    public static function RestaFr(object $obj1, object $obj2){
        if($obj1 instanceof Fraccion && $obj2 instanceof Fraccion){
            $resultado = $obj1->FraccionResult($obj1) - $obj2->FraccionResult($obj2);
            return $resultado;
        }
        return null;
    }

    /**
     * devuelve la multiplicacion de 2 fracciones en resultado decimal
     * @param object $obj1
     * @param object $obj2
     * @return
     */
    public static function MultiplicarFr(object $obj1, object $obj2){
        if($obj1 instanceof Fraccion && $obj2 instanceof Fraccion){
            $resultado = $obj1->FraccionResult($obj1) * $obj2->FraccionResult($obj2);
            return $resultado;
        }
        return null;
    }

    /**
     * devuelve la division de 2 fracciones en resultado decimal
     * @param object $obj1
     * @param object $obj2
     * @return
     */
    public static function DividirrFr(object $obj1, object $obj2){
        if($obj1 instanceof Fraccion && $obj2 instanceof Fraccion){
            $resultado = $obj1->FraccionResult($obj1) / $obj2->FraccionResult($obj2);
            return $resultado;
        }
        return null;
    }

}

$obj1 = new Fraccion(3,7);
$obj2 = new Fraccion(5,8);
echo $resultado = Fraccion::RestaFr($obj1,$obj2);

?>