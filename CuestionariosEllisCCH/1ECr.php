<?php include("seguridad.php");?>
<html>
	<head>
	<link href="Favicon.ico" type="image/x-icon" rel="shortcut icon" />
	 <!--[if lt IE 9]> 
	<script type="text/javascript"> 
	   document.createElement("nav"); 
	   document.createElement("header"); 
	   document.createElement("footer"); 
	   document.createElement("section"); 
	   document.createElement("article"); 
	   document.createElement("aside"); 
	   document.createElement("hgroup"); 
	</script> 
	<![endif]-->
		<title>Coordinaci&oacute;n General de Lenguas UNAM</title>
		<link rel="stylesheet" href="css/hugixR.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="20%" align="center" border="0" usemap="#CGLh"/></a>
<table border=0 width="100%"><tr><td align="center">
<map name="CGLh"> 
<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
</map>
 </table></div>
	</head>
	<body>
	<!--****************************Esta es la sección destinada a la barra del menú principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Resultados del Examen Diagn&oacute;stico Final 2013</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	
<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		<?php    
	
			include('abre_seguimiento.php'); //Abrimos la BD para actualizarla
			$Nombre=$_SESSION["user"];	//Tomo los valores de la sesión para actualizar los valores en mi BD
			$Clave=$_SESSION["pass"];
			$util=$_POST['util'];			
			$contri=$_POST['contri'];			
			$agrado=$_POST['agrado'];			
			$problem=$_POST['problema'];			
			$obs=$_POST['obs'];			
			$nombre=$_POST['nombre'];			
			$clave=$_POST['clave'];			
			$query = "update GruposP set Utilizo='$util', Contribuyo='$contri', Agrado='$agrado', Problema='$problem', Observaciones='$obs', Completo='Si' where Nombre = '$nombre' AND Contraseña='$clave' AND ClaveUnity='1EC'"; 
				$result = mysql_query($query) or die ("Tus datos no se encuentran registrados"); 
				?>
				</br></br></br><h1 align="center">Datos enviados correctamente</h1></br></br></br>				
				<u><a href="general.php">Regresar</a></u></br></br>				
				<u><a href="salir.php">Salir</a></br></br>
				<?
				include('cierra_seguimiento.php');		
?>
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2012. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Que no le digan y que no le cuenten, toda esta página fue diseñada en su totalidad por el Ingeniero Hugo Luna alias hugix4-->
</body>
</html>
