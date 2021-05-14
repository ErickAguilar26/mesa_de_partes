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

function conseguirGerentes($conexion){
	$sql = "SELECT CONCAT(e.nombres,' ',e.apellidos) AS nombresCompletos, g.iniciales AS organo, e.usuario, t.nombre AS tipo, e.correo, e.celular  FROM ee_empleado e
	INNER JOIN ee_gerencia g ON e.idGerencia=g.idGerencia
	INNER JOIN ee_tipoempleado t ON e.idTipoEmpleado=t.idTipoEmpleado
	WHERE e.idTipoEmpleado = 2;";
	$gerente = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($gerente && mysqli_num_rows($gerente) >= 1){
		$resultado = $gerente;
	}
	
	return $resultado;
}

function verOperaciones($conexion){
	$sql = "SELECT o.idOperacion AS 'id', CONCAT(e.nombres,' ',e.apellidos) AS 'empleado', o.operacionDescripcion AS 'descripcion', o.fechaHora AS 'fechaHora' FROM ee_operacion o
	INNER JOIN ee_empleado e ON o.idEmpleado=e.idEmpleado;";
	$operacion = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($operacion && mysqli_num_rows($operacion) >= 1){
		$resultado = $operacion;
	}
	
	return $resultado;
}


?>