<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
error_reporting(0);
require_once '../model/conexion.php';
require_once '../model/valida_foto.php';

	

	$foto = $_FILES['foto']['name'];
	$ruta=$_FILES['foto']['tmp_name'];
	$destino="../img/portfolio/articulos/".$foto;
	$titulo = $_POST['titulo'];
	$area = $_POST['area'];
	copy($ruta,$destino);

		$Articulos = new Articulos;

		
		$Articulos->foto = $destino;
		$Articulos->titulo = $titulo;
		$Articulos->area = $area;
		
if(isset($_POST['btnGuardarArticulo'])){
	$Articulos->guardarArticulo();	
}
?>
</body>
</html>