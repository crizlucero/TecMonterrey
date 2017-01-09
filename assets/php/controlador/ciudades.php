<?php

include_once("../modelo/bd.php");

$bd = new BD();

echo $bd->getCiudades();