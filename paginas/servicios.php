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
            <img src="<?php echo $ruta_imagenes ?>/desarrollo.jpg" class="d-block w-100" width="30px" height="250px"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">Desarrollo y Programación</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="<?php echo $ruta_imagenes ?>/LENGUAJES.jpg" class="d-block w-100" width="30px" height="250px" alt="...">
            <div class="card-body">
                <h5 class="card-title">Lenguajes de Programación</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="<?php echo $ruta_imagenes ?>/diseñoweb.JPG" class="d-block w-100" width="30px" height="250px" alt="...">
            <div class="card-body">
                <h5 class="card-title">Diseño Web</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="<?php echo $ruta_imagenes ?>/moviles2.png" class="d-block w-100" width="30px" height="250px" alt="...">
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
        <div>
            <img src="<?php echo $ruta_imagenes ?>/Apps.jpeg" width="150px" height="250px" alt="">
            <img src="<?php echo $ruta_imagenes ?>/Desarrollo.jpeg" width="150px" height="250px" alt="">
            <img src="<?php echo $ruta_imagenes ?>/Monitoreo.jpeg" width="150px" height="250px" alt="">
            <img src="<?php echo $ruta_imagenes ?>/sol.problemas.jpeg" width="150px" height="250px" alt="">
            <img src="<?php echo $ruta_imagenes ?>/Frontend - Backend.jpeg" width="150px" height="250px" alt="">
            <img src="<?php echo $ruta_imagenes ?>/optimizar.jpeg" width="150px" height="250px" alt="">
            <img src="<?php echo $ruta_imagenes ?>/up cloud.jpeg" width="150px" height="250px" alt="">
        </div>
</section>
























<!--                     
                    <div id="carouselExampledark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampledark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampledark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampledark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="Titulo">DESARROLLO Y PROGRAMACION</h5>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="<?php echo $ruta_imagenes ?>/diseñoweb.JPG" class="d-block w-100" height="450" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="Titulo">DISEÑO WEB</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $ruta_imagenes ?>/LENGUAJES.jpg" class="d-block w-100" height="450" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="Titulo">LENGUAJES DE PROGRAMACION</h5>
                                  
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
        </div> -->
    </section>


</div>
    <!-- llamar a footer -->
    <?php 
        include("../modelo/footer.php")
    ?>

<script src="../contenido/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>