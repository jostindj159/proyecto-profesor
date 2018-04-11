<?php
//error_reporting(0);
require_once('../model/conexion.php');
require_once('../model/valida_foto.php');

//require_once('../controller/c_foto.php');
?>
<html>
    <head>
        <title>Subir Articulos</title>
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
    <form action="../controller/c_nuevoArticulo.php" method="POST" enctype="multipart/form-data">
        <div>
        <label>Titulo</label>
        </div>
        <div>
        <input type="text" name="titulo" id="titulo" required="true" class="form-control">
        </div>

        <div>
        <label>Area</label>
        </div>
        <div>
        <textarea class="form-control" name="area" id="area" rows="20" cols="100"  minlength="20" required></textarea>
        </div>
        <div>
        <label>Imagen</label>
        <input type="file" name="foto" id="foto" required="true" class="form-control input-lg">
        <button type="submit"  name="btnGuardarArticulo" id="btnGuardarArticulo">Subir</button>
    </form>    

      </div>
    </div>
</body>
</html>
