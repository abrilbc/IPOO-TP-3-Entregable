<?php
class PasajeroEstandar extends Pasajero{

    public function __construct($nombre, $nroAsiento, $nroTicket){
        parent::__construct($nombre, $nroAsiento, $nroTicket);
    }

    public function darPorcentajeIncremento() {
        $incremento = parent::darPorcentajeIncremento();
        $incremento = 10;
        return $incremento;
    }

    public function __toString() {
        $cadena = parent::__toString();
        return $cadena;
    }
}