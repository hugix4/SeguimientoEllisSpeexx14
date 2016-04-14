<?php include("seguridad.php");?>
<html>
	<head>
		<title>CGL UNAM</title>
	</head>
	<body>
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Inscripción para el Foro de Mediatecas y Laboratorios Multimedia 2013</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		</br><p class="eval" style="color: #000;">Favor de ingresar sus datos de manera veraz, ya que estos aparecerán en la constancia que se le expida al final del foro.
		</br>
		</p>
	</br>
	<form method='POST' action="ForoB.html" onsubmit="return Valida2()" align='center'>
		<label for="ApPat">*Apellido Paterno:</label>
		<input type="text" id="ApPat"></input>
		&nbsp;&nbsp;<label for="ApMat">*Apellido Materno:</label>
		<input type="text" id="ApMat"></input>
		&nbsp;&nbsp;<label for="Nom">*Nombre(s):</label>
		<input type="text" id="Nom"></input>
		</br></br></br>
		<label for="">*Mail:</label>
		<input type="text" id="mail"></input>		
		&nbsp;&nbsp;<label for="tel">Teléfono:</label>
		<input type="text" id="tel"></input>
		</br></br></br>
		<label for="Plantel">*Plantel:</label>
		<select type="list" id="Plantel">
			<option></option>
			<option value="ENP1">ENP1</option>
			<option value="ENP2">ENP2</option>
			<option value="ENP3">ENP3</option>
			<option value="ENP4">ENP4</option>
			<option value="ENP5">ENP5</option>
			<option value="ENP6">ENP6</option>
			<option value="ENP7">ENP7</option>
			<option value="ENP8">ENP8</option>
			<option value="ENP9">ENP9</option>
			<option value="CCH Azcapotzalco">CCH Azcapotzalco</option>
			<option value="CCH Naucalpan">CCH Naucalpan</option>
			<option value="CCH Oriente">CCH Oriente</option>
			<option value="CCH Sur">CCH Sur</option>
			<option value="CCH Vallejo">CCH Vallejo</option>
			<option value="Otro">Otro</option>		
		</select>
		&nbsp;&nbsp;<label for="Turno">*Turno:</label>
		<select type="list" id="Turno">
			<option></option>
			<option value="Matutino">Matutino</option>
			<option value="Vespertino">Vespertino</option>
			<option value="Ambos">Ambos</option>		
		</select>
		<input name="buttosky" type="button" onClick="sms()" value="Oa"/>
		</br></br>
		<p align="center"><input type="submit" value="Aceptar"></input>
		</p>
	</form>
	
	<FORM>

<input name="button2" type="button" 
onclick='alert("ESTA ES EL ALERTA.")' value="Click Aquí para ver el ALERTA" />
</FORM>
						
						</br></br>
						
						
						
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2013. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Que no le digan y que no le cuenten, toda esta página fue diseñada en su totalidad por el Ingeniero Hugo Luna alias hugix-->

		<br><br>
		<a href="general.php">Atrás</a>
		<a href="reporte.php">Actualizar reporte quincenal</a>	
		<h1>Por favor rellena los campos que correspondan a tus actividades realizadas en este periodo</h1>
		<br>
		<br><br>
		<a href="general.php">Atrás</a>
		<a href="mensual.php">Hacer reporte mensual</a>
	</body>
</html>
		
