<?php
/**Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por los pasajeros 
 * e implementar el método venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de pasajeros 
 * (solo si hay espacio disponible), actualizar los costos abonados y retornar el costo final que deberá ser 
 * abonado por el pasajero. 
 * 
 * Implemente la función hayPasajesDisponible() que retorna verdadero si la cantidad de 
 * pasajeros del viaje es menor a la cantidad máxima de pasajeros y falso caso contrario
 */
class Viaje{
    private $costoViaje;
    private $sumaCostosAbonados;
    private $codigo;
    private $destino;
    private $cantMaxima;
    private $colObjPasajeros;
//Metodo constructor 
    public function __construct($costoViaje, $codigo, $destino, $cantMaxima, $colObjPasajeros) {
        $this->costoViaje = $costoViaje;
        $this->sumaCostosAbonados = 0;
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantMaxima = $cantMaxima;
        $this->colObjPasajeros = $colObjPasajeros;
    }
//Métodos de Acceso
    public function getCostoViaje()
    {
        return $this->costoViaje;
    }
    public function setCostoViaje($costoViaje)
    {
        $this->costoViaje = $costoViaje;
    }
    public function getSumaCostosAbonados()
    {
        return $this->sumaCostosAbonados;
    }
    public function setSumaCostosAbonados($sumaCostosAbonados)
    {
        $this->sumaCostosAbonados = $sumaCostosAbonados;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function getDestino()
    {
        return $this->destino;
    }
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }
    public function getCantMaxima()
    {
        return $this->cantMaxima;
    }
    public function setCantMaxima($cantMaxima)
    {
        $this->cantMaxima = $cantMaxima;
    }
    public function getColObjPasajeros()
    {
        return $this->colObjPasajeros;
    }
    public function setColObjPasajeros($colObjPasajeros)
    {
        $this->colObjPasajeros = $colObjPasajeros;
    }
//Métodos y funciones del objeto

    /** Función que devuelve false si no hay pasaje disponible, true si lo hay
     * @return bool $full
     */
    public function HayPasajeDisponible() {
        $full = false;
        if (count($this->getColObjPasajeros()) < $this->getCantMaxima()) {
            $full = true;
        }
        return $full;
    }
    public function venderPasaje($objPasajero) {
        $copiaColObjPasajero = $this->getColObjPasajeros();
        $copiaSumaCostosAbonados = $this->getSumaCostosAbonados();
        $costoViaje = $this->getCostoViaje();
        $incrementoPasajero = $objPasajero->darPorcentajeIncremento() / 100;
        $costoFinal = null;
        if ($this->HayPasajeDisponible()) {
            $copiaColObjPasajero[] = $objPasajero;
            $this->setColObjPasajeros($copiaColObjPasajero);
            $costoFinal = ($costoViaje * $incrementoPasajero) + $costoViaje;
            $copiaSumaCostosAbonados += $costoFinal;
            $this->setSumaCostosAbonados($copiaSumaCostosAbonados);
        }
        return $costoFinal;
    }
    public function mostrarColPasajeros() {
        $copiaColObjPasajero = $this->getColObjPasajeros();
        $cadena = "";
        foreach ($this->getColObjPasajeros() as $un_pasajero) {
            $cadena .= $un_pasajero->__toString() .
                            "\n-----------------------------------\n";
        }
        return $cadena;
    }
    
    public function __toString() {
        $info_viaje =   "\n------------VIAJE FELIZ------------" . 
                        "\nCódigo del Viaje: " . $this->getCodigo() .
                        "\nCosto: $" . $this->getCostoViaje() . 
                        "\nTotal de lo Abonado: " . $this->getSumaCostosAbonados() .
                        "\nDestino: " . $this->getDestino() . 
                        "\nCantidad Máxima de Pasajeros: " . $this->getCantMaxima() . 
                        "\n-----------------------------------\n" .
                        "\n-------------PASAJEROS-------------\n";
        $info_viaje .= $this->mostrarColPasajeros();
        return $info_viaje;
    }
}