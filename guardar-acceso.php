<?php

if(isset($_POST)){
	
	require_once 'includes/conexion.php';
    require_once 'includes/helpers.php'; 
	
    //datos del solicitante
	$txtNombre = isset($_POST['txtNombre']) ? mysqli_real_escape_string($db, $_POST['txtNombre']) : false;
	$txtApellido = isset($_POST['txtApellido']) ? mysqli_real_escape_string($db, $_POST['txtApellido']) : false;
    $cbxDoc = isset($_POST['cbxDoc']) ? (int)$_POST['cbxDoc'] : false;
    $txtNumDoc = isset($_POST['txtNumDoc']) ? (int)$_POST['txtNumDoc'] : false;
    $cbxTipoDomicilio = isset($_POST['cbxTipoDomicilio']) ? mysqli_real_escape_string($db, $_POST['cbxTipoDomicilio']) : false;
    $txtTipoDomicilio = isset($_POST['txtTipoDomicilio']) ? mysqli_real_escape_string($db, $_POST['txtTipoDomicilio']) : false;
    $txtNumero1 = isset($_POST['txtNumero1']) ? mysqli_real_escape_string($db, $_POST['txtNumero1']) : false;
    $txtNumero2 = isset($_POST['txtNumero2']) ? mysqli_real_escape_string($db, $_POST['txtNumero2']) : false;
    $cbxDepartamento = isset($_POST['cbxDepartamento']) ? mysqli_real_escape_string($db, $_POST['cbxDepartamento']) : false;
    $cbxProvincia = isset($_POST['cbxProvincia']) ? mysqli_real_escape_string($db, $_POST['cbxProvincia']) : false;
    $cbxDistrito = isset($_POST['cbxDistrito']) ? mysqli_real_escape_string($db, $_POST['cbxDistrito']) : false;
    $txtTelefono = isset($_POST['txtTelefono']) ? (int)$_POST['txtTelefono'] : false;
    $txtCelular = isset($_POST['txtCelular']) ? (int)$_POST['txtCelular'] : false;
    $txtCorreo = isset($_POST['txtCorreo']) ? mysqli_real_escape_string($db, trim($_POST['txtCorreo'])) : false;
    //fin de datos edl solicitante
    $informacionSolicitada = isset($_POST['informacion-solicitada-textarea']) ? mysqli_real_escape_string($db, $_POST['informacion-solicitada-textarea']) : false;
	$area = isset($_POST['cbxarea']) ? (int)$_POST['cbxarea'] : false;
    $observacion = isset($_POST['observacion-textarea']) ? mysqli_real_escape_string($db, $_POST['observacion-textarea']) : false;
    
    //*********************************ARRAY DE ERRORES******************************************
    $errores = array();
    //************************************VALIDACIONES*********************************************
    //validando nombre
    if(empty($txtNombre)){
        $errores['nombre'] = 'El nombre est?? vacio.';
    }
    else{
        if(!is_string($txtNombre)){
            $errores['nombre'] = 'Ingresa un texto correcto.';
        }
        else{
            if(strlen($txtNombre) > 75){
                $errores['nombre'] = 'Los nombres no deben pasar de 75 letras.';
            }
        }
    }
    //validando apellido
    if(empty($txtApellido)){
        $errores['apellido'] = 'El apellido est?? vacio.';
    }
    else{
        if(!is_string($txtApellido)){
            $errores['apellido'] = 'Ingresa un texto correcto.';
        }
        else{
            if(strlen($txtApellido) > 75){
                $errores['apellido'] = 'Los apellidos no deben pasar las 75 letras.';
            }
        }
    }
    //validando combobox tipo de documento
    if(empty($cbxDoc)){
        $errores['tipoDoc'] = 'Elija un tipo de documento.';
    }
    else{
        if(!is_numeric($cbxDoc)){
            $errores['tipoDoc'] = 'Ingresa una opci??n correcta.';
        }
        else{
            if(strlen($cbxDoc) > 11){
                $errores['tipoDoc'] = 'La opci??n no es correcta.';
            }
        }
    }
    //validar numero de dni
    $maxnumeros=0;
    switch($cbxDoc){
        case 1:
            $maxnumeros = 8;
            break;
        case 2:
            $maxnumeros = 11;
            break;
        case 3:
            $maxnumeros = 12;
            break;
        case 4:
            $maxnumeros = 12;
            break;
        default:
            $maxnumeros = 0;
    }
    if(empty($txtNumDoc)){
        $errores['numDoc'] = 'Numero de documento vacio.';
    }
    else{
        if(!is_numeric($txtNumDoc)){
            $errores['numDoc'] = 'Ingresa un documento correcto.';
        }
        else{
            if(strlen($txtNumDoc) > $maxnumeros){
                $errores['numDoc'] = 'El documento excede de los car??cteres permitidos.';
            }
        }
    }    
    // validar combobox tipo de domicilio
    if(empty($cbxTipoDomicilio)){
        $errores['cbxTipoDomicilio'] = 'Escoja un tipo de domicilio.';
    }
    else{
        if(!is_string($cbxTipoDomicilio)){
            $errores['cbxTipoDomicilio'] = 'Elija un tipo de domicilio correcto.';
        }
        else{
            if(strlen($cbxTipoDomicilio) > 20){
                $errores['cbxTipoDomicilio'] = 'El tipo de domicilio no debe pasar de 20 car??teres.';
            }
        }
    }
    //validar texto de domicilio
    if(empty($txtTipoDomicilio)){
        $errores['txtTipoDomicilio'] = 'Ingrese su domicilio';
    }
    else{
        if(!is_string($txtTipoDomicilio)){
            $errores['txtTipoDomicilio'] = 'Ingrese un domicilio correcto.';
        }
        else{
            if(strlen($txtTipoDomicilio) > 20){
                $errores['txtTipoDomicilio'] = 'El nombre de domicilio no debe pasar de 20 car??teres.';
            }
        }
    }
    //validar datos del domicilio
    if(empty($txtNumero1)){
        $errores['txtNumero1'] = 'Ingrese datos de su domicilio.';
    }
    else{
        if(!is_string($txtNumero1)){
            $errores['txtNumero1'] = 'Ingresa un dato de domicilio correcto.';
        }
        else{
            if(strlen($txtNumero1) > 20){
                $errores['txtNumero1'] = 'El documento excede de los car??cteres permitidos.';
            }
        }
    } 
    if(empty($txtNumero2)){
        $errores['txtNumero2'] = 'Ingrese datos de su domicilio.';
    }
    else{
        if(!is_string($txtNumero2)){
            $errores['txtNumero2'] = 'Ingresa un dato de domicilio correcto.';
        }
        else{
            if(strlen($txtNumero2) > 20){
                $errores['txtNumero2'] = 'El documento excede de los car??cteres permitidos.';
            }
        }
    }
    //validando combobox de departamento
    if(empty($cbxDepartamento)){
        $errores['departamento'] = 'Escoja un departamento.';
    }
    else{
        if(!is_string($cbxDepartamento)){
            $errores['departamento'] = 'Escoja un departamento correcto.';
        }
    }
    //Validando combobox de provincia
    if(empty($cbxProvincia)){
        $errores['provincia'] = 'Escoja una provincia.';
    }
    else{
        if(!is_string($cbxProvincia)){
            $errores['provincia'] = 'Escoja una provincia correcto.';
        }
    }
    //Validando combobox de distrito
    if(empty($cbxDistrito)){
        $errores['distrito'] = 'Escoja un distrito.';
    }
    else{
        if(!is_string($cbxDistrito)){
            $errores['distrito'] = 'Escoja un distrito correcto.';
        }
    }
    //validando celular 
    if(empty($txtCelular)){
        $errores['celular'] = 'Ingrese un numero de celular.';
    }
    else{
        if(!is_numeric($txtCelular)){
            $errores['celular'] = 'Ingresa un celular correcto.';
        }
        else{
            if(strlen($txtCelular) > 9){
                $errores['celular'] = 'El celular no debe exceder de 9 numeros (Evita poner "+51").';
            }
        }
    }   
    //validando correo
    if(empty($txtCorreo)){
        $errores['correo'] = 'Correo vacio.';
    }
    else{
        if(!filter_var($txtCorreo,FILTER_VALIDATE_EMAIL)){
            $errores['correo'] = 'Ingrese un correo correcto.';
        }
        else{
            if(strlen($txtCorreo) > 100){
                $errores['correo'] = 'El correo no debe exceder de los 100 car??cteres.';
            }
        }
    }

    //Validando la informacion solicitada
    if(empty($informacionSolicitada)){
        $errores['informacionSolicitada'] = 'La informacion solicitada est?? vacia.';
    }
    else{
        if(!is_string($informacionSolicitada)){
            $errores['informacionSolicitada'] = 'Ingresa una informacion solicitada correcta.';
        }
        else{
            if(strlen($informacionSolicitada) > 200){
                $errores['informacionSolicitada'] = 'La informacion solicitada no debe pasar los 200 car??cteres.';
            }
        }
    }
    //validando area
    if(empty($area) ){
        $errores['area'] = 'Escoja un Area destino.';
    }
    //verificando errores
    if(count($errores) == 0){
            $direccion = $cbxTipoDomicilio.' ' . $txtTipoDomicilio. ' - '.  $txtNumero1.' # ' . $txtNumero2;
            $origen = $cbxDistrito.', '.$cbxProvincia.', '.$cbxDepartamento;
			$sql1 = "INSERT INTO ee_solicitante VALUES (null,'$txtNombre','$txtApellido',$cbxDoc,$txtNumDoc,'$direccion',$txtTelefono,$txtCelular,'$origen','$txtCorreo');";
            $insertarSolicitante = mysqli_query($db, $sql1);
            //guardar tamite
            $sql2 = "INSERT INTO ee_tramite VALUES (null,2,0,0);";
            $insertarTramite = mysqli_query($db, $sql2);
            //conseguir ultimo solicitante y ultimo tramite
            $solicitante = conseguirUltSolicitante($db);
            $idSoli = $solicitante['idSolicitante'];
            $tramite = conseguirUltTramite($db);
            $idTramite = $tramite['idTramite'];
            //insertar fut
            $sql3 = "INSERT INTO ee_informacion VALUES (null,$idSoli,$idTramite,$area,'$informacionSolicitada',SYSDATE(),'$observacion','');";
            $insertarAcceso = mysqli_query($db,$sql3);
            //conseguir ultimo acceso a la informacion para darle codigo de cargo
            $acceso = conseguirUltAcceso($db);
            $idAcceso = $acceso['idInformacion'];
            $codigoCargo = 'A'.$idAcceso;
            //actualizar el acceso a la infomacion con el codigo de cargo
            $sql4 = "UPDATE ee_informacion SET codigoCargo='$codigoCargo' where idInformacion=$idAcceso;";
            $actualizarAcceso = mysqli_query($db, $sql4);
            //darle datos actualizados del fut a la sesion
            $acceso = conseguirUltAcceso($db);
            $_SESSION['codigoCargo']= $acceso;
            //actualizar gerencia destino con el tramite
            $sql6 = "UPDATE ee_gerencia SET nTramitesTotal = (nTramitesTotal + 1) WHERE idGerencia=16;";
            $actualizarGerencia = mysqli_query($db,$sql6);
            //agregar operacion en su tabla
            $sql7 = "INSERT INTO ee_operacion VALUES (null,2,'Ingres?? un nuevo tramite = $idTramite acceso = $idAcceso',SYSDATE());";
            $insertarOperacion = mysqli_query($db, $sql7);
            header("Location: accesoCompleto.php");
	}else{
		$_SESSION["errores_entrada"] = $errores;
		if(isset($_GET['editar'])){
			header("Location: editar-entrada.php?id=".$_GET['editar']);
		}else{
			header("Location: tramiteAcceso.php");
		}
	}
}