<?php
// Datos de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$password = "Jairo8553";
$base_de_datos = "tico_ride";

// Conexión a la base de datos
$connection = new mysqli($host, $usuario, $password, $base_de_datos);

// Verificar conexión
if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
}
