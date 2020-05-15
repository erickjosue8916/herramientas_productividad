<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Ejercicio 8</title>
  </head>
  <body>
        <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">Ejercicio 8</span>
    </nav>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <form action="blog.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Titulo </label>
            <input type="text" class="form-control" name="titulo" required>
          </div>
          <div class="form-group">
            <label>Descripcion </label>
            <input type="text" class="form-control" name="descripcion" required>
          </div>
          <div class="form-group">
            <label>Fecha publicación </label>
            <input type="date" class="form-control" name="fecha" required>
          </div>
          <div class="form-group">
            <label>Imagen </label>
            <input type="file" class="form-control" name="imagen" required>
          </div>
          <div class="form-group">
            <label>Contenido </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="contenido" rows="3" require></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
      </div>
      <div class="col-lg-6 col-md-4">
      <?php
        if ($_GET["error"]) {
      ?>
          <div class="alert alert-danger" role="alert">
            NO se proporsionó un archivo de imagen valida :v
          </div>
      <?php
        }
      ?>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/pooper.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>