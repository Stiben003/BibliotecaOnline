<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Biblioteca Online</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./css/main.css">
      <title></title>
      <link rel="stylesheet" href="./librerias/bootstrap4/bootstrap.min.css">
      

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

      <!-- Ionic icons -->
      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

  </head>
  <body>


  <?php include "header.php"; ?>

  <ul class="nav nav-tabs nav-fill">
    <li class="nav-item">
      <a class="nav-link active" href="categoria.php">Categoria</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="autor.php">Autor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="editorial.php">Editorial</a>
    </li>
  </ul>

  <div class="container">
              <div class="container-flat-form">
                  <div class="title-flat-form title-flat-blue">Agregar una nueva categoría</div>
                      <div class="container">
                        <div class="col-xs-12 m-5 col-sm-offset-2">
                        <form autocomplete="off" method="POST">
                              <div class="group-material">
                                  <input type="text" class="material-control" placeholder="Escribe aquí el nombre de la categoría" required=""  maxlength="50" data-placement="top" title="Escribe el nombre de la categoría" name="nomcategoria">
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Nombre</label>
                              </div>
                              <p class="text-center">
                                  <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                  <button type="submit" name="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                              </p> 
                          </form>
                        </div>
                      </div>
              </div>
          </div>
          <?php
            if (isset($_POST['submit'])){
              include("connect.php");
              $categoria = $_POST["nomcategoria"];
              $insertar = "INSERT INTO `categoria`(`descripcion`) VALUES ([$categoria])";
              $query = mysqli_query($conexion, $insertar);
            }
          ?>
      <div class="footpage">
      Copyright by Michael G. and Stiben T. &copy; <?=date("Y")?>
      </div>

      <script src="librerias/jquery.slim.min.js"></script>
          <script src="librerias/bootstrap4/popper.min.js"></script>
          <script src="librerias/bootstrap4/bootstrap.min.js"></script>
          <script src="librerias/datatable/jquery.dataTables.min.js"></script>
          <script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
          <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
          <script>
              $(document).ready(function () {
                  $("#sidebarCollapse").on("click", function () {
                  $("#sidebar-container").toggleClass("active");
                  });
              });
      </script>
  </body>
</html>