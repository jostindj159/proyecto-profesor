<?php 
session_start();
require_once('c_funciones.php');
if (!valida_logueo()){
  die('Inicia Sesion');
}
?>
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
require_once '../model/conexion.php';
require_once '../model/valida_foto.php';

if(isset($_GET['codigo'])){
	$codigo=$_GET['codigo'];
	$objFoto = new Foto("","");
	$objFoto->codigo = $codigo;
	$mensaje=$objFoto->eliminarFila();
}
?>
</body>
</html>