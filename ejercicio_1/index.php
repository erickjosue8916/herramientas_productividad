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
    <title>Ejercicio #1</title>
  </head>
  <body>
        <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">Ejercicio 1</span>
    </nav>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
      <form action="" method="POST">
        <div class="form-group">

          <label>Ingrese el primer numero: </label>
          <input type="text" class="form-control" name="num1" required>
          <label>Ingrese el segundo numero: </label>
          <input type="text" class="form-control" name="num2" required>
          <label>Ingrese el tercer numero: </label>
          <input type="text" class="form-control" name="num3" required>

        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
      </form>
      </div>
<!-- Oculto hasta enviar el formulario -->
      <?php 
          $num1=0;
          $num2=0;
          $num3=0;
          $Num_mayor;
          $Num_menor;

        if (count($_POST) > 0) {
          // Inicio Codigo gestion para cuando los datos se mandaron
         

          if($num1>$num2 && $num1>$num3)
          {
            $Num_mayor=$num1;
            if($num2>$num3)
            {
              $Num_menor=$num3;
            }
            else
            {
              $Num_menor=$num2;
            }
    
          }
          else if ($num2>$num1 && $num2>$num3)
          {
            $Num_mayor=$num2;
            if($num1>$num3)
            {
              $Num_menor=$num3;
            }
            else
            {
              $Num_menor=$num1;
            }
          }
          else if ($num3>$num1 && $num3>$num2)
          {
            $Num_mayor=$num3;
            if($num1>$num2)
            {
              $Num_menor=$num2;
            }
            else
            {
              $Num_menor=$num1;
            }
          }

          // No borrar siguiente linea
      ?>
        <!-- HTML que mostrara el resultado -->
        <!-- Comienza a editar -->
        <div class="col-lg-6 col-md-4">
          <h3>El numero Mayor es : <?php echo $Num_mayor ?>  </h3>
          <h3>El numero Menor es : <?php echo $Num_menor ?>  </h3>
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