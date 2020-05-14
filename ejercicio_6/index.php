<?php
  // Configuracion inicial
  $productos = [];

  for ($i=1; $i < 11; $i++) { 
    array_push($productos, [
      "codigo" => $i,
      "nombre" => "producto ".$i,
      "precio" => 0.75 + $i,
      "stock" => 5 + $i
    ]);
  }
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
    <title>Ejercicio 6</title>
  </head>
  <body>
        <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">Ejercicio 6: Cree un arreglo asociativo el cual deberá contener la información de productos de
una tienda el cual lo tiene que mostrar en una tabla</span>
    </nav>
    <div class="container">
    <div class="row">
      <div class="col-sm">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">codigo</th>
            <th scope="col">nombre</th>
            <th scope="col">precio</th>
            <th scope="col">stock</th>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach($productos as $producto){
        ?>
          <tr>
            <td> <?php echo $producto["codigo"] ?> </td>
            <td> <?php echo $producto["nombre"] ?> </td>
            <td> <?php echo $producto["precio"] ?> </td>
            <td> <?php echo $producto["stock"] ?> </td>
          </tr>
        <?php
          }
        ?>
        </tbody>
      </table>
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