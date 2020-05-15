<?php
  $inputs = 3;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Ejercicio 4</title>
  </head>
  <body>
        <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">Ejercicio 4</span>
    </nav>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
      <form action="" method="POST">
        <?php
          for ($i=0; $i < $inputs; $i++) {   
        ?>
        <div class="form-group">
          <label>Precio pelicula <?php echo ($i + 1); ?></label>
          <input type="text" class="form-control" pattern="[0-9]*.[0-9]{0,2}" title="##.##" name="<?php echo "pelicula".$i; ?>" required>
        </div>
        <?php
          }
        ?>
        <button type="submit" class="btn btn-primary">Calcular</button>
      </form>
      </div>
      <?php
        if (count($_POST) > 0) {
          
          $primero;
          $segundo;
          $p1 = $_POST["pelicula0"];
          $p2 = $_POST["pelicula1"];
          $p3 = $_POST["pelicula2"];
          if ($p1 == $p2 && $p1 == $p3) {
            $primero = $segundo = $p1;
          } else if ($p1 > $p2) {
            if ($p1 > $p3) {
              $primero = $p1;
              $segundo = ($p3 > $p2) ? $p3: $p2;
            } else {
              $primero = $p3;
              $segundo = $p1;
            }
          } else {
            if ($p2 > $p3) {
              $primero = $p2;
              $segundo = ($p3 > $p1) ? $p3: $p1;
            } else {
              $primero = $p3;
              $segundo = $p2;
            }
          }
      ?>
        <div class="col-lg-6 col-md-4">
          <h3>El total de la venta es : <?php echo "$".$primero." + $".$segundo." = ". "$".($primero + $segundo) ?>  </h3>
        </div>
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