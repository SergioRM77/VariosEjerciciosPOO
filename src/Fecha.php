<?php
namespace ITEC\DAW\Clases;

use DateInterval;

class Fecha{
    private int $dia;
    private int $mes;
    private int $annio;
    private \DateTime $validarFecha;

    public function __construct(int $dia, int $mes, int $annio){
        $this->validarFecha = new \DateTime();
        $this->validarFecha->setDate($annio, $mes, $dia);
        $this->dia = $dia;
        $this->mes = $mes;
        $this->annio = $annio;
    }

    public static function createFecha(int $dia, int $mes, int $annio){
        return new fecha($dia, $mes, $annio);
    }

    public function is_validDate():bool{
        return checkdate($this->mes, $this->dia, $this->annio);
    }

    public function __toString(){
        return $this->validarFecha->format('j/n/Y');
    }
    public function getFechaStr():string{
        return $this;
    }

    public function getDateLeft() {
        $now = new \DateTime();
        return $now->diff($this->validarFecha)->format("j");
    }

    public function DiaSiguiente(){
        //forma1
        $interval = \DateInterval::createFromDateString('+1 day');
        return date_add($this->validarFecha, $interval)->format('j/n/Y');
        
        //forma2
        //return $this->validarFecha->add(new DateInterval('P1D'))->format('j/n/Y');
    }
}

$fecha= new Fecha(20,5,2005);
echo $fecha;
echo $fecha->DiaSiguiente();
var_dump( $fecha->is_validDate());
echo $fecha;
?>