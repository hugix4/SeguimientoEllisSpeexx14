

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
	
			include('abre_seguimiento2.php'); //Abrimos la BD para actualizarla
			$uno=$_POST['uno'];
			$dos=$_POST['dos'];
			$tres=$_POST['tres'];
			$cuatro=$_POST['cuatro'];
			$cinco=$_POST['cinco'];
			$seis=$_POST['seis'];
			$siete=$_POST['siete'];
			$ocho=$_POST['ocho'];
			$nueve=$_POST['nueve'];
			$diez=$_POST['diez'];
			$once=$_POST['once'];
			$docea=$_POST['docea'];
			$doceb=$_POST['doceb'];
			$docec=$_POST['docec'];
			$trecea=$_POST['trecea'];
			$treceb=$_POST['treceb'];
			$trecec=$_POST['trecec'];
			$treced=$_POST['treced'];
			$catorcea=$_POST['catorcea'];
			$catorceb=$_POST['catorceb'];
			$catorcec=$_POST['catorcec'];
			$catorced=$_POST['catorced'];
			$catorcee=$_POST['catorcee'];
			$quincea=$_POST['quincea'];
			$quinceb=$_POST['quinceb'];
			$quincec=$_POST['quincec'];
			$quinced=$_POST['quinced'];
			$quincee=$_POST['quincee'];
			$dieciseisa=$_POST['dieciseisa'];
			$dieciseisb=$_POST['dieciseisb'];
			$dieciseisc=$_POST['dieciseisc'];
			$dieciseisd=$_POST['dieciseisd'];
			$dieciseise=$_POST['dieciseise'];
			$diecisietea=$_POST['diecisietea'];
			$diecisieteb=$_POST['diecisieteb'];
			$diecisietec=$_POST['diecisietec'];
			$diecisieted=$_POST['diecisieted'];
			$diecisietee=$_POST['diecisietee'];
			$diecisietef=$_POST['diecisietef'];
			$diecisieteg=$_POST['diecisieteg'];
			$dieciochoa=$_POST['dieciochoa'];
			$dieciochob=$_POST['dieciochob'];
			$dieciochoc=$_POST['dieciochoc'];
			$diecinueve=$_POST['diecinueve'];
			$veinte=$_POST['veinte'];
			$veintiuno=$_POST['veintiuno'];
			$veintidos=$_POST['veintidos'];
			$veintitres=$_POST['veintitres'];
			$veinticuatro=$_POST['veinticuatro'];
			$veinticinco=$_POST['veinticinco'];
			$veintiseis=$_POST['veintiseis'];
			$veintisiete=$_POST['veintisiete'];
			$veintiocho=$_POST['veintiocho'];
			$veintinueve=$_POST['veintinueve'];
			$treinta=$_POST['treinta'];
			$treintayuno=$_POST['treintayuno'];
			$treintaydos=$_POST['treintaydos'];
			$treintaytres=$_POST['treintaytres'];		
			$nombre=$_POST['nombre'];			
			$clave=$_POST['clave'];	
			$mes=$_POST['mes'];
			
			$query = "update CuestionarioSeguimiento set uno='$uno', dos='$dos', tres='$tres', cuatro='$cuatro', cinco='$cinco', seis='$seis', siete='$siete', ocho='$ocho', nueve='$nueve', diez='$diez', once='$once', docea='$docea', doceb='$doceb', docec='$docec', trecea='$trecea', treceb='$treceb', trecec='$trecec', treced='$treced', catorcea='$catorcea', catorceb='$catorceb', catorcec='$catorcec', catorced='$catorced', catorcee='$catorcee', quincea='$quincea', quinceb='$quinceb', quincec='$quincec', quinced='$quinced', quincee='$quincee', dieciseisa='$dieciseisa', dieciseisb='$dieciseisb', dieciseisc='$dieciseisc', dieciseisd='$dieciseisd', dieciseise='$dieciseise', diecisietea='$diecisietea', diecisieteb='$diecisieteb', diecisietec='$diecisietec', diecisieted='$diecisieted', diecisietee='$diecisietee', diecisietef='$diecisietef', diecisieteg='$diecisieteg', dieciochoa='$dieciochoa', dieciochob='$dieciochob', dieciochoc='$dieciochoc', diecinueve='$diecinueve', veinte='$veinte', veintiuno='$veintiuno', veintidos='$veintidos', veintitres='$veintitres', veinticuatro='$veinticuatro', veinticinco='$veinticinco', veintiseis='$veintiseis', veintisiete='$veintisiete', veintiocho='$veintiocho', veintinueve='$veintinueve', treinta='$treinta', treintayuno='$treintayuno', treintaydos='$treintaydos', treintaytres='$treintaytres', completo='Si' where Nombre = '$nombre' AND completo='No' AND Contraseña='$clave' AND cuestionario='$mes'"; 
				$result = mysql_query($query) or die ("Hubo un problema con los datos registrados, si el problema continua, contactanos en hugix4@live.com para informar de este problema"); 
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
