<?php

if(!isset($_SESSION)){
	session_start();
}

if(!isset($_SESSION['codigoCargo'])){
	header("Location: seguimiento.php");
}