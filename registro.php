<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="stylesFA.css" rel="stylesheet">
    <script src="js/validacion_registro.js"></script>
    <title>Registro de profesores</title>
</head>
<body>
    <!--Barra de navegacion-->
    <nav class="header">
        <div class="logo">
            <img src="img/logo-udacorp-lineablanca.png" alt="Logo de la marca">
        </div>
        <div>
           <ul class="nav-links">
                <li><a href="#">Boton 1</a></li>
                <li><a href="#">Boton 2</a></li>
                <li><a href="#">Boton 3</a></li>
           </ul>            
        </div>
        <a class="btn" href="#"><button>Nombre</button></a>
    </nav>
    <!--Formulario de registro-->
    <section>
        <div class="contenedor_formulario">
            <h1 class="text-center">Registro</h1>
            <form action="insertar_registro.php" method="GET" class="row g-3 needs-validation" enctype="multipart/form-data" onsubmit="return validar_registro()" novalidate>
                <div>
                    <label for="I_nombre">Nombre:</label>
                    <input type="text" class="form-control" name="R_nombre" id="I_nombre">
                    <div id="error-nombre" class="text-danger"></div>
                </div>
                <div>
                    <label for="I_correo">Correo:</label>
                    <input type="email" class="form-control" name="R_correo" id="I_correo">
                    <div id="error-correo" class="text-danger"></div>
                </div>
                <div>
                    <label for="I_fono">Fono:</label>
                    <input type="text" class="form-control" name="R_fono" id="I_fono">
                    <div id="error-fono" class="text-danger"></div>
                </div>
                <div>
                    <label for="I_cargo">Cargo:</label>
                    <input type="text" class="form-control" name="R_cargo" id="I_cargo">
                    <div id="error-cargo" class="text-danger"></div>
                </div>
                <div>
                    <label for="I_descripcion">Descripción:</label>
                    <textarea class="form-control" aria-label="With textarea" name="R_descripcion" id="I_descripcion"></textarea>
                    <div id="error-descripcion" class="text-danger"></div>
                </div>
                <div>
                    <label for="I_grado">Grado académico:</label>
                    <input type="text" class="form-control" name="R_grado" id="I_grado">
                    <div id="error-grado" class="text-danger"></div>
                </div>
                <div class="col-6">
                    <label for="I_nombre">Contraseña:</label>
                    <input type="password" class="form-control" name="R_contrasena" id="I_contrasena">
                    <div id="error-contrasena" class="text-danger"></div>
                </div>
                <div class="col-6">
                    <label for="I_nombre">Confirmacion de contraseña:</label>
                    <input type="password" class="form-control" name="R_confirmacion_contrasena" id="I_confirmacion_contrasena">
                    <div id="error-confirmacion-contra" class="text-danger"></div>
                </div>
                <div class="container">
                    <label>Areas de interes:</label>
                    <div class="row align-items-start">
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="I_check1" name="AreasInteres[]" value="Gestion_informatica">
                                <label class="form-check-label" for="I_check1" value="Gestion_informatica">Gestión informática</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="I_check2" name="AreasInteres[]" value="Ciencia_de_datos">
                                <label class="form-check-label" for="I_check2" value="Ciencia_de_datos">Ciencia de datos</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="I_check3" name="AreasInteres[]" value="Ingenieria_de_software">
                                <label class="form-check-label" for="I_check3" value="Ingenieria_de_software">Ingeniería de software</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="I_check4" name="AreasInteres[]" value="Informatica_educativa">
                                <label class="form-check-label" for="I_check4" value="Informatica_educativa">Informática educativa</label>
                            </div>
                        </div>
                    </div>
                    <div id="error-areas" class="text-danger"></div>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="I_imagen">Imagen de perfil:</label>
                    <input type="file" class="form-control" id="I_imagen" name="imagenPerfil">
                </div>
                <div id="error-imagen" class="text-danger"></div>
                <button type="submit" class="btn btn-primary" onclick="alert('¿Estas seguro de enviar estos datos?')">Enviar</button>
                <p class="text-center">¿Ya estás registrado? Inicia sesión <a href="inicio_de_sesion.html">Aquí</a></p>
            </form>
        </div>
    </section>
    <!--Footer-->
    <footer>
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
    </footer>
    <!--Scripts de boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>