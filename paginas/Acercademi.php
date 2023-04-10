<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Mi</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css"> 
</head>
<body>
    <!-- llamar a menu -->
    <?php
    include("../modelo/menu.php");
?>

<section class="nosotros my-5">
        <h2 class="draw">
            ACERCA DE MI
        </h2>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <p><span class="May1l">S</span>oy Camila González, tecnóloga en desarrollo de Software en etapa de formación, con
                        experiencia para llevar a cabo el desarrollo de programas y aplicaciones informáticas a través
                        de la creación o modificación de software especializado. </p>
                    <p>Me caracterizo por ser metódica, eficaz en proyectos independientes o de trabajo en equipo.
                        Poseo conocimientos amplios en el área de computación e informática siendo capaz de diseñar,
                        desarrollar, probar, mantener y mejorar software.</p>
                        <p>Manejo diversos lenguajes de programación, me gusta estar en constante
                        actualización con las tendencias más nuevas en el mercado pues tengo la capacidad de
                        aprender rápidamente el uso de nuevas tecnologías y métodos
                    </p>
                </div>
                <div class="col-5">
                    <img class="img-fluid" src="../imagenes/WhatsApp Image 2023-03-13 at 15.02.11.jpeg"
                        style="width: 25rem" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- llamar a footer -->
    <?php 
        include("../modelo/footer.php")
    ?>

    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>