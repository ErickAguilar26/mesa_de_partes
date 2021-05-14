<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';
    require_once 'includes/helpers.php';
    $codigoCargo = isset($_POST['codigoCargo']) ? mysqli_real_escape_string($db, trim($_POST['codigoCargo'])) : false;
    $errores = array();
    //validando coidog cargo
    if(empty($codigoCargo)){
        $errores['codigoCargo'] = 'El codigo cargo esta vacio.';
    }
    else{
        if(!is_numeric(strpos($codigoCargo,"F"))){
            $errores['codigoCargo'] = 'Ingrese un codigo cargo correcto.'. strpos($codigoCargo,"F");
        }
        else{
            if(!is_string($codigoCargo)){
                $errores['codigoCargo'] = 'Ingresa un texto correcto.';
            }
            else{
                if(strlen($codigoCargo) > 20){
                    $errores['codigoCargo'] = 'El codigo cargo no deben pasar los 20 letras.';
                }
            }
        } 
    }

    if(count($errores) == 0){
        $fut = verificarFut($db, $codigoCargo);
        if(!empty($fut)){
            $_SESSION['codigoCargo'] = $fut;
            header('Location: seguimientoTramite.php');
        }
        else{
            $errores['codigoCargo'] = 'Ingrese un codigo cargo existente.';
            $_SESSION['error_login'] = $errores;
            header('Location: seguimiento.php');
        }
		
	}
    else{
        $_SESSION['error_login'] = $errores;
        header('Location: seguimiento.php');
    }
    
}