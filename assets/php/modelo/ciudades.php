<?php
class Ciudades{
    public $idCiudad;
    public $ciudad;
    public $fecha;

    function getidCiudad(){
        return $this->idCiudad;
    }

    function setidCiudad($id){
        $this->idCiudad = $id;
    }

    function getCiudad(){
        return $this->ciudad;
    }

    function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    function getFecha(){
        return $this->fecha;
    }

    function setFecha($fecha){
        $this->fecha = $fecha;
    }
}