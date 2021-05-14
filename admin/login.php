<?php

// Recoger datos del formulario
if(isset($_POST)){
	// Iniciar la sesión y la conexión a bd
    require_once 'includes/conexion.php';

    // Borrar error antiguo
	/* if(isset($_SESSION['error_login'])){
		session_unset($_SESSION['error_login']);
	}
 */
    $usuario = isset($_POST['txtUsuario']) ? mysqli_real_escape_string($db, trim($_POST['txtUsuario'])) : false;
    $password = isset($_POST['txtContra']) ? mysqli_real_escape_string($db, $_POST['txtContra']) : false;
	
    $errores = array();

    //validando usuario
    if(empty($usuario)){
        $errores['usuario'] = 'El usuario esta vacio.';
    }
    else{
        if(!is_string($usuario)){
            $errores['usuario'] = 'Ingresa un texto correcto.';
        }
        else{
            if(strlen($usuario) > 45){
                $errores['usuario'] = 'El usuario no deben pasar las 50 letras.';
            }
        }
    }

	if(empty($password)){
		$errores['pass'] = 'La contraseña está vacia.';
	}
	else{
		if(!is_string($password)){
            $errores['pass'] = 'Ingresa una contraseña correcto.';
        }
        else{
            if(strlen($password) > 20){
                $errores['pass'] = 'La contraseña no debe pasar de 20 carácteres';
            }
        }
	}
	
	if(count($errores) == 0){
		$sql = "SELECT * FROM ee_empleado WHERE usuario = '$usuario'";
		$loginUsuario = mysqli_query($db, $sql);
		
		if($loginUsuario && mysqli_num_rows($loginUsuario) == 1){
			$usuario = mysqli_fetch_assoc($loginUsuario);
			
			// Comprobar la contraseña
			//$verify = password_verify($password, $usuario['password']);
            if($password == $usuario['contraseña']){
                $claseUsuario = array();
                $claseUsuario['idEmpleado'] = $usuario['idEmpleado'];
                $claseUsuario['nombresCompletos'] = $usuario['nombres'] . ' ' . $usuario['apellidos'];
                $claseUsuario['gerenciaID'] = $usuario['idGerencia'];
                $claseUsuario['usuario'] = $usuario['usuario'];
                $claseUsuario['contrasena'] = $usuario['contraseña'];
                $tipoEmpleado = $usuario['idTipoEmpleado'];
                $claseUsuario['tipoEmpleadoID'] = $tipoEmpleado;
                $claseUsuario['correo'] = $usuario['correo'];
                $_SESSION['claseUsuarioSesion'] = $claseUsuario;

                switch($tipoEmpleado){
                    case 4:
                        header('Location: sistemaEmpleado.php');
                        break;
                    case 3:
                        header('Location: sistemaSubgerente.php');
                        break;
                    case 2:
                        header('Location: sistemaAdmin.php');
                        break;
                    case 1:
                        header('Location: sistemaRoot.php');
                        break;
                    default:
                        header('Location: index.php');
                }
            }


            /*if($verify){
                $_SESSION['idEmpleado'] = $usuario['idEmpleado'];
                $_SESSION['nombresCompletos'] = $usuario['nombres'] . ' ' . $usuario['apellidos'];
                $_SESSION['gerenciaID'] = $usuario['idGerencia'];
                $_SESSION['usuario'] = $usuario['usuario'];
                $_SESSION['contrasena'] = $usuario['contraseña'];
                $_SESSION['tipoEmpleadoID'] = $usuario['idTipoEmpleado'];
                $_SESSION['correo'] = $usuario['correo'];
                header('Location: sistemaEmpleado.html');

            }*/ else{

                $errores['usuario'] = 'Usuario incorrecto!!.';
                // Redirigir al index.php
                header('Location: index.php');

            }

		}else{
			// mensaje de error
			$errores['pass'] = 'Contraseña incorrecto!!.';
            // Redirigir al index.php
            header('Location: index.php');
		}
	}
    else{
        $_SESSION['error_login'] = $errores;
        header('Location: index.php');

    }
    
}

