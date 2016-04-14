<!doctype html>

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
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="100%" align="center" border="0" usemap="#CGLh"/></a>
<table border=0 width="100%"><tr><td align="center">
<map name="CGLh"> 
<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
</map>

 </table></div>
	 
	 

	 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#boton").click(function (){ 
				if( !$("#Cuestionario input[name='uno']:radio").is(':checked') || !$("#Cuestionario input[name='dos']:radio").is(':checked') || !$("#Cuestionario input[name='tres']:radio").is(':checked') || !$("#Cuestionario input[name='cuatro']:radio").is(':checked') || !$("#Cuestionario input[name='cinco']:radio").is(':checked') || !$("#Cuestionario input[name='seis']:radio").is(':checked') || !$("#Cuestionario input[name='siete']:radio").is(':checked') || !$("#Cuestionario input[name='ocho']:radio").is(':checked') || !$("#Cuestionario input[name='nueve']:radio").is(':checked') || !$("#Cuestionario input[name='diez']:radio").is(':checked')){
					alert("Faltan preguntas por contestar");
				}else				
					$("#Cuestionario").submit();
				});
			});
		</script> 
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
		
		<form id="Cuestionario" action="rdioResult.php" method="POST">
			<br><h1>Reporte Mensual</h1><br>
			<label for="uno">1.¿Los diálogos son claros y fluidos para el nivel de lengua de los alumnos?:</label><br/>
			<input type="radio" id="uno" name="uno" value="Siempre">Siempre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="uno" name="uno" value="A veces">A veces&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="uno" name="uno" value="Nunca">Nunca<br><br/>
			<label for="dos">2.¿Los niveles de la lengua que maneja el software se adecúan a los conocimientos de los alumnos?:</label><br/>
			<input type="radio" id="dos" name="dos" value="Siempre">Siempre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="dos" name="dos" value="A veces">A veces&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="dos" name="dos" value="Nunca">Nunca<br><br/>
		
			<label for="tres">3.¿El vocabulario utilizado es adecuado para la edad de los alumnos?:</label><br/>
			<input type="radio" id="tres" name="tres" value="Siempre">Siempre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="tres" name="tres" value="A veces">A veces&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="tres" name="tres" value="Nunca">Nunca<br><br/>
		
			<label for="cuatro">4.¿La retroalimentación de los ejercicios o prácticas realizadas es útil?:</label><br/>
			<input type="radio" id="cuatro" name="cuatro" value="Siempre">Siempre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="cuatro" name="cuatro" value="A veces">A veces&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="cuatro" name="cuatro" value="Nunca">Nunca<br><br/>
		
			<label for="cinco">5.¿El contexto en el que se desarrollan los ejercicios corresponde a la edad de los alumnos?:</label><br/>
			<input type="radio" id="cinco" name="cinco" value="Siempre">Siempre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="cinco" name="cinco" value="A veces">A veces&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="cinco" name="cinco" value="Nunca">Nunca<br><br/>		
		
			<label for="seis">6.¿Los ejercicios de producción escrita son pertinentes para los alumnos?:</label><br/>
			<input type="radio" id="seis" name="seis" value="Siempre">Siempre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="seis" name="seis" value="A veces">A veces&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="seis" name="seis" value="Nunca">Nunca&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="seis" name="seis" value="No los hay">No los hay<br><br/>
		
			<label for="siete">7.¿Los ejercicios de producción oral son pertinentes para los alumnos?:</label><br/>
			<input type="radio" id="siete" name="siete" value="Siempre">Siempre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="siete" name="siete" value="A veces">A veces&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="siete" name="siete" value="Nunca">Nunca&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="siete" name="siete" value="No los hay">No los hay<br><br/>
		
			<label for="ocho">8.¿Los ejercicios de comprensión auditiva son pertinentes para los alumnos?:</label><br/>
			<input type="radio" id="ocho" name="ocho" value="Siempre">Siempre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="ocho" name="ocho" value="A veces">A veces&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="ocho" name="ocho" value="Nunca">Nunca&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="ocho" name="ocho" value="No los hay">No los hay<br><br/>
		
			<label for="nueve">9.¿Los ejercicios de comprensión  de lectura son pertinentes para los alumnos?:</label><br/>
			<input type="radio" id="nueve" name="nueve" value="Siempre">Siempre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="nueve" name="nueve" value="A veces">A veces&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="nueve" name="nueve" value="Nunca">Nunca&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="nueve" name="nueve" value="No los hay">No los hay<br><br/>
		
			<label for="diez">10.¿Utilizó ejercicios del software adicionales a los previamente acordados?:</label><br/>
			<input type="radio" id="diez" name="diez" value="Si">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="diez" name="diez" value="No">No
		<br/><br/>Agradecemos su participación<br/><br/>
			 <input type="button" id="boton" value="Enviar">
			<br/>
			<br/>
			<br/>
		</form>	
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




		
	</body>
</html>