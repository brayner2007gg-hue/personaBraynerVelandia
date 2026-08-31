<?php

require_once '../config/Database.php';

$database = new Database();

$conexion = $database->conectar();

if ($conexion) {
    echo "Conexión exitosa";
}