<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sub Gerencia de Tramite Documentario</title>
        <meta charset="utf-8">
        <!--viewport para hacer responsive design-->
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
        <!--CDN FONTAWESOME-->
        <script src="https://use.fontawesome.com/9fe761f0b1.js"></script>
        <link rel="stylesheet" href="assets/css/estilosFormulario.css">
        <script src="assets/js/departamentos.js"></script>
        <script src="assets/js/provincias.js"></script>
        <script src="assets/js/efectosFormulario.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="assets/img/Icono.ico" type="image/x-icon">
    </head>
    <body>

    <?php require_once 'includes/cabecera.php'; ?>

        <section>
            <!--formulario-->
            <form action="guardar-fut.php" method="POST" >
                <div class="contenedor">
                    <div class="titulo-contenedor">
                        <a href="index.php">
                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                        </a>
                        <h3>Formulario Único de Trámite (FUT)</h3>
                    </div>
                    <div class="saludo">
                        <img src="assets/img/escudo-marcona.png" alt="Escudo de Marcona">
                        <div class="presentacion">
                            <h3>
                                Señor:<br><br>ELMO FARES PACHECO JURADO<br>ALCALDE DE LA MUNICIPALIDAD DE MARCONA
                            </h3>
                        </div>
                    </div>
                    <div class="sumilla">
                        <label for="sumilla-textarea">1. Sumilla: </label>
                        <textarea name="sumilla-textarea" maxlength="100" id="sumilla-textarea"></textarea>
                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'sumilla') : ''; ?>
                    </div>
                    <div class="area">
                        <label for="cbxarea">2. Dependencia o funcionario responsable a quien se dirige: </label>
                        <select name="cbxarea" id="cbxarea">
                            <option value="0" selected>Seleccione...</option>
                        <?php
                            $gerencias = conseguirGerencias($db);
                            if(!empty($gerencias)):
                                while($gerencia=mysqli_fetch_assoc($gerencias)):
                        ?>
                            <option value="<?=$gerencia['idGerencia']?>"><?=$gerencia['nombre']?>(<?=$gerencia['iniciales']?>)</option>

                        <?php
                                endwhile;
                            endif;
                        ?>
                        
                        </select>
                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'area') : ''; ?>
                    </div>
                    <div class="datos-usuario">
                        <div class="formulario-usuario">
                            <div class="titulo-formulario-usuario">
                                <h4>3. Datos del solicitante</h4>
                            </div>
                            <div class="cuerpo-formulario-usuario">
                                <div class="nombreApellido">
                                    <div class="nombre">
                                        <label for="txtNombre">3.1. Nombres: </label>
                                        <input type="text" name="txtNombre" maxlength="75" id="txtNombre">
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>
                                    </div>
                                    <div class="apellido">
                                        <label for="txtApellido">3.2. Apellidos: </label>
                                        <input type="text" name="txtApellido" maxlength="75" id="txtApellido">
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'apellido') : ''; ?>
                                    </div>
                                </div>
                                <div class="documento-identidad">
                                    <div class="comboTipoDoc">
                                        <label for="cbxDoc">3.3. Tipo de Doc.</label>
                                        <select name="cbxDoc" id="cbxDoc">
                                            <option value="0">Seleccione...</option>
                                        <?php
                                            $tipoDoc = conseguirTipoDocs($db);
                                            if (!empty($tipoDoc)):
                                                while($tipoDocumento = mysqli_fetch_assoc($tipoDoc)):
                                        ?>
                                            <option value="<?=$tipoDocumento['idTipoDoc']?>"><?=$tipoDocumento['nombre']?></option>
                                        <?php
                                                endwhile;
                                            endif;
                                        ?>
                                        </select>
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'tipoDoc') : ''; ?>
                                    </div>
                                    <div class="txtDoc">
                                        <label for="txtNumDoc">3.3.1. Nº de Doc.</label>
                                        <input type="text" name="txtNumDoc" id="txtNumDoc" >
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'numDoc') : ''; ?>
                                    </div>
                                </div>
                                <div class="domicilio">
                                    <div class="comboTipoDom">
                                        <label for="cbxTipoDomicilio">3.4. Domicilio</label>
                                        <select name="cbxTipoDomicilio" id="cbxTipoDomicilio">
                                            <option value="0">Seleccione...</option>
                                            <option value="zona">Zona</option>
                                            <option value="aahh">A.A.H.H.</option>
                                            <option value="av">Avenida</option>
                                            <option value="calle">Calle</option>
                                            <option value="jr">Jiron</option>
                                            <option value="urb">Urbanización</option> 
                                        </select>
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'cbxTipoDomicilio') : ''; ?>
                                    </div>
                                    <div class="txtTipoDom">
                                        <input type="text" name="txtTipoDomicilio" >
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'txtTipoDomicilio') : ''; ?>
                                    </div>
                                    <div class="txtNum1">
                                        <label for="txtNumero1">-</label>
                                        <input type="text" name="txtNumero1" id="txtNumero1">
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'txtNumero1') : ''; ?>
                                    </div>
                                    <div class="txtNum2">
                                        <label for="txtNumero2" >#</label>
                                        <input type="text" name="txtNumero2" id="txtNumero2">
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'txtNumero2') : ''; ?>
                                    </div>
                                </div>
                                <div class="lugar">
                                    <div class="departamento">
                                        <label for="cbxDepartamento">3.5. Departamento</label>
                                        <select name="cbxDepartamento" id="cbxDepartamento" onchange="cambia_departamento()">
                                            <option value="0">Seleccione...</option>
                                            <option value="AMAZONAS">AMAZONAS</option>
                                            <option value="ANCASH">ANCASH</option>
                                            <option value="APURÍMAC">APURÍMAC</option>
                                            <option value="AREQUIPA">AREQUIPA</option>
                                            <option value="AYACUCHO">AYACUCHO</option>
                                            <option value="CAJAMARCA">CAJAMARCA</option>
                                            <option value="CUSCO">CUSCO</option>
                                            <option value="HUANCAVELICA">HUANCAVELICA</option>
                                            <option value="HUÁNUCO">HUÁNUCO</option>
                                            <option value="ICA">ICA</option>
                                            <option value="JUNIN">JUNIN</option>
                                            <option value="LA LIBERTAD">LA LIBERTAD</option>
                                            <option value="LAMBAYEQUE">LAMBAYEQUE</option>
                                            <option value="LIMA">LIMA</option>
                                            <option value="LORETO">LORETO</option>
                                            <option value="MADRE DE DIOS">MADRE DE DIOS</option>
                                            <option value="MOQUEGUA">MOQUEGUA</option>
                                            <option value="PASCO">PASCO</option>
                                            <option value="PIURA">PIURA</option>
                                            <option value="PUNO">PUNO</option>
                                            <option value="SAN MARTÍN">SAN MARTÍN</option>
                                            <option value="TACNA">TACNA</option>
                                            <option value="TUMBES">TUMBES</option>
                                            <option value="UCAYALI">UCAYALI</option>
                                        </select>
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'departamento') : ''; ?>
                                    </div>
                                    <div class="provincia">
                                        <label for="cbxProvincia">3.6. Provincia</label>
                                        <select name="cbxProvincia" id="cbxProvincia" onchange="cambia_provincia()">
                                            <option value="0">Seleccione...</option>
                                        </select>
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'provincia') : ''; ?>
                                    </div>
                                   <div class="distrito">
                                        <label for="cbxDistrito">3.7. Distrito</label>
                                        <select name="cbxDistrito" id="cbxDistrito" >
                                            <option value="0">Seleccione...</option>
                                        </select>
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'distrito') : ''; ?>
                                   </div>
                                    
                                </div>
                                <div class="datos-personales">
                                    <div class="telefono">
                                        <label for="txtTelefono">3.8. Teléfono</label>
                                        <input type="text" name="txtTelefono" id="txtTelefono">
                                    </div>
                                    <div class="celular">
                                        <label for="txtCelular">3.9. Celular</label>
                                        <input type="text" name="txtCelular" id="txtCelular">
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'celular') : ''; ?>
                                    </div>
                                    <div class="correo">
                                        <label for="txtCorreo">3.10. Correo Electrónico</label>
                                        <input type="email" name="txtCorreo" id="txtCorreo" txtCorreo>
                                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'correo') : ''; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fundamento-solicitud">
                        <label for="fundamento-solicitud-textarea">4. Fundamentación de la solicitud</label>
                        <textarea name="txtFundamentoSolicitud" maxlength="300" id="fundamento-solicitud-textarea"></textarea>
                        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'fundamento') : ''; ?>
                    </div>
                    <div class="documentos">
                        <label for="documentos-subir">5. Documentos Adjuntos</label>
                        <div class="files" id="files">
                            <input type="file" name="documentosSubir1" id="documentos-subir1">
                        </div>
                        <button id="btnDocumentos" >Agregar mas elementos</button>
                    </div>
                    <div class="boton">
                        <input type="submit" value="Tramitar">
                    </div>
                </div>
                <?php borrarErrores(); ?>
            </form>
        </section>






    <?php require_once 'includes/pie.php'; ?>