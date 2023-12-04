<?php
    include("conexion.php");
    
    // Inicia la sesión
    session_start();

    $con = conectar();

    if (isset($_GET["btnIngresar_sesion"])) {
        $correo_login = $_GET["Sesion_correo"];
        $Contrasena_login = $_GET["Sesion_contrasena"];

        $query = "SELECT * FROM profesores WHERE Correo = '$correo_login' AND Contrasena = '$Contrasena_login'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            // Inicio de sesión exitoso, establece la variable de sesión
            $usuarioData = mysqli_fetch_assoc($result);
            $_SESSION["Correo"] = $correo_login;
            $_SESSION["Nombre"] = $usuarioData["Nombre"];

            echo "<script>alert('¡Inicio de sesión exitoso!');</script>";
            header("refresh:0;url=index.php");
            exit();
        } else {
            echo "<script>alert('¡Usuario o contraseña incorrectas!');</script>";
            header("refresh:0;url=inicio_de_sesion.php");
        }
    }
?>