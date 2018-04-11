<?php
session_start();
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		echo "Llene campos";
	}else{
	$user = $_POST["username"];
	$pass = $_POST["password"];

	include('../model/conexion.php');

		try {
			$cSql = "select * from usuario where nombre_usuario = ? and clave = ?";

			$pdo = $dbh->prepare($cSql);

			$pdo->bindParam(1,$user);
			$pdo->bindParam(2,$pass);

			$pdo->execute();

			$nFilas = 0;
			while ($r = $pdo->fetch()) {
				$nFilas++;
				$_SESSION['usuario_'] = $r['id'];
			}
			if ($nFilas == 0) {
				echo "Acceso Denegado!";
			}else{
				include('../view/panel.php');
			}
		} catch (Exception $e) {
			die('Error'.$e -> getMessage());
		}
	}
}
?>