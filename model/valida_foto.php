<?php
class Foto{
	var $codigo;
	var $foto;
	public function __construct($codigo,$foto){
		$this->codigo = $codigo;
		$this->foto = $foto;
	}

	function guardar(){
		try{
			include('../model/conexion.php');			
			$stmt = $dbh->prepare("INSERT INTO foto (foto) VALUES (:foto)  ");
			$stmt->bindParam(':foto',$this->foto);		
			if($stmt->execute()){
				echo "<h1>Se añadio foto</h1></br>";
				echo "<button type='button' class='btn btn-lg'><a href='../view/Admin2.php'>Volver</a></button>";
			}
		}catch (PDOException $e){
			die("Error: ".$e->getMessage());
		}
	}
		//
	public function ListarFotos(){
		try{
			include('../model/conexion.php');	
			$rows=null;
			$stmt = $dbh->prepare("SELECT codigo,foto FROM foto ");
			$stmt ->execute();
			while($result=$stmt->fetch()){
				$rows[]=$result;
			}
			return $rows;
		}catch (PDOException $e){
			die("Error: ".$e->getMessage());
		}
	}
		//
	public function eliminarFila(){
		try{
			include('../model/conexion.php');
			$stmt = $dbh->prepare("DELETE  FROM foto where codigo=:codigo");
			$stmt->bindParam(':codigo',$this->codigo);	
			if($stmt->execute()){
				echo "<h1>Eliminado</h1></br>";
			};
		}catch (PDOException $e){
			die("Error: ".$e->getMessage());
		}
	}
}
Class Usuario{
		public function usuario(){
			try{
				include('../model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT * FROM usuario");
				$stmt ->execute();
				while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
	}
}
/////////////////////////
class Clase{		
		
		var $nombre;
		var $dni;
		var $start;
		var $hora_i;
		var $hora_f;
		var $color;
		var $paquete;
		
		public function __construct($nombre,$dni,$start,$hora_i,$hora_f,$color,$paquete){
       
		$this->nombre = $nombre;
		$this->dni = $dni;
		$this->start = $start;
        $this->hora_i = $hora_i;
        $this->hora_f = $hora_f;
        $this->color = $color;
        $this->paquete = $paquete;
		}

		function guardar(){
			try{
				include('../model/conexion.php');			
				$stmt = $dbh->prepare("INSERT INTO clases (nombre,dni,start,hora_i,hora_f,color,paquete) VALUES (:nombre, :dni, :start,:hora_i, :hora_f,:color,:paquete)");
				
				$stmt->bindParam(':nombre',$this->nombre);
				$stmt->bindParam(':dni',$this->dni);
				$stmt->bindParam(':start',$this->start);
				$stmt->bindParam(':hora_i',$this->hora_i);
				$stmt->bindParam(':hora_f',$this->hora_f);	
				$stmt->bindParam(':color',$this->color);	
				$stmt->bindParam(':paquete',$this->paquete);		
				if($stmt->execute()){
				echo "<h1>La clase se ha registrado!</h1></br>";
				echo "<button type='submit' class='btn btn-info btn-lg' id='btnGuardar' name='btnGuardar'><a href='../view/agenda.php'>Volver</a></button>";

				}	
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
				
		}
}/////////////////////////
class Articulos{
		var $titulo;
		var $area;
		var $foto;
		public function __construct($titulo,$area,$foto){
		
		$this->titulo = $titulo;
		$this->area = $area;
		$this->foto = $foto;
		}

		public function guardarArticulo(){
			try{
				include('../model/conexion.php');			
				$stmt = $dbh->prepare("INSERT INTO articulos(titulo,area,foto) VALUES (:titulo,:area,:foto)");
				
				$stmt->bindParam(':titulo',$this->titulo);
				$stmt->bindParam(':area',$this->area);
				$stmt->bindParam(':foto',$this->foto);		
				if($stmt->execute()){
				echo "<h1>Nuevo Articulo Creado!</h1></br>";
				echo "<button type='submit' class='btn btn-info btn-lg' id='btnGuardar' name='btnGuardar'><a href='../view/Panelarticulos.php'>Volver</a></button>";
				}	
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
		}

		public function listarArticulos(){
			try{
			include('../model/conexion.php');	
			$rows=null;
			$stmt = $dbh->prepare("SELECT titulo,area,foto FROM articulos order by id desc ");
			$stmt ->execute();
			while($result=$stmt->fetch()){
				$rows[]=$result;
			}
			return $rows;
		}catch (PDOException $e){
			die("Error: ".$e->getMessage());
		}
		}
	}
?>
