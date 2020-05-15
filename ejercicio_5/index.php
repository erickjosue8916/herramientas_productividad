<?php
  $inputs = 4;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Ejercicio 5</title>
  </head>
  <body>
        <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">Ejercicio 5</span>
    </nav>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
      <form action="" method="POST">
        <?php
          for ($i=0; $i < $inputs; $i++) {   
        ?>
        <div class="form-group">
          <label>Nota <?php echo ($i + 1); ?></label>
          <input type="text" class="form-control" pattern="[0-9]|10" name="<?php echo "nota".$i; ?>" required>
        </div>
        <?php
          }
        ?>
        <button type="submit" class="btn btn-primary">Calcular</button>
      </form>
      </div>
      <?php
        if (count($_POST) > 0) {
          $max = max($_POST);
          $min = min($_POST);
          $promedio = array_reduce($_POST, function ($prev, $acc) {
              return $prev + $acc;
          }, 0);
          $promedio /= count($_POST);
      ?>
        <div class="col-lg-6 col-md-4">
          <h3>Notas </h3>
          <ul>
            <li> <b>Mayor:</b> <?php echo $max?>  </li>
            <li> <b>Min:</b> <?php echo $min?>  </li>
            <li> <b>Promedio:</b> <?php echo $promedio?>  </li>
          </ul>
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