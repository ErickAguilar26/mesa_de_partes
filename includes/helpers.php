<?php 
function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
	}
	return $alerta;
}

function borrarErrores(){
	$borrado = false;
	
	if(isset($_SESSION['errores'])){
		$_SESSION['errores'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['errores_entrada'])){
		$_SESSION['errores_entrada'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['errores_consulta'])){
		$_SESSION['errores_consulta'] = null;
		$borrado = true;
	}

	if(isset($_SESSION['error_login'])){
		$_SESSION['error_login'] = null;
		$borrado = true;
	}
	return $borrado;
}

function conseguirGerencias($conexion){
	$sql = "SELECT * FROM ee_gerencia ;";
	$gerenciass = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($gerenciass && mysqli_num_rows($gerenciass) >= 1){
		$resultado = $gerenciass;
	}
	
	return $resultado;
}
function conseguirTipoDocs($conexion){
	$sql = "SELECT * FROM ee_tipodoc ;";
	$tipoDocc = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($tipoDocc && mysqli_num_rows($tipoDocc) >= 1){
		$resultado = $tipoDocc;
	}
	
	return $resultado;
}

function conseguirUltSolicitante($conexion){
	$sql = "SELECT idSolicitante FROM ee_solicitante ORDER BY idSolicitante DESC LIMIT 1;";
	$solicitante = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($solicitante && mysqli_num_rows($solicitante) != 0){
		$resultado = mysqli_fetch_assoc($solicitante);
	}
	
	return $resultado;
}
function conseguirUltTramite($conexion){
	$sql = "SELECT idTramite FROM ee_tramite ORDER BY idTramite DESC LIMIT 1;";
	$tramite = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($tramite && mysqli_num_rows($tramite) >= 1){
		$resultado = mysqli_fetch_assoc($tramite);
	}
	
	return $resultado;
}
function conseguirUltFut($conexion){
	$sql = "SELECT * FROM ee_fut ORDER BY idFut DESC LIMIT 1;";
	$fut = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($fut && mysqli_num_rows($fut) >= 1){
		$resultado = mysqli_fetch_assoc($fut);
	}
	
	return $resultado;
}
function conseguirUltAcceso($conexion){
	$sql = "SELECT * FROM ee_informacion ORDER BY idInformacion DESC LIMIT 1;";
	$acce = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($acce && mysqli_num_rows($acce) >= 1){
		$resultado = mysqli_fetch_assoc($acce);
	}
	
	return $resultado;
}

function verificarFut($conexion, $codigoCargo){
	$sql = "SELECT * FROM ee_fut WHERE codigoCargo='$codigoCargo'";
	$fut = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($fut && mysqli_num_rows($fut) >= 1){
		$resultado = mysqli_fetch_assoc($fut);
	}
	
	return $resultado;
}
function listarFut($conexion, $codigoCargo){
	$sql = "SELECT f.codigoCargo, e.idEstado AS 'estado', CONCAT(g.iniciales,' hacia ', j.iniciales) AS 'ruta', d.fechaHora, d.descripcion FROM ee_derivado d
			INNER JOIN ee_gerencia g ON d.idGerenciaEmisora=g.idGerencia
			INNER JOIN ee_gerencia j ON d.idGerenciaReceptora=j.idGerencia 
			INNER JOIN ee_tramite t ON d.idTramite= t.idTramite
			INNER JOIN ee_estado e ON d.idEstado=e.idEstado
			INNER JOIN ee_fut f ON d.idTramite = f.idTramite
			WHERE f.codigoCargo='$codigoCargo';";
	$fut = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($fut && mysqli_num_rows($fut) >= 1){
		
		$resultado = $fut;
	}
	else{
		$resultado = 0;
	}
	
	return $resultado;
}

?>