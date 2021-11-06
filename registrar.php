<?php
    include 'conexion.php';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    //$contra = $_POST['password'];
    $contraseña=password_hash($_POST['password'],PASSWORD_DEFAULT);

        date_default_timezone_set("America/La_Paz");
        $fecha=getdate();
        $fechaactual=$fecha["year"] . "-" . $fecha["mon"] . "-" . $fecha["mday"] . " " . $fecha["hours"] . ":" . $fecha["minutes"] . ":" . $fecha["seconds"]; 
        $sql = "INSERT INTO users (name, email, password, created_at) VALUES (?,?,?,?)";
        $stmt= $conexion->prepare($sql);
        $stmt->execute([$nombre,$email,$contraseña, $fechaactual]);
        echo "Registrado";
    $sentencia=null;
    $conexion=null;
?>