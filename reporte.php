<?php
    include 'conexion.php';

    $latitud=$_POST['latitud'];
    $longitud=$_POST['longitud'];
    $desc = $_POST['desc'];

    date_default_timezone_set("America/La_Paz");
    $fecha=getdate();
    $fechaactual=$fecha["year"] . "-" . $fecha["mon"] . "-" . $fecha["mday"] . " " . $fecha["hours"] . ":" . $fecha["minutes"] . ":" . $fecha["seconds"]; 
    $sql = "INSERT INTO reportes (latitud, longitud,descripcion,created_at) VALUES (?,?,?,?)";
    $stmt= $conexion->prepare($sql);
    $stmt->execute([$latitud,$longitud,$desc, $fechaactual]);

    $sentencia=$conexion->query("SELECT MAX(id) AS id FROM reportes");
    $fila=$sentencia->fetch(PDO::FETCH_ASSOC);

    echo $fila;
    $sentencia=null;
    $conexion=null;
?>