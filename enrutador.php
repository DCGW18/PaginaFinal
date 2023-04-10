<?php

    //Llamar al home o archivo principal    
    $opcion='inicio';
    if(!isset($_GET['opcion']))
    {
        //Llamar contenido principal 
        require_once("paginas/paginaprincipal.php");
    } //Fin if
    else
    {
        //llamar a pagina home o principal
        if($_GET['opcion']=='ppal')
        {
           //Llamar contenido dos 
           require_once("paginas/paginaprincipal.php");
        }//fin if   

     if($_GET['opcion']=='dos')
     {
        //Llamar contenido dos 
        require_once("paginas/Acercademi.php");
     }//fin if   

     if($_GET['opcion']=='tres')
     {
        //Llamar contenido tres 
        require_once("paginas/servicios.php");
     }//fin if   

     if($_GET['opcion']=='cuatro')
     {
        //Llamar contenido cuatro 
        require_once("paginas/contacto.php");
     }//fin if   


    }//Fin else
?>