<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    require_once 'includes/helpers.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sub Gerencia de Tramite Documentario</title>
        <meta charset="utf-8">
        <!--viewport para hacer responsive design-->
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
        <!--CDN FONTAWESOME-->
        <script src="https://use.fontawesome.com/9fe761f0b1.js"></script>
        <link rel="stylesheet" href="assets/css/estilosLogin.css">
        <link rel="shortcut icon" href="../assets/img/Icono.ico" type="image/x-icon">
    </head>
    <body>

    <?php require_once 'includes/cabecera.php'; ?>

    <section>
        <form action="login.php" method="POST">
            <div class="contenedor">
                <h2>LOGEATE</h2>
                <label for="txtUsuario">Usuario</label>
                <input type="text" name="txtUsuario" id="txtUsuario">
                <?php echo isset($_SESSION['error_login']) ? mostrarError($_SESSION['error_login'], 'usuario') : ''; ?>
                <label for="txtContra">Contraseña</label>
                <input type="password" name="txtContra" id="txtContra">
                <?php echo isset($_SESSION['error_login']) ? mostrarError($_SESSION['error_login'], 'pass') : ''; ?>
                <button>INGRESAR</button>
            </div>
        </form>
        <?php borrarErrores(); ?>
    </section>

    <?php require_once 'includes/pie.php'; ?>