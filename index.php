<?php
    //Se traen los datos del profesores a partir del correo
    include('conexion.php');
    $con=conectar();

    $correo_persona = "andres.alfaro@uda.cl";

    $consulta = "SELECT * FROM profesores WHERE correo = '$correo_persona'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        $profesor = mysqli_fetch_assoc($resultado);

        //Se guardan en variables los distintos datos
        $Nombre = $profesor['Nombre'];
        $Correo = $profesor['Correo'];
        $Fono = $profesor['Fono'];
        $Cargo = $profesor['Cargo'];
        $Descripcion = $profesor['Descripcion'];
        $Grado = $profesor['Grado'];
        $Areas = $profesor['Areas'];
        $Imagen_perfil = $profesor['Imagen_perfil'];

    } else {
        echo "Error en la consulta: " . mysqli_error($con);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academico</title>
    <link rel="stylesheet" href="estilosindex.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body class="position-relative" data-spy="scroll" data-target="#navabar-scrollspy">
    
    <!--Barra de navegacion-->

    <header class="header sticky-top navbar nav-scrollspy" id="navabar-scrollspy">
        <div class="logo">
            <img src="img/logo-udacorporativo.png" alt="Logo de la marca">
        </div>
        <nav class="nav-scrollspy" id="navabar-scrollspy">
           <ul class="nav-links text-white">
                <li class="nav-item">
                    <a class="nav-link text-reset" href="#informacionpersonal">Informacion personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-reset" href="#articulos">Artículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-reset" href="#horario">Horario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-reset" href="#tesis">Tesis</a>
                </li>
           </ul>            
        </nav>
        <?php
            session_start();

            if(isset($_SESSION["Correo"])){
                $Nombre_profesor = $_SESSION["Nombre"];

                echo '<a class="btn" href="#"><button>'.$Nombre_profesor.'</button></a>';
            }else{
                echo '<a class="btn" href="#"><button>Nombre</button></a>';
            }
        ?>
    </header>
    
    <!--Div para el scrollspy-->

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">

        <!--Informacion personal-->
        <div id="informacionpersonal"></div>
        <div class="infopersonal pt-5 mt-5" >

            <!--Recuadro de foto de perfil-->
            <div class="fotodeperfil">
                <div class="cajafoto">
                    <div class="imagencaja">
                        <!--Se coloca una condicion para mostrar un mensaje el caso de q no cargaron los datos desde la BD-->
                        <?php echo isset($Imagen_perfil) ? "<img src='$Imagen_perfil'>" : "<p>Imagen no disponible</p>"; ?>
                    </div>
                    <div class="contenidocaja">
                        <h5 class="titulocaja">Informacion de contacto</h5>
                        <div class="informacioncaja">
                            <p>Correo: <?php echo isset($Correo) ? $Correo : 'Correo no disponible'; ?></p>
                            <p>Fono: <?php echo isset($Fono) ? $Fono : 'Fono no disponible'; ?></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="datospersonales">
                <h1 class="nombreacademico"><?php echo isset($Nombre) ? $Nombre : 'Nombre no disponible'; ?></h1>
                <h4 class="cargoacademico"><?php echo isset($Cargo) ? $Cargo : 'Cargo no disponible'; ?></h4>
                <div class="descripcion">
                    <p><?php echo isset($Descripcion) ? $Descripcion : 'Descripción no disponible'; ?></p>
                    <p><strong>Grado académico:</strong><?php echo isset($Grado) ? $Grado : 'Grado no disponible'; ?></p>
                    <p><strong>Áreas de interés:</strong><?php echo isset($Areas) ? $Areas : 'Áreas no disponibles'; ?></p>
                </div>
            </div>
        </div>

        <!--Articulos-->
        <div id="articulos" class=" pt-5 mt-5"></div>
        <div class="articulos">
            <h2>Articulos</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                </tbody>
            </table>
        </div>

        <!--Horario-->
        <div id="horario" class="pt-5 "></div>
        <div class="horario " >
            <ul class="nav nav-tabs">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Horario de atención</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Horario de clases</a>
                </li>
            </ul>
            <div class="testhorario">
                horario
            </div>
        </div>

        <!--Tesis-->

        <div class="tesis pt-5 mt-5" id="tesis">
            <h2>Tesis</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    


    <!--Footer-->
    <div class="footer">
        <div class= "container-fluid ml-5 ms-5">
            <div class="row p-5 bg-white text-secondary">
    
                <!--Columna1-->
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <img src="img/logo-udacorporativo.png" width="300" height="94">
                </div>
                <!--Columna 2-->
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <p class="h3">Informacion</p>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">Académicos</a>
                    </div>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">Noticias</a>
                    </div>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">Eventos</a>
                    </div>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">Publicaciones</a>
                    </div>
                </div>
                <!--Columna 3-->
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <p class="h3">Links</p>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">Intranet Alumnos</a>
                    </div>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">Intranet Académicos</a>
                    </div>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">Moodle</a>
                    </div>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">Biblioteca</a>
                    </div>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">FSCU</a>
                    </div>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">Facultad de Ingenieria</a>
                    </div>
                    <div class="mb-2 enlacesfooter">
                        <a class="text-secondary text-decoration-none" href="#">Instagram</a>
                    </div>
                </div>
    
                <!--Columna 4-->
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <p class="h3">Contactos</p>
                    <div class="mb-2">
                        <p>Ubícanos en<br>Copiapó, Av. Copayapu 485</p>
                    </div>
                    <div class="mb-2">
                        <p>(52) 2 255555</p>
                    </div>
                    <div class="mb-2">
                        <p>anakarina.pena@uda.cl</p>
                    </div>
                </div>
                
    
            </div>
    
        </div>
    </div>
    
    
  
    <!--Scripts de boostrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>