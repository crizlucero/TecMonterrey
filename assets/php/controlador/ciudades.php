<?php
/**
    Servicio para obtener las ciudades
*/
include_once("../modelo/bd.php");

$bd = new BD();

echo $bd->getCiudades();