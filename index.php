<?php
    if(isset($_SESSION['codigoCargo'])){
        session_destroy();
    }
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
        <link rel="stylesheet" href="assets/css/estilos.css">
        <link rel="shortcut icon" href="assets/img/Icono.ico" type="image/x-icon">
    </head>
    <body>

    <?php require_once 'includes/cabecera.php'; ?>

    <section class="seccion">
        <div class="contenedor">
            <div class="aviso">
                <h3>Si es la primera vez que visitas este sitio, te recomendamos leer: <a href="#">Preguntas Frecuentes</a>.</h3>
            </div>
            <div class="opciones">
                <a href="tramiteFut.php">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <h5>TRÁMITE FUT</h5>
                </a>
                <a href="seguimiento.php">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <h5>SEGUIMIENTO FUT</h5>
                </a>
                <a href="tramiteAcceso.php">
                    <i class="fa fa-file-text" aria-hidden="true"></i>
                    <h5>ACCESO A LA INFORMACIÓN</h5>
                </a>
                <a href="contactanos.php">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <h5>SEGUIMIENTO ACCESO</h5>
                </a>
            </div>
        </div>
    </section>



    <?php require_once 'includes/pie.php'; ?>