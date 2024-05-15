<?php
include_once 'Pasajero.php';
include_once 'PasajeroEstandar.php';
include_once 'PasajeroNecesidadesEspeciales.php';
include_once 'PasajeroVIP.php';
include_once 'Viaje.php';


$viajeFeliz = new Viaje(85000, 8545, "Buenos Aires", 50, []);
$objPasajero1 = new PasajeroEstandar("Christopher", 1, 100001);
$objPasajero2 = new PasajeroEstandar("Franco", 2, 100002);
$objPasajero3 = new PasajeroVIP("Victoria", 3, 100003, 1523, 500);
$objPasajero4 = new PasajeroVIP("Lucia", 4, 100004, 1513, 200);
$objPasajero5 = new PasajeroNecesidadesEspeciales("Daniel", 5, 100005, 1);
$objPasajero6 = new PasajeroNecesidadesEspeciales("Daniela", 6, 100006, 3);

$viajeFeliz->venderPasaje($objPasajero1);
$viajeFeliz->venderPasaje($objPasajero2);

echo $viajeFeliz;