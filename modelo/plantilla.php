<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css"> 

    <title>ProfessionalDesingAS</title>
</head>
<body>
    
<!-- llamar a menu -->
<?php
    include("menu.php");
?>

<!-- llamar a header -->
<?php 
    include("header.php")
?>



<!-- llamar a enrutador -->
<?php 
    include("enrutador.php")
?>

<!-- llamar a footer -->
<?php 
    include("footer.php")
?>

    <!-- link bootstrap.bundle.js reonoce las animaciones -->
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>