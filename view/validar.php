<?php

$user = $_POST["username"];
$pass = $_POST["password"];

include("../model/conexion.php");

if (empty($user) or empty($pass)){
	die("DEBE INGRESAR DATOS");
}


$cSql = "select * from usuario where nombre_usuario = ? and clave = ?";

$pdo = $dbh->prepare($cSql);

$pdo->bindParam(1,$user);
$pdo->bindParam(2,$pass);

$pdo->execute();

while($r = $pdo->fetch(PDO::FETCH_BOTH)){
	header("Location: http://192.168.0.7/WebProfesor2/view/Admin2.php");
	//include("./view/v_panel.php");
}
?>