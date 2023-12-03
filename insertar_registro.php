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
    $Confirmacion_C_Re = $_GET["R_confirmacion_contrasena"];

    $Areas_de_interes_Re = isset($_GET['AreasInteres']) ? $_GET['AreasInteres'] : [];
    $Areas_de_interes_Re_Str = implode("-", $Areas_de_interes_Re);

    // Manejo de carga de archivo
    $Imagen_Re = '';
    $Imagen_de_Perfil = '';  // Variable para almacenar la ruta de la imagen

    if(isset($_FILES["imagenPerfil"]) && $_FILES["imagenPerfil"]["size"] > 0){
        $Imagen_Re = $_FILES["imagenPerfil"];
        $Imagen_name = $Imagen_Re["name"];
        $Imagen_tipo = $Imagen_Re["type"];
        $Ruta_provisional = $Imagen_Re["tmp_name"];
        $Imagen_Tamano = $Imagen_Re["size"];
        $Imagen_dimensiones = getimagesize($Ruta_provisional);
        $Ancho = $Imagen_dimensiones[0];
        $Alto = $Imagen_dimensiones[1];
        $Carpeta = "fotos/";

        $src = $Carpeta . $Imagen_name;
        move_uploaded_file($Ruta_provisional, $src);
        $Imagen_de_Perfil = "fotos/" . $Imagen_name;
    }

    $sql = "INSERT INTO profesores (Nombre, Correo, Fono, Cargo, Descripcion, Grado, Contrasena, Confirmacion_C, Areas, Imagen_perfil) VALUES ('$Nombre_Re', '$Correo_Re', '$Fono_Re', '$Cargo_Re', '$Descripcion_Re', '$Grado_Re', '$Contrasena_Re', '$Confirmacion_C_Re', '$Areas_de_interes_Re_Str', '$Imagen_de_Perfil')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "<script>alert('¡Registro exitoso! Inicie sesión en su cuenta');</script>";
        header("refresh:0;url=inicio_de_sesion.php");
    } else {
        echo "Error al registrar en la base de datos: " . mysqli_error($con);
    }
?>