<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
error_reporting(0);
// Conexion a la base de datos
require_once '../model/conexion.php';
require_once '../model/valida_foto.php';


	
	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	$start = $_POST['start'];
	$hora_i = $_POST['hora_i'];
	$hora_f = $_POST['hora_f'];
	$color = $_POST['color'];
	$paquete = $_POST['paquete'];

		$Agen = new Clase;

		$Agen->nombre = $nombre;
		$Agen->dni = $dni;
		$Agen->start = $start;
		$Agen->hora_i = $hora_i;
		$Agen->hora_f = $hora_f;
		$Agen->color = $color;
		$Agen->paquete = $paquete;
if(isset($_POST['btnGuardar'])){
	$Agen->guardar();	
	
}
?>
</body>
</html>