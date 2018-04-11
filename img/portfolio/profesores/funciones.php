<?php
function conectar(){
	$m 		= new PDO('mysql:host=localhost;dbname=avon','root');
	//$m 		= new PDO('mysql:host=192.168.3.4;dbname=dbRecuperaAgent','root','c141r3');
	//$m 		= new PDO('mysql:host=192.168.3.4;dbname=avon','fmoreno','@f14vio$m$');
	return $m;
}

function fecha_anterior($conn,$fecha){
	$cSql = "select fecha from dbReporting.tbl_dsh_patron a order by fecha desc limit 1";
	foreach($conn->query($cSql) as $r){
		$fecha = $r["fecha"];
	}
	return $fecha;
}

function dia_anterior_util($fecha)
{ 
    $sol 	= (strtotime($fecha) - (3600*24));
    $cFecha = date('Y-m-d', $sol); 
    if (date("N",strtotime($cFecha))==7){
    	$sol = (strtotime($cFecha) - (3600*24)); 
    	$cFecha = date('Y-m-d', $sol);
    }
    return $cFecha;
}

function celda($dato="",$centrar=0){
	$cad = "";
	if($centrar==1)
		$cad .= "<td align=\"center\">$dato</td>";
	else
		$cad .= "<td align=\"left\">$dato</td>";
	return $cad;
}

function combo($result, $name, $dato_valor, $dato_mostrar, $defecto){
	$cad = "<select name=\"$name\" id=\"$name\">";
	// <option value=\"$defecto\">$defecto</option>
	
	foreach($result as $r){
		$valor 		= $r["$dato_valor"];
		$mostrar 	= $r["$dato_mostrar"];
		$senial = $defecto == $valor ? 'selected' : '';
		$cad .= "<option value=\"" . $valor ."\" $senial>$mostrar</option>";
	}
	$cad .= "</select>";
	return $cad;
}

function echor($msj=""){
	echo $msj."<br>\n";
}

function echot(&$cAcu,$msj){
	$cAcu .= $msj . "<br>";
}

function mostrar_tabla($result,$nCol = 2){
	$nLim = count($ar);
	$cad = "<table>";
	for($i=1; $i < $nLim; $i++){
		$cad .= "<tr>";
		for($j=0; $j < $nCol; $j++){
			$cad .=	"<td>" . $result[$j][$i] . "</td>";
			$cad .= "</tr>";
		}
	}
	$cad .= "</table>";
	return $cad;
}

function mostrar_tabla2($pdo, $nFilas=1){
	$cad 	= "<table border='1'>";

	//$nFilas_reales = $pdo->rowCount();

	//if ($nFilas_reales = 0){
	//	return "<strong>No existen datos para mostrar.</strong>";
	//}

	$nCol = $pdo->columnCount();

	// PINTANDO CABECERAS
	$cad .= "<tr>";
	for($nx=0; $nx < $nCol; $nx++){
		$arreglo 	= $pdo->getColumnMeta($nx);
		$name 		= $arreglo['name'];
		$cad 		.= "<th>" . $name . "</th>";
	}
	$cad .= "</tr>";

/*	for($nFil=0; $nFil < $nFilas; $nFil++){
		$cad .="<tr>"; 
		for($nx=0; $nx < $nCol; $nx++){
			$fila 	= $pdo->fetch(PDO::FETCH_BOTH);
			$cad 	.= celda($fila[$nx]);
		}
		$cad .= "</tr>";
	}
*/
	while($fila 	= $pdo->fetch(PDO::FETCH_BOTH)){
		$cad .= "<tr>";
		for($nx=0; $nx < $nCol; $nx++){
			//$fila 	= $pdo->fetch(PDO::FETCH_BOTH);
			$cad 	.= celda($fila[$nx]);
		}
		$cad .= "</tr>";
	}

	$cad .= "</table>";
	return $cad;
}

function genera_sql($cTabla,$ar_campos,$ar_datos){
	$nCampos 	= count($ar_campos);
	//$nDatos 	= count($ar_datos);

	// A LOS CAMPOS
	$cad_1 		= "";
	$flag 		= 0; 
	for($i = 0; $i < $nCampos; $i++){
		$flag = 1;
		$cad_1 .= "`".$ar_campos[$i]."`,";
	}
	// quitando la ultima coma
	if($flag>0){ $cad_1 = substr($cad_1,0,strlen($cad_1)-1); }

	// A LOS DATOS
	$cad_2 		= "";
	$flag 		= 0; 
	for($i = 0; $i < $nCampos; $i++){
		$flag = 1;
		$cad_2 .= "`".$ar_datos[$i]."`,";
	}
	// quitando la ultima coma
	if($flag>0){ $cad_2 = substr($cad_2,0,strlen($cad_2)-1); }

	$cRetorna = "insert into $cTabla (". $cad_1 .") values(" . $cad_2 . ")";
	return $cRetorna;
}

function genera_sql2($conn, $conn_destino,$base, $cTabla, $cSql_data, $mensaje=""){
	$cSql = "describe `$base`.`$cTabla`";

	$nx = 0;
	foreach($conn->query($cSql) as $r){
		$ar_campos[$nx][0] = $r["Field"];
		$ar_campos[$nx][1] = $r["Type"];
		$nx++;
	}

	$nCampos 	= $nx;

	// A LOS CAMPOS
	$cad_1 		= "";
	$flag 		= 0; 
	for($i = 0; $i < $nCampos; $i++){
		$flag = 1;
		$cad_1 .= "`".$ar_campos[$i][0]."`,";
	}
	// quitando la ultima coma
	if($flag>0){ $cad_1 = substr($cad_1,0,strlen($cad_1)-1); }

	// A LOS DATOS ****************************
	$cRet 	= $cRetorna = "";
	$nId	= 0;
	foreach($conn->query($cSql_data) as $r){
		$nId++;
		for($nx=0; $nx < $nCampos; $nx++){
			$ar_datos[$nx] = $r[$ar_campos[$nx][0]];
		}

		$cad_2 		= "";
		$flag 		= 0; 
		for($i = 0; $i < $nCampos; $i++){
			$flag = 1;
			
			// validando el tipo de informacion
			if (is_null($ar_datos[$i])){
				$cad_2 .= "null,";
			}else{	
				if($ar_campos[$i][1] == "date"){
					if ($ar_datos[$i]=="0000-00-00"){
						//$cad_2 .= "null,";		
						$cad_2 .= "'1970-01-01',";
					}else{
						$cad_2 .= "'".$ar_datos[$i]."',";
					}
				}elseif($ar_campos[$i][1] == "datetime"){
					if ($ar_datos[$i]=="0000-00-00 00:00:00"){
						$cad_2 .= "'1970-01-01 00:00:00',";
					}else{
						$cad_2 .= "'".$ar_datos[$i]."',";
					}
				}else{
					$cad_2 .= "'".$ar_datos[$i]."',";
				}
			}
		}

		// quitando la ultima coma
		if($flag>0){ $cad_2 = substr($cad_2,0,strlen($cad_2)-1); }

		$cRet = "insert into `$base`.`$cTabla` (". $cad_1 .") values(" . $cad_2 . ");";
		$pdo = $conn_destino->prepare($cRet);
		$pdo->execute();

		if($pdo->rowCount()>0){
			echor("$nId $mensaje) insercion OK");
		}else
			echor("$nId $mensaje)<span style=\"color:red;\">$cRet</span>");
	}
	return $cRetorna;
}

function genera_texto($pdo, $nCol = 2){
	$cad 	= "";

	$nFilas = $pdo->rowCount();

	for($nx = 0; $nx < $nFilas; $nx++){
		$fila = $pdo->fetch(PDO::FETCH_BOTH);
		for($j=0; $j < $nCol; $j++){
			$cad .= $fila[$j];
		}
		$cad .= "\n\r";
	}
	return $cad;
}

// Quita comillas simples de datos string
function prepara($cDato=""){
	$cDato = str_replace("'", "", $cDato);
	
	// quito el back slash si se encuentra al ultimo
	$nLargo = strlen($cDato);
	$nPos = strpos($cDato, chr(92));
	if($nPos === false){
		$nada = "";
	}else{
		if($nLargo - 1 == $nPos){ // se quita el back slash
			$cDato = substr($cDato,0,$nLargo-1);
		}
	}
	return $cDato;
}
?>