<?php
session_start();
//Se verifica el usuario y su contrase�a     
$Nombre = $_POST['Nombre']; 
$Clave=$_POST['Contrase�a'];

include('abre_seguimiento.php');   

    $query = "select * from $tabla where Nombre = '$Nombre' AND Contrase�a='$Clave'"; 
    $result = mysql_query($query) or die (mysql_error()); 

$registro = mysql_fetch_array($result); 

if($Nombre=='Seguimiento' && $Clave=='UNAMcgl2013'){	
	//Si no existe, ir a la p�gina de inicio
	$_SESSION["valido"]="1";
	$_SESSION["user"]=$_POST["Nombre"];
	$_SESSION["pass"]=$_POST["Contrase�a"];
header('Location:datos.php');
}else if($registro['Contrase�a']==$Clave && $registro['Nombre']==$Nombre){
	//Usuario y contrase�a v�lidos
	//Crear variable de sesion
	$_SESSION["valido"]="1";
	$_SESSION["user"]=$_POST["Nombre"];
	$_SESSION["pass"]=$_POST["Contrase�a"];
	header("Location:general.php");
}else{
//Si no existe, ir a la p�gina de inicio
header('Location:piloto.php?errorusuario=si');
}
include('cierra_seguimiento.php');
?>