<?php
class PasajeroVIP extends Pasajero{
    private $nro_viajeroFrecuente;
    private $cantMillas;
    public function __construct($nombre, $nroAsiento, $nroTicket, $nro_viajeroFrecuente, $cantMillas){
        parent::__construct($nombre, $nroAsiento, $nroTicket);
        $this->nro_viajeroFrecuente = $nro_viajeroFrecuente;
        $this->cantMillas = $cantMillas;
    }
    public function getNroViajeroFrecuente()
    {
        return $this->nro_viajeroFrecuente;
    }
    public function setNroViajeroFrecuente($nro_viajeroFrecuente)
    {
        $this->nro_viajeroFrecuente = $nro_viajeroFrecuente;
    }
    public function getCantMillas()
    {
        return $this->cantMillas;
    }
    public function setCantMillas($cantMillas)
    {
        $this->cantMillas = $cantMillas;
    }
    public function darPorcentajeIncremento() {
        $incremento = parent::darPorcentajeIncremento();
        $incremento = 35;
        if ($this->getCantMillas() > 300) {
            $incremento = 30;
        }
        return $incremento;
    }
    public function __toString() {
        $cadena = parent::__toString();
        $cadena .=  "\nNúmero de Viajero Frecuente: " . $this->getNroViajeroFrecuente() .
                    "\nCantidad de Millas: " . $this->getCantMillas();
        return $cadena;
    }
}