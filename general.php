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
						</br><b style="color: #000066;">Sistema de seguimiento de grupos piloto</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	
<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main" align='center'><!-- contenido principal y menus laterales -->				        		
	<!--============================Parte de despliegue de datos del usuario BD======================================================================-->	
		<?php
		$Nombre=$_SESSION["user"];
		$Clave=$_SESSION["pass"];
		?>
		</br>
		<h1>Bienvenido(a)<?php echo" ".$_SESSION["user"];?></h1> </br>
		<?php
		include('abre_seguimiento.php');  
		$query = "select distinct Nombre, Paterno, Materno, Plantel, Mail, Telefono, Turno, Grupos, Software, Contraseña from $tabla where Nombre = '$Nombre' AND Contraseña='$Clave' AND Unidad='Datos'";
		$result = mysql_query($query) or die (mysql_error()); 

		while ($registro = mysql_fetch_array($result)){ 

		if($registro['Contraseña']==$Clave && $registro['Nombre']==$Nombre){
			echo " 
<div align='center'> 
    <table border='0' width='70%' style='font-family: Verdana; font-size: 8pt' id='table1'> 
        <tr> 
            <td colspan='6'><h3 align='center'>Verifica que tus datos sean correctos</h3></td> 
        </tr> 
        <tr> 
            <td ><p align='right'><b>Nombre: </b></td> 
            <td ><p align='left'><input type='text' name='nombre' readonly='readonly' disabled='yes' size='30' value='".$registro['Nombre']."'></td> 
			<td colspan='1'><p align='right'><b>Apellido Paterno: </b></td> 
            <td ><p align='left'><input type='text' name='Paterno' readonly='readonly' disabled='yes' size='30' value='".$registro['Paterno']."'></td>
			<td colspan='1'><p align='right'><b>Apellido Materno: </b></td> 
			<td ><p align='left'><input type='text' name='Apm' readonly='readonly' disabled='yes' size='30' value='".$registro['Materno']."'></td> 
		</tr>
		<tr>
            
			<td ><p align='right'><b>Plantel: </b></td> 
            <td ><p align='left'><input type='text' name='grupo' readonly='readonly' disabled='yes' size='30' value='".$registro['Plantel']."'></td> 
			<td ><p align='right'><b>Mail: </b></td> 
            <td ><p align='left'><input type='text' name='grupo' readonly='readonly' disabled='yes' size='30' value='".$registro['Mail']."'></td> 
			<td ><p align='right'><b>Telefono: </b></td> 
            <td ><p align='left'><input type='text' name='grupo' readonly='readonly' disabled='yes' size='30' value='".$registro['Telefono']."'></td> 
        </tr> 	
		<tr>
            
			<td ><p align='right'><b>Turno: </b></td> 
            <td ><p align='left'><input type='text' name='grupo' readonly='readonly' disabled='yes' size='30' value='".$registro['Turno']."'></td> 
			<td ><p align='right'><b>Grupos: </b></td> 
            <td ><p align='left'><input type='text' name='grupo' readonly='readonly' disabled='yes' size='30' value='".$registro['Grupos']."'></td> 
			<td ><p align='right'><b>Software: </b></td> 
            <td ><p align='left'><input type='text' name='grupo' readonly='readonly' disabled='yes' size='30' value='".$registro['Software']."'></td> 
        </tr> 
		<tr> 
            <td colspan='6'><h5 align='center'>Si hay algún error, escribe un mail a hugix4@live.com indicando el error</h3></td> 
        </tr> 
    </table> 
</div> 
";
		}else{
		//Si no existe, ir a la página de inicio
		header("location:index.php?errorusuario=si");
		}
		}
		include('cierra_seguimiento.php');
		?>		
		
		<!--============================Parte de despliegue de datos del usuario BD======================================================================-->
		</br>
		<p align="center">A continuación se muestran las lecciones que se deben evaluar, por favor califíquelas al término de cada una.</p>
		</br>		
		<?php		
		include('abre_seguimiento.php');  
		$query = "select distinct Contraseña, Nombre, ClaveUnity, Unidad from $tabla where Nombre = '$Nombre' AND Contraseña='$Clave' AND Unidad<>'Datos' AND Completo='No'"; 
		$result = mysql_query($query) or die ("Tus datos no se encuentran registrados"); 
		while ($registro = mysql_fetch_array($result)){ 		
		if($registro['Contraseña']==$Clave && $registro['Nombre']==$Nombre){
			echo " 
		<div align='center'> 
		<table border='1' align='center' width='40%' style='font-family: Verdana; font-size: 8pt' id='table1'> 
        <tr>
			<td ><p align='center'><u><a href='Cuestionarios.html?CU=";echo $registro['ClaveUnity'];echo"'>"; echo $registro['Unidad']; echo "</a></u></p></td> 			
        </tr>  
		</table> 
		</div> 
		";
		}else{
		//Si no existe, ir a la página de inicio
		header("location:index.php?errorusuario=si");
		}
		}
		include('cierra_seguimiento.php');
		?>
		<!--============================Fin del despliegue de datos del usuario BD=====================================================================-->
		
		<br><br>				
		
		<?php	
		include('abre_seguimiento.php');
		//echo"<p align='center'>Por favor, llene el cuestionario correspondiente de los que se encuentran a continuación:<br/><br/>
		//<u><a href='mensual.php?mes=Febrero'>Reporte Febrero 2014</a></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
		//</p><br/>";
		//$mes="select distinct cuestionario from CuestionarioSeguimiento where cuestionario='Noviembre' && Nombre = '$Nombre' && Contraseña='$Clave' && Completo='No'";
		
		echo "<a href=mensualUpdt.php><font color='red'><u>Cuestionario Final</u></font></a><br/><br/>";
		
		echo "Hemos recibido satisfactoriamente los siguientes cuestionarios mensuales: ";
		$query = "select distinct Contraseña, Nombre, cuestionario from CuestionarioSeguimiento where Nombre = '$Nombre' && Contraseña='$Clave' && Completo='Si'"; 
		$result = mysql_query($query) or die (mysql_error()); 
		while ($registro = mysql_fetch_array($result)){ 
		if($registro['Contraseña']==$Clave && $registro['Nombre']==$Nombre){
			echo "<div align='center'> 
			<table border='1' align='center' width='10%' style='font-family: Verdana; font-size: 8pt' id='meses'> 
			<tr>
				<td valign='middle' line-height='300px'><p align='center'>".$registro['cuestionario']."</p></td> 			
			</tr>  
			</table>
			</div> 
			";
		}else{
		//Si no existe, ir a la página de inicio
		header("location:index.php?errorusuario=si");
		}
		}
			/*$conteo="SELECT COUNT(Distinct cuestionario) FROM CuestionarioSeguimiento where Nombre = '$Nombre' && Contraseña='$Clave' && Completo='Si'";
			$rconteo = mysql_query($conteo) or die (mysql_error());
			while ($num_cuestionario = mysql_fetch_array($rconteo)){
			echo "Haz realizado ".$num_cuestionario[0]." de 12 cuestionarios posibles";}*/
		include('cierra_seguimiento.php');
		?>
		
		
		<br/><u><a href="salir.php">Salir</a></br></br>
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