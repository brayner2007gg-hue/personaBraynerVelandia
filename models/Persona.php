<?php

require_once __DIR__ . "/../config/Database.php";

class PersonaModel
{
    private $conexion;

    public function __construct()
    {
        $database = new Database();
        $this->conexion = $database->conectar();
    }

    public function listar()
    {
        $sql = "SELECT * FROM persona";

        $consulta = $this->conexion->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}