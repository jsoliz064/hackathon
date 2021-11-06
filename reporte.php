<?php
    include 'conexion.php';

    $user = $_POST['id_usuario'];
    $latitud=$_POST['latitud'];
    $longitud=$_POST['longitud'];
    $desc = $_POST['desc'];

    date_default_timezone_set("America/La_Paz");
    $fecha=getdate();
    $fechaactual=$fecha["year"] . "-" . $fecha["mon"] . "-" . $fecha["mday"] . " " . $fecha["hours"] . ":" . $fecha["minutes"] . ":" . $fecha["seconds"]; 
    $sql = "INSERT INTO reportes (id_user,latitud, longitud,descripcion,created_at) VALUES (?,?,?,?,?)";
    $stmt= $conexion->prepare($sql);
    $stmt->execute([$user,$latitud,$longitud,$desc, $fechaactual]);

    $sentencia=$conexion->query("SELECT MAX(id) AS id FROM reportes");
    $fila=$sentencia->fetch(PDO::FETCH_ASSOC);

    echo $fila["id"];
    $sentencia=null;
    $conexion=null;
?>