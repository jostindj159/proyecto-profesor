<?php
function valida_logueo(){
	if (!isset($_SESSION['usuario_'])) {
		return false;
	}else{
		return true;
	}
}

?>