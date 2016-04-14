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
						</br><b style="color: #000066;">Cuestionario grupos piloto 2014</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	
<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		<?php    
	
			include('abre_seguimiento2.php'); //Abrimos la BD para actualizarla
			$p1=$_POST['p1'];
			$p2=$_POST['p2'];
			$p3=$_POST['p3'];
			$p4=$_POST['p4'];
			$p5=$_POST['p5'];
			$p6=$_POST['p6'];
			$p7=$_POST['p7'];
			$p8=$_POST['p8'];
			$p9=$_POST['p9'];
			$p10=$_POST['p10'];
			$p11=$_POST['p11'];
			$p12=$_POST['p12'];
			$p13=$_POST['p13'];
			$pa14=$_POST['pa14'];
			$pb14=$_POST['pb14'];
			$pc14=$_POST['pc14'];
			$pd14=$_POST['pd14'];
			$pa15=$_POST['pa15'];
			$pb15=$_POST['pb15'];
			$pc15=$_POST['pc15'];
			$pd15=$_POST['pd15'];
			$pa16=$_POST['pa16'];
			$pb16=$_POST['pb16'];
			$pc16=$_POST['pc16'];
			$pd16=$_POST['pd16'];
			$pe16=$_POST['pe16'];
			$pa17=$_POST['pa17'];
			$pb17=$_POST['pb17'];
			$pc17=$_POST['pc17'];
			$pd17=$_POST['pd17'];
			$pe17=$_POST['pe17'];
			$pa18=$_POST['pa18'];
			$pb18=$_POST['pb18'];
			$pc18=$_POST['pc18'];
			$pd18=$_POST['pd18'];
			$pe18=$_POST['pe18'];
			$pa19=$_POST['pa19'];
			$pb19=$_POST['pb19'];
			$pc19=$_POST['pc19'];
			$pd19=$_POST['pd19'];
			$pe19=$_POST['pe19'];
			$pf19=$_POST['pf19'];
			$pg19=$_POST['pg19'];
			$pa20=$_POST['pa20'];
			$pb20=$_POST['pb20'];
			$pc20=$_POST['pc20'];
			$pd20=$_POST['pd20'];
			$p21=$_POST['p21'];
			$p22=$_POST['p22'];
			$p23=$_POST['p23'];
			$pa24=$_POST['pa24'];
			$pb24=$_POST['pb24'];
			$pc24=$_POST['pc24'];
			$pd24=$_POST['pd24'];
			$p25=$_POST['p25'];
			$p26=$_POST['p26'];
			$p27=$_POST['p27'];
			$p28=$_POST['p28'];
			$p29=$_POST['p29'];
			$p30=$_POST['p30'];
			$p31=$_POST['p31'];
			$p32=$_POST['p32'];
			$p33=$_POST['p33'];
			$p34=$_POST['p34'];
			$p35=$_POST['p35'];
			$p36=$_POST['p36'];
			$p37=$_POST['p37'];
			$p38=$_POST['p38'];
			$p39=$_POST['p39'];
			$pa40=$_POST['pa40'];
			$pb40=$_POST['pb40'];
			$pc40=$_POST['pc40'];
			$pd40=$_POST['pd40'];
			$pe40=$_POST['pe40'];
			$pf40=$_POST['pf40'];
			$p41=$_POST['p41'];
			$p42=$_POST['p42'];
			$p43=$_POST['p43'];
			$p44=$_POST['p44'];
			$p45=$_POST['p45'];
			$p46=$_POST['p46'];
			$p47=$_POST['p47'];
			$p48=$_POST['p48'];
			$p49=$_POST['p49'];
			$p50=$_POST['p50'];
			$p51=$_POST['p51'];
			$p52=$_POST['p52'];
			$p53=$_POST['p53'];
			$pa54=$_POST['pa54'];
			$pb54=$_POST['pb54'];
			$pc54=$_POST['pc54'];
			$pd54=$_POST['pd54'];
			$pe54=$_POST['pe54'];
			$pf54=$_POST['pf54'];
			$pa55=$_POST['pa55'];
			$pb55=$_POST['pb55'];
			$pc55=$_POST['pc55'];
			$pd55=$_POST['pd55'];			$p21x=$_POST['p21x'];
			$p24x=$_POST['p24x'];
			$p40x=$_POST['p40x'];
			$p45x=$_POST['p45x'];
			$p46x=$_POST['p46x'];
			$p47x=$_POST['p47x'];
			$p48x=$_POST['p48x'];
			$p49x=$_POST['p49x'];
			$p50x=$_POST['p50x'];
			$p51x=$_POST['p51x'];
			$p53x=$_POST['p53x'];			$p56=$_POST['p56'];
			$nombre=$_POST['nombre'];
			$clave=$_POST['clave'];	
$query = "update CuestionarioFinal set p1='$p1', p2='$p2', p3='$p3', p4='$p4', p5='$p5', p6='$p6', p7='$p7', p8='$p8', p9='$p9', p10='$p10', p11='$p11', p12='$p12', p13='$p13',pa14='$pa14', pb14='$pb14', pc14='$pc14', pd14='$pd14', pa15='$pa15', pb15='$pb15', pc15='$pc15', pd15='$pd15', pa16='$pa16', pb16='$pb16', pc16='$pc16', pd16='$pd16', pe16='$pe16', pa17='$pa17', pb17='$pb17', pc17='$pc17', pd17='$pd17', pe17='$pe17', pa18='$pa18', pb18='$pb18', pc18='$pc18', pd18='$pd18', pe18='$pe18', pa19='$pa19', pb19='$pb19', pc19='$pc19', pd19='$pd19', pe19='$pe19', pf19='$pf19', pg19='$pg19', pa20='$pa20', pb20='$pb20', pc20='$pc20', pd20='$pd20', p21='$p21', p22='$p22', p23='$p23', pa24='$pa24', pb24='$pb24', pc24='$pc24', pd24='$pd24', p25='$p25', p26='$p26', p27='$p27', p28='$p28', p29='$p29', p30='$p30', p31='$p31', p32='$p32', p33='$p33', p34='$p34', p35='$p35', p36='$p36', p37='$p37', p38='$p38', p39='$p39', pa40='$pa40', pb40='$pb40', pc40='$pc40', pd40='$pd40', pe40='$pe40', pf40='$pf40', p41='$p41', p42='$p42', p43='$p43', p44='$p44', p45='$p45', p46='$p46', p47='$p47', p48='$p48', p49='$p49', p50='$p50', p51='$p51', p52='$p52', p53='$p53', pa54='$pa54', pb54='$pb54', pc54='$pc54', pd54='$pd54', pe54='$pe54', pf54='$pf54', pa55='$pa55', pb55='$pb55', pc55='$pc55', pd55='$pd55', px21='$p21x', px24='$p24x', px40='$p40x', px45='$p45x', px46='$p46x', px47='$p47x', px48='$p48x', px49='$p49x', px50='$p50x', px51='$p51x', px53='$p53x', Completo='S', Comentarios='$p56' where Nombre = '$nombre' AND Completo='N' AND Contra='$clave'";
								
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
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2014. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Que no le digan y que no le cuenten, toda esta página fue diseñada en su totalidad por el Ingeniero Hugo Luna alias hugix4-->
</body>
</html>
