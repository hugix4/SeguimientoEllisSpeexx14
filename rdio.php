<?php 
					// Actualizamos en funcion del id que recibimos 					 
					$Uno = $_POST['uno']; 
					$Dos = $_POST['dos']; 
					$Tres = $_POST['tres']; 
					$Cuatro = $_POST['cuatro']; 
					$Cinco = $_POST['cinco']; 
					$Seis= $_POST['seis']; 
					$Siete = $_POST['siete']; 
					$Ocho = $_POST['ocho']; 
					$Nueve = $_POST['nueve']; 
					$Diez = $_POST['diez']; 
										
					include('Foroconexion.php');
					echo "El valor de uno es: $Uno";
					echo" $sSQL=Insert into $tabla (Nombre,Paterno,Materno,Mail,Tel,Participacion,Cargo,Plantel,Turno) values ('$Uno','$Dos','$Tres','$Cuatro','$Cinco', '$Seis', '$Siete','$Ocho','$Nueve','$Diez')"; 
					
					
?> 	