<?php
    include 'connect.php';
    $query = "SELECT * FROM categoria";
    $result = mysqli_query($conexion, $query);
    $query2 = "SELECT * FROM autor";
    $result2 = mysqli_query($conexion, $query2);
    $query3 = "SELECT * FROM editorial";
    $result3 = mysqli_query($conexion, $query3);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Biblioteca Online</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./librerias/bootstrap4/bootstrap.min.css">
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
  <?php include "header.php";
  include 'php/consultas.php';
  $sql = extraerLibros(base64_decode($_GET['id']));
  $row = $sql->fetch_assoc();
  ?>

<div class="container">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Agregar un nuevo Libro</div>
        <div class="panel panel-default">
            <div class="container">
                <form action="php/registros-crud/book.php?accion=UDT" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label">Código <span style="color:red">*</span></label>
                        <input type="text" name="codigo" id="codigo" require="" readonly="" class="form-control" value="<?php echo $row['idlibro'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Titulo <span style="color:red">*</span></label>
                        <input class="form-control" type="text" name="titulo" autocomplete="off" required value="<?php echo $row['titulo'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Estado <span style="color:red">*</span></label>
                        <select class="form-control" name="estado" id="estado">
                            <option value="A" <?php if($row['estado'] =='A'){echo "selected";} ?>> Activo </option>    
                            <option value="I" <?php if($row['estado'] =='I'){echo "selected";} ?>> Inactivo </option>    
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">ISBN <span style="color:red">*</span></label>
                        <input class="form-control" type="text" name="isbn" autocomplete="off" required value="<?php echo $row['isbn'] ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-12 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                            <div class="form-group">
                                <label class="control-label">Descripcion <span style="color:red">*</span></label>
                                <textarea class="form-control" name="descripcion" id="descripcion"><?php echo $row['descripcion'] ?></textarea>
                            </div>
                        </div>                     
                    </div>
                    <div class="form-group">
                        <label class="control-label">Año <span style="color:red">*</span></label>
                        <input class="form-control" type="number" name="year" min="1900" required value="<?php echo $row['year'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Categoria <span style="color:red">*</span></label>
                        <select class="form-control" name="categoria" required>
                            <option selected="true" disabled="disabled">Seleccionar una...</option>
                            <?php while($categoria = mysqli_fetch_array($result))
                            
                                {
                            ?>
                            <option value="<?php echo $categoria['descripcion']?>"> <?php echo $categoria['descripcion']?> </option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Autor <span style="color:red">*</span></label>
                        <select class="form-control" name="autor" required>
                            <option selected="true" disabled="disabled">Seleccionar una...</option>
                            <?php while($autor = mysqli_fetch_array($result2))
                            
                                {
                            ?>
                            <option value="<?php echo $autor['desc_autor']?>"> <?php echo $autor['desc_autor']?> </option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Editorial <span style="color:red">*</span></label>
                        <select class="form-control" name="editorial" required>
                            <option selected="true" disabled="disabled">Seleccionar una...</option>
                            <?php while($editorial = mysqli_fetch_array($result3))
                            
                                {
                            ?>
                            <option value="<?php echo $editorial['descripcion']?>"> <?php echo $editorial['descripcion']?> </option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="row mx-2">
                            <div class="form-group">
                                <label for="portada">Portada</label><br/>
                                <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['portada']); ?>" />
                                <input type="file" name="portada" class="form-control-file" id="portada" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label for="archpdf">Archivo PDF</label>
                                <input type="file" name="archivo" class="form-control-file" id="archpdf" accept="application/pdf">
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-6 col-offset-2 col-xs-12 col-xs-offset-0">
                            <div class="form-group">
                                <a href="manage-books.php" class="btn btn-info">Atras</a>
                                <input type="submit" value="Guardar" class="btn bg-bleu" style="color:white;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- Fin del Panel -->
    </div>
</div>

<?php include "footer.php";?>
                      
</body>
</html>