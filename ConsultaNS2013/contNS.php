<?php
session_start();
//Se verifica la contrase�a     
$Clave=$_POST['Contrase�a'];

include('abre_NS.php');   

    $query = "select * from $tabla where Contrase�a='$Clave' OR Mediateca='$Clave'"; 
    $result = mysql_query($query) or die ("Tus datos no se encuentran registrados"); 

while ($registro = mysql_fetch_array($result)){ 

if($registro['Contrase�a']==$Clave || $registro['Mediateca']==$Clave){
	//Usuario y contrase�a v�lidos
	//Crear variable de sesion
	$_SESSION["valido"]="1";
	$_SESSION["pass"]=$_POST["Contrase�a"];
	header("Location:ProfesoresNSr.html");
}else{
//Si no existe, ir a la p�gina de inicio
header("location:ProfesoresNS.html?errorusuario=si");
}
}
include('cierra_seguimiento.php');
?>