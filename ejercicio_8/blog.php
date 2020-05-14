<?php
  // Configuracion inicial
/*   if (count($_POST) > 0) {
    $content_blog = file_get_contents("blog.json");
    $blog = fopen("blog.json", "w") or die ("error al crear el archivo");
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];
    $imagen = "images/".$_FILES["imagen"]["name"];
    $contenido = $_POST["contenido"];
    copy($_FILES["imagen"]["tmp_name"], $image);
    $publicacion = [
      "titulo" => $titulo,
      "descripcion" => $descripcion,
      "fecha" => $fecha,
      "imagen" => $imagen,
      "contenido" => $contenido
    ];
    echo $content_blog;
    $content_blog = json_decode($content_blog);
    print_r($content_blog);
    array_push($content_blog, $publicacion);
    echo $content_blog;
    $publicacion = json_encode($publicacion);
    $texto = "".$publicacion;
  
    fwrite($blog, $texto) or die("No se pudo escribir en el archivo");
  
    fclose($blog);
  }
 */  // Fin configuracion inicial
?>
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
        <span class="navbar-brand mb-0 h1">Ejercicio 8: blog</span>
    </nav>
    <div class="container">
    <div class="row">
        <?php
            if (count($_POST) > 0) {
            // Inicio Codigo gestion para cuando los datos se mandaron
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $fecha = $_POST["fecha"];
            $imagen = "images/".$_FILES["imagen"]["name"];
            $contenido = $_POST["contenido"];
            // No borrar siguiente linea
        ?>
            <!-- HTML que mostrara el resultado -->
            <!-- Comienza a editar -->
            <div class="card" style="width: 100%; max-width: 400px; margin: auto;">
            <img src="<?php echo $imagen; ?>" class="card-img-top" style="max-height:200px" alt="...">
            <div class="card-body">
                <h4 class="card-title"><?php echo $titulo; ?></h4>
                <h5 class="card-title"><?php echo $descripcion; ?></h5>
                <p class="card-text"><?php echo $contenido; ?></p>
                <p class="card-text"><small class="text-muted"><?php echo $fecha; ?></small></p>
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