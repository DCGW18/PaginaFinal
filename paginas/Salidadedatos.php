<form class="font-monospace p-4" action="index.php" method="post">
    <label for=""> <b><?php echo $Titulo;?></b></label>

    <h4> Datos</h4>
    <label for=""> Nombre Completo   </label>
    <label for=""> <b><?php echo$nombre;?></b> </label>
    <br>
    <label for=""> Email  </label>
    <label for=""> <b><?php echo$email;?></b></label>
    <br>
    <label for=""> Ciudad  </label>
    <label for=""> <b> <?php echo$ciudad;?></b> </label>
    <br>
    <label for="">telefono  </label>
    <label for=""> <b> <?php echo$telefono;?></b> </label>
    <br>
    <label for=""> rol1=  </label>
    <label for=""> <b> <?php echo$servicio;?></b> </label>
    <br>
    <label for=""> Mensaje  </label>
    <label for=""> <b> <?php echo$mensaje;?></b> </label>
    <br>
    
    <br>
    <input type="submit" class="btn btn-dark" name="btn_validar" value="Regresar">    
</form>