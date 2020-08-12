<?php
    session_start();

    if (!isset($_SESSION['rol'])) {
        header('location: ../index.php');
    }else{
        if($_SESSION['rol'] !=2){
            header('location: ../index.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../librerias/bootstrap4/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"
    />

     <!-- Font Awesome JS -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>


<?php include "header.php"; ?>
      <!-- Page Content -->
      <div class="container">
          <!-- Page Heading -->
          <h1 class="my-4">
            Pagina Principal
          </h1>

          <div class="row">
            <div class="col-lg-6 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="http://www.konradlorenz.edu.co/es/estudiantes/servicios-para-estudiantes/biblioteca-juan-alberto-aragon-bateman/novedades/714-los-beneficios-de-la-lectura.html"
                  ><img class="card-img-top" src="../image/book.jpg" alt=""
                /></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="http://www.konradlorenz.edu.co/es/estudiantes/servicios-para-estudiantes/biblioteca-juan-alberto-aragon-bateman/novedades/714-los-beneficios-de-la-lectura.html">Los beneficios de la lectura</a>
                  </h4>
                  <p class="card-text">
                  "Leer es para la mente lo que el ejercicio físico es para el cuerpo". Esta frase de Joseph Addison, ensayista, poeta y guinista inglés (1672 - 1719) representa muy bien los beneficios de leer. ¿Sabía usted que al leer, no solo incrementa notoriamente la concentración, enriquece su vocabulario y previene el declive cognitivo?
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="https://oferplan.abc.es/blog/eventos/dia-del-libro-2020/?ref=https%3A%2F%2Fwww.google.com%2F"
                  ><img
                    class="card-img-top"
                    src="../image/images.jpg"
                    alt=""
                /></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="https://oferplan.abc.es/blog/eventos/dia-del-libro-2020/?ref=https%3A%2F%2Fwww.google.com%2F">Recomendaciones de Libros</a>
                  </h4>
                  <p class="card-text">Parece que este año vamos a disfrutar del día del libro, el próximo jueves 23 de abril, de una manera diferente. Ya no vamos a visitar los puestos de libros en la calles o a acudir a alguna firma de libros. Pero, no hay mal que por bien no venga, al estar en casa tenemos más tiempo para leer. Por eso te dejamos una selección de los mejores libros de adulto recomendados para este día. </p>
                </div>
              </div>
            </div>


          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->


<?php include "footer.php"; ?>

</body>
</html>