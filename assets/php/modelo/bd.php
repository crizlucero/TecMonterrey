<?php
include_once(dirname(__FILE__) . "/ciudades.php");
include_once(dirname(__FILE__) . "/personas.php");
class BD{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "root";
    private $dbname = "tecnologico";
    private $conn = null;
    function __construct(){
        //Create connection
        $this->conn = new mysqli($this->host, $this->user, $this->pwd, $this->dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } 
    } 

    function getCiudades(){
        $query = "select * from Ciudad";
        $result = $this->conn->query($query);
        $ciudades = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $ciudad = new Ciudades();
                $ciudad->setidCiudad($row["idCiudad"]);
                $ciudad->setCiudad($row["Ciudad"]);
                $ciudad->setFecha($row["Fecha"]);
                $ciudades[] = $ciudad;
            }
        }
        return json_encode($ciudades);
    }  

    function addPersonas($persona){
        $sql = "INSERT INTO Persona (Nombre, Email, idCiudad) VALUES ('$persona->Nombre', '$persona->Email', '$persona->idCiudad')";

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
}