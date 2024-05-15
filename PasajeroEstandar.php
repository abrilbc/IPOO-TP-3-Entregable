<?php
// Creo la clase PasajeroEstandar con un objetivo a futuro:
// En el caso de que Pasajero Estandar necesite un atributo adicional que lo diferencie de las demás clases
// y de su clase parent en el futuro (por ejemplo, un descuento exclusivo para los pasajeros estandar), 
// que sea posible accederla desde un principio.
class PasajeroEstandar extends Pasajero{
    public function __construct($nombre, $nroAsiento, $nroTicket){
        parent::__construct($nombre, $nroAsiento, $nroTicket);
    }
    public function __toString() {
        $cadena = parent::__toString();
        return $cadena;
    }
}