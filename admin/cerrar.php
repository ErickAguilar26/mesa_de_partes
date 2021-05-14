<?php
session_start();

if(isset($_SESSION['claseUsuarioSesion'])){
	session_destroy();
}

header("Location: index.php");
