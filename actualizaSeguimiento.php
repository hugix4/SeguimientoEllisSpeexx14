======== actualiza.php 
<html> 
<head> 
<title>Actualizacion completada.</title> 
<META name='robot' content='noindex, nofollow'> 
</head> 
<body> 
<?php 
// Actualizamos en funcion del id que recibimos 


echo 
$Cuenta = $_POST['Cuenta']; 
$inscrito = $_POST['inscrito']; 
$mail = $_POST['mail'];
$mail1 = $_POST['mail1'];
$tel = $_POST['tel'];
$tel1 = $_POST['tel1'];
$dom = $_POST['dom'];

include('abre_conexion.php');
/*echo "</br>La siguiente debiera ser la cuenta $Cuenta </br>";
echo "La siguiente debiera ser la inscripcion $inscrito  </br>";
echo "La siguiente debiera ser la tabla $tabla  </br>";
echo "La siguiente debiera ser la Mail $mail  </br>";
echo "La siguiente debiera ser la inscripcion $mail1  </br>";
echo "</br>La siguiente debiera ser la cuenta $tel </br>";
echo "La siguiente debiera ser la tabla $tel1  </br>";
echo "La siguiente debiera ser la Mail $dom  </br>";

echo "La sentencia de ejecución sql es: Update $tabla Set Inscrito='$inscrito', Mail='$mail',Mail1='$mail1', Tel='$tel', Tel1='$tel1', Dom='$dom' where Cuenta='$Cuenta' and Inscrito='--'  </br>";*/

$sSQL="Update $tabla Set Inscrito='$inscrito', Mail='$mail',Mail1='$mail1', Tel='$tel', Tel1='$tel1', Dom='$dom' where Cuenta='$Cuenta' and Inscrito='--'"; 
mysql_query($sSQL) or die("Ya te encuentras inscrito, mucha suerte"); 
include('cierra_seguimiento.php');   
echo " 
<p>Tus datos han sido registrados, pronto recibirás un mail de confirmación</p> 
<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p> 
<p><a href='javascript:history.go(-2)'>INICIO</a></p> 
"; 
?> 
</body> 
</html>