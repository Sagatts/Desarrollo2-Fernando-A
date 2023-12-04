<?php
    include("conexion.php");
    $con = conectar();

    $Nombre_Re = $_GET["R_nombre"];
    $Correo_Re = $_GET["R_correo"];
    $Fono_Re = $_GET["R_fono"];
    $Cargo_Re = $_GET["R_cargo"];
    $Descripcion_Re = $_GET["R_descripcion"];
    $Grado_Re = $_GET["R_grado"];
    $Contrasena_Re = $_GET["R_contrasena"];

    $Areas_de_interes_Re = isset($_GET['AreasInteres']) ? $_GET['AreasInteres'] : [];
    $Areas_de_interes_Re_Str = implode("-", $Areas_de_interes_Re);


    $sql = "INSERT INTO profesores (Nombre, Correo, Fono, Cargo, Descripcion, Grado, Contrasena, Areas, Imagen_perfil) 
    VALUES ('$Nombre_Re', '$Correo_Re', '$Fono_Re', '$Cargo_Re', '$Descripcion_Re', '$Grado_Re', '$Contrasena_Re', '$Areas_de_interes_Re_Str', '$Imagen_de_Perfil')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "<script>alert('¡Registro exitoso! Inicie sesión en su cuenta');</script>";
        header("refresh:10;url=inicio_de_sesion.php");
    } else {
        echo "Error al registrar en la base de datos: " . mysqli_error($con);
    }
?>