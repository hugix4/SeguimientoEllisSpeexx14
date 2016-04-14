<?php
//inicio la sesión
session_start();
//comprueba que el usuario sea válido
if($_SESSION["valido"]!="1"){
	//si no existe, se dirige a la página de inicio 
	header("Location:piloto.php");
	//salimos del script
	exit();
}
?>