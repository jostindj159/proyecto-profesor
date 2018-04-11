<?php
error_reporting(0);
require_once('../model/conexion.php');
require_once('../model/valida_foto.php');

require_once('../controller/c_foto.php');
?>
<html>
    <head>
        <title>Subir Foto</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="agenda.php">Agenda</a></li>
      <li class="active"><a href="Panelarticulos.php">Nuevo Articulo</a></li>
      <li class="active"><a href="Admin2.php">Nueva Foto</a></li>
  </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php""><span class="glyphicon glyphicon-off"></span> Salir</a></li>
    </ul>
  </div>
</nav>
<div class="container">
 <div class="row">
    <form action="../controller/c_guardar.php" method="POST" enctype="multipart/form-data">
        <h2>Imagen :</h2>
        <input type="file" name="foto" id="foto" required="true" class="form-control input-lg">
        <button type="submit" class="btn btn-primary btn-block" name="btnGuardar" id="btnGuardar">Subir</button>
    </form>    
        <?php
        echo "<center>";
            verFotos();
        echo "</center>";
        ?>
      </div>
    </div>
</body>
</html>
