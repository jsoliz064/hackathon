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

        $sentencia=$conexion->query("SELECT MAX(id) AS id FROM users");
        $fila=$sentencia->fetch(PDO::FETCH_ASSOC);

        $sql = "INSERT INTO model_has_roles (role_id, model_type, model_id) VALUES (?,?,?)";
        $stmt= $conexion->prepare($sql);
        $stmt->execute(["2","App\Models\User",$fila["id"]]);


        echo "Registrado";
    $sentencia=null;
    $conexion=null;
?>