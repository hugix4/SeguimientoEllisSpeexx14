<?php 
					// Actualizamos en funcion del id que recibimos 					 
					echo $_POST['un1'];
					$Uno = $_POST['un1']; 
					$Dos = $_POST['do2']; 
					$Tres = $_POST['tr3']; 
					$Cuatro = $_POST['cu4']; 
					$Cinco = $_POST['ci5']; 
					$Seis= $_POST['se6']; 
					$Siete = $_POST['si7']; 
					$Ocho = $_POST['oc8']; 
					$Nueve = $_POST['nu9']; 
					$Diez = $_POST['di10']; 
										
					include('Foroconexion.php');
					echo "El valor de uno es: $Uno";
					echo" $sSQL=Insert into $tabla (Nombre,Paterno,Materno,Mail,Tel,Participacion,Cargo,Plantel,Turno) values ('$Uno','$Dos','$Tres','$Cuatro','$Cinco', '$Seis', '$Siete','$Ocho','$Nueve','$Diez')"; 
					
					
?> 	