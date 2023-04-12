<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Mi</title>
    <link rel="stylesheet" href="../contenido/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../contenido/css/style.css">
</head>

<body>
    <!-- llamar a menu -->
    <?php
    include("../modelo/menu.php");
?>
    <?php 
    $ruta_imagenes = "../contenido/imagenes/";
?>
    <div class="container">
        <section class="Sobre Pd my-5">
            <h2 class="text-center my-5">
                LOS SERVICIOS QUE PRESTAMOS SON LOS SIGUIENTES
            </h2>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-5">
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $ruta_imagenes ?>/desarrollo.jpg" class="d-block w-100" width="30px"
                                height="250px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Desarrollo y Programación</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $ruta_imagenes ?>/LENGUAJES.jpg" class="d-block w-100" width="30px"
                                height="250px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lenguajes de Programación</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $ruta_imagenes ?>/diseñoweb.JPG" class="d-block w-100" width="30px"
                                height="250px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Diseño Web</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $ruta_imagenes ?>/moviles2.png" class="d-block w-100" width="30px"
                                height="250px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Mantenimiento en Aplicativos Moviles</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <section>
                    <h2 class="text-center my-5">
                        Otros Servicios:
                    </h2>
                    <marquee>
                        <div>
                            <img src="<?php echo $ruta_imagenes ?>/Apps.jpeg" width="250px" height="250px" alt=""
                                class="imgmarq">
                            <img src="<?php echo $ruta_imagenes ?>/Desarrollo.jpeg" width="250px" height="250px" alt=""
                                class="imgmarq">
                            <img src="<?php echo $ruta_imagenes ?>/Monitoreo.jpeg" width="250px" height="250px" alt=""
                                class="imgmarq">
                            <img src="<?php echo $ruta_imagenes ?>/sol.problemas.jpeg" width="250px" height="250px"
                                alt="" class="imgmarq">
                            <img src="<?php echo $ruta_imagenes ?>/Frontend - Backend.jpeg" width="250px" height="250px"
                                alt="" class="imgmarq">
                            <img src="<?php echo $ruta_imagenes ?>/optimizar.jpeg" width="250px" height="250px" alt=""
                                class="imgmarq">
                            <img src="<?php echo $ruta_imagenes ?>/up cloud.jpeg" width="250px" height="250px" alt=""
                                class="imgmarq">
                        </div>
                    </marquee>
                </section>
            </div>
        </section>
    </div>
    <!-- llamar a footer -->
    <?php 
        include("../modelo/footer.php")
    ?>

    <script src="../contenido/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>