<?php
session_start();
//Se verifica la contraseña     
$Clave=$_POST['Contraseña'];

include('abre_NSe.php');   

    $query = "select * from $tabla where Clave='$Clave' OR Mediateca='$Clave'"; 
    $result = mysql_query($query) or die ("Tus datos no se encuentran registrados"); 

while ($registro = mysql_fetch_array($result)){ 

if($registro['Contraseña']==$Clave || $registro['Mediateca']==$Clave){
	//Usuario y contraseña válidos
	//Crear variable de sesion
	$_SESSION["valido"]="1";
	$_SESSION["pass"]=$_POST["Contraseña"];
	header("Location:ProfesoresNSenp.html");
}else{
//Si no existe, ir a la página de inicio
header("location:ProfesoresNS.html?errorusuario=si");
}
}
include('cierra_seguimiento.php');
?>