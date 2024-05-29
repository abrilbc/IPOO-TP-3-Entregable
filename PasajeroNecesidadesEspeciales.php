<?php
class PasajeroNecesidadesEspeciales extends Pasajero{
    private $cantServicios;
    public function __construct($nombre, $nroAsiento, $nroTicket, $cantServicios){
        parent::__construct($nombre, $nroAsiento, $nroTicket);
        $this->cantServicios = $cantServicios;
    }
    
    public function getCantServicios()
    {
        return $this->cantServicios;
    }
    public function setCantServicios($cantServicios)
    {
        $this->cantServicios = $cantServicios;
    }
    public function darPorcentajeIncremento() {
        $incremento = parent::darPorcentajeIncremento();
        $incremento = parent::darPorcentajeIncremento();
        if ($this->getCantServicios() == 3) {
            $incremento = 30;
        }
        elseif ($this->getCantServicios() == 1) {
            $incremento = 15;
        }
        return $incremento;
    }
    public function __toString() {
        $cadena = parent::__toString();
        $cadena .=  "\nCantidad de Servicios: " . $this->getCantServicios();
        return $cadena;
    }
}