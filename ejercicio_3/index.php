<?php
    $inputs = 15;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Ejercicio 3</title>
  </head>
  <body>
        <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">Ejercicio 3: Cree un programa que al recibir como dato 15 notas de un estudiante permita
obtener el dato que mas se repite(moda), y la media.</span>
    </nav>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
      <form action="" method="POST">
      <?php
          for ($i=0; $i < $inputs; $i++) {   
        ?>
        <div class="form-group">
          <label>Ingrese la nota: <?php echo ($i + 1); ?></label>
          <input type="text" class="form-control" name="<?php echo "nota".$i; ?>" required>
        </div>
        <?php
          }
        ?>
        <button type="submit" class="btn btn-primary">Calcular</button>
      </form>
      </div>
<!-- Oculto hasta enviar el formulario -->
      <?php
        if (count($_POST) > 0) {
          // Inicio Codigo gestion para cuando los datos se mandaron
          $media = array_reduce($_POST, function ($nota1, $nota2) {
            return $nota1 + $nota2;
        }, 0);
          
          $media /= count($_POST);

    
          $cuenta = array_count_values($_POST);
          $orden = implode(", ", $_POST);
              arsort($cuenta);
            
              $moda=key($cuenta);
              
              
         
         

          // No borrar siguiente linea
      ?>
        <!-- HTML que mostrara el resultado -->
        <!-- Comienza a editar -->
        <div class="col-lg-6 col-md-4">
        <h3>Total de media y moda  </h3>
          <ul>
          
           <li> <b>Orden de los numeros: </b> <?php echo  $orden?>  </li>
            <li> <b>Media:</b> <?php echo $media?>  </li>
            <li> <b>Moda:</b> <?php echo $moda?>  </li>
           
          </ul>
        </div>
        </div>

        <!-- DEJA DE EDITAR -->
      <?php
        }
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