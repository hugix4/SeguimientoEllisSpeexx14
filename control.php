<?php
session_start();
//Se verifica el usuario y su contraseña     
$Nombre = $_POST['Nombre']; 
$Clave=$_POST['Contraseña'];

include('abre_seguimiento.php');   

    $query = "select * from $tabla where Nombre = '$Nombre' AND Contraseña='$Clave'"; 
    $result = mysql_query($query) or die (mysql_error()); 

$registro = mysql_fetch_array($result); 

if($Nombre=='Seguimiento' && $Clave=='UNAMcgl2013'){	
	//Si no existe, ir a la página de inicio
	$_SESSION["valido"]="1";
	$_SESSION["user"]=$_POST["Nombre"];
	$_SESSION["pass"]=$_POST["Contraseña"];
header('Location:datos.php');
}else if($registro['Contraseña']==$Clave && $registro['Nombre']==$Nombre){
	//Usuario y contraseña válidos
	//Crear variable de sesion
	$_SESSION["valido"]="1";
	$_SESSION["user"]=$_POST["Nombre"];
	$_SESSION["pass"]=$_POST["Contraseña"];
	header("Location:general.php");
}else{
//Si no existe, ir a la página de inicio
header('Location:piloto.php?errorusuario=si');
}
include('cierra_seguimiento.php');
?>