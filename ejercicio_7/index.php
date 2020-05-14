<?php
  // Configuracion inicial

  // Fin configuracion inicial
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Ejercicio 7</title>
  </head>
  <body>
        <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">Ejercicio 7: Cree un programa en php que permita copiar archivos pdf al servidor.</span>
    </nav>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
      <form action="index.php" method="post" enctype="multipart/form-data"> 
        <div class="form-group">
         
          <div class="custom-file">

                <label for="exampleFormControlFile1">Cargue un archivo</label>
                <input type="file" name="subirArchivo" class="form-control-file" id="exampleFormControlFile1">
                
        </div>
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <?php if (isset($archivo)): ?>
          <?php if (!$extension_correcta) :?>
            <div class="alert alert-primary" role="alert">
           Archivo incorrecto
          </div>

            <?php elseif (!$archivo_ok) :?>
              <div class="alert alert-primary" role="alert">
             Error al cargar el archivo
             </div>

              <?php else :?> 
                <div class="col-lg-6 col-md-4">
                <h3>  Archivo guardado correctamente  </h3>
                </div>

                <?php endif?>
              <?php endif;?>
        </div>
        
        

      </form>
      </div>
<!-- Oculto hasta enviar el formulario -->
      <?php
       $archivo;
       $extension;
       $extension_correcta;
       $ruta_destino_archivo;
       $archivo_ok;

        $archivo = (isset($_FILES['subirArchivo'])) ? $_FILES['subirArchivo'] : null;
          if ($archivo) {
              $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
              $extension = strtolower($extension);
              $extension_correcta = ($extension == 'pdf');
  
              if ($extension_correcta) {
                  $ruta_destino_archivo = "archivos/{$archivo['name']}";
                  $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
              }
          }
        
      ?>
        <!-- HTML que mostrara el resultado -->
        <!-- Comienza a editar -->
        

        <!-- DEJA DE EDITAR -->
      <?php
       
      ?>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/pooper.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>