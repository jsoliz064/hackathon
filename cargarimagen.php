<?php
    include 'conexion.php';
    $id_reporte=$_POST['reporte'];
    $imagen = $_POST['imagenes'];
    //Pedir id del perteneciente a codigo_expediente
    $sentencia=$conexion->prepare("SELECT * FROM reportes WHERE id=?");
    $sentencia->execute([$id_reporte]);
    $filaCodigo=$sentencia->fetch(PDO::FETCH_ASSOC);

    if ($filaCodigo){
        //traer el ultimo id del documento perteneciente al expediente
        $sentencia=$conexion->query("SELECT MAX(id) AS id FROM imagens");
        $fila=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numero="0";
        if ($fila){
            $numero=(int)$fila["id"]+1;
        }
        // RUTA DONDE SE GUARDARAN LAS IMAGENES
        $name="documento" . $numero;
        $path = "documentos/$name.png";
        $actualpath = "http://localhost/hackathon/$path";
        //insertar tupla a documentos
        date_default_timezone_set("America/La_Paz");
        $fecha=getdate();
        $fechaactual=$fecha["year"] . "-" . $fecha["mon"] . "-" . $fecha["mday"] . " " . $fecha["hours"] . ":" . $fecha["minutes"] . ":" . $fecha["seconds"]; 
        $sql = "INSERT INTO imagens (id_reporte, ruta, created_at) VALUES (?,?,?)";
        $stmt= $conexion->prepare($sql);
        $stmt->execute([$id_reporte,$user,$path, $fechaactual]);
    
        
        file_put_contents($path, base64_decode($imagen));
        
        echo "SE SUBIO EXITOSAMENTE";
    
    }else{
        echo "Reporte no encontrado";
    }
    $sentencia=null;
    $conexion=null;
?>