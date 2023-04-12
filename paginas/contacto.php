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
    $ruta_imagenes = "../contenido/imagenes/";
?>


<div class="container">
<section>
        <div class="content">
        <form id="forma" action="../enrutador.php" method="post" class="p-5">
        <h3> Formulario </h3>
            <br>
            <h4>Ingresa tus Datos:</h4>
            <br>
            <div class="contacto-gen">
                <form id="contacto-form">
                    <p>
                        <label>Nombre Completo</label>
                        <input type="text" name="tx_nombre">
                    </p>
                    <p>
                        <label>Email</label>
                        <input type="email" name="tx_email">
                    </p>
                    <p>
                        <label>Ciudad</label>
                        <input type="text" name="tx_ciudad">
                    </p>
                    <p>
                        <label>Teléfono</label>
                        <input type="tel" name="tx_telefono">
                    </p>
                    <p>
                        <label>¿Qué servicio deseas?</label>
                        <select>
                            <option>Desarrollo</option>
                            <option>Diseño Web</option>
                            <option>Lenguajes de Programación</option>
                        </select>
                    </p>
                    <p>
                        <label>Mensaje</label>
                        <textarea name="tx_mensaje" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button type="submit">
                            Enviar
                        </button>
                    </p>
                </form>

                   <a
                        href="mailto:diana.gonzalez.wilches@pi.edu.co?subject=Me%20gustaría%20tener%20mayor%20información%20de%20tus%20páginas%20web">
                        <img class="InfImg" src="<?php echo $ruta_imagenes ?>/Correoar.png" width="350" height="250"> </a>
                </div>
            </div>
        </div>
</div>
    <!-- llamar a footer -->
    <?php 
        include("../modelo/footer.php")
    ?>

<script src="../contenido/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>