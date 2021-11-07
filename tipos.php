<?php

include 'conexion.php';

$sentencia=$conexion->prepare("SELECT nombre FROM tipos");
$sentencia->execute();
//$fila=$sentencia->fetch(PDO::FETCH_ASSOC);
$fila=$sentencia->fetchAll(PDO::FETCH_ASSOC);
if ($fila){
    echo json_encode($fila,JSON_UNESCAPED_UNICODE);
} 

/* codigo simple */
/* $sentencia=pg_query($conexion,"SELECT * FROM users WHERE email=email and password=password"); */
/* if ($fila=pg_fetch_assoc($sentencia)) {
    echo json_encode($fila,JSON_UNESCAPED_UNICODE);       
}
pg_close($conexion); */
$sentencia=null;
$conexion=null;