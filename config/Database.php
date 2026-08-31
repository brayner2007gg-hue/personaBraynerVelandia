<?php

class Database
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = $this->conectar();
    }

    public function conectar()
    {
        try {

            $env = parse_ini_file(__DIR__ . '/../.env');

            $host = $env['DB_HOST'];
            $port = $env['DB_PORT'];
            $dbname = $env['DB_NAME'];
            $username = $env['DB_USER'];
            $password = $env['DB_PASSWORD'];

            $conexion = new PDO(
                "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
                $username,
                $password
            );

            $conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $conexion;

        } catch (PDOException $e) {

            die("Error de conexión: " . $e->getMessage());

        }
    }
}