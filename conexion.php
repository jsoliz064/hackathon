<?php
$contraseña = "015340";
$usuario = "postgres";
$nombreBaseDeDatos = "hackathon";
$host = "localhost";
$puerto = "5432";

try {
    $conexion = new PDO("pgsql:host=$host;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}

?>