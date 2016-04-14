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
	 
	 

	 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#boton").click(function (){ 
				if( !$("#Cuestionario input[name='uno']:radio").is(':checked') || !$("#Cuestionario input[name='dos']:radio").is(':checked') || !$("#Cuestionario input[name='tres']:radio").is(':checked') || !$("#Cuestionario input[name='cuatro']:radio").is(':checked') || !$("#Cuestionario input[name='cinco']:radio").is(':checked') || !$("#Cuestionario input[name='seis']:radio").is(':checked') || !$("#Cuestionario input[name='siete']:radio").is(':checked') || !$("#Cuestionario input[name='ocho']:radio").is(':checked') || !$("#Cuestionario input[name='nueve']:radio").is(':checked') || !$("#Cuestionario input[name='diez']:radio").is(':checked') || !$("#Cuestionario input[name='once']:radio").is(':checked') || !$("#Cuestionario input[name='diecinueve']:radio").is(':checked') || !$("#Cuestionario input[name='veinte']:radio").is(':checked') || !$("#Cuestionario input[name='veintiuno']:radio").is(':checked') || !$("#Cuestionario input[name='veintidos']:radio").is(':checked') || !$("#Cuestionario input[name='veintitres']:radio").is(':checked') || !$("#Cuestionario input[name='veinticuatro']:radio").is(':checked') || !$("#Cuestionario input[name='veinticinco']:radio").is(':checked') || !$("#Cuestionario input[name='veintiseis']:radio").is(':checked') || !$("#Cuestionario input[name='veintisiete']:radio").is(':checked') || !$("#Cuestionario input[name='veintiocho']:radio").is(':checked') || !$("#Cuestionario input[name='veintinueve']:radio").is(':checked') || !$("#Cuestionario input[name='treinta']:radio").is(':checked') || !$("#Cuestionario input[name='treintayuno']:radio").is(':checked') || !$("#Cuestionario input[name='treintaydos']:radio").is(':checked') || !$("#Cuestionario input.uno:checkbox").is(':checked')|| !$("#Cuestionario input.dos:checkbox").is(':checked')|| !$("#Cuestionario input.tres:checkbox").is(':checked')|| !$("#Cuestionario input.cuatro:checkbox").is(':checked')|| !$("#Cuestionario input.cinco:checkbox").is(':checked')|| !$("#Cuestionario input.seis:checkbox").is(':checked')|| !$("#Cuestionario input.siete:checkbox").is(':checked')){
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
					<?php 
					$mes = $_GET['mes']; 
					?>
					</br><b style='color: #000066;'>Reporte de seguimiento de los grupos piloto del mes de <?php echo($mes);?></b>					
					
																
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	
<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main" align='center'><!-- contenido principal y menus laterales -->				        		
		
		<form align='center' id="Cuestionario" action="rmensual.php" method="POST">
		<?php
		$Nombre=$_SESSION["user"];
		$Clave=$_SESSION["pass"];
		?>
			<br/><h1>Reporte Mensual</h1>
			<p align='center'><b>Evaluación del contenido del software</b><br/><br/>Seleccione una sola opción</p>
			<table cellpadding='5' align=center border='1' width='85%' style='font-family: Verdana; font-size: 8pt'>
			<tr>
				<th scope='col'colspan='4'></th>
				<th scope='col'>Siempre</th>
				<th scope='col'>A veces</th>
				<th scope='col'>Nunca</th>
				<th scope='col'>No lo(s) hay</th>
			</tr>
			<tr>
				<td  colspan='4'>1.El contexto en el que se desarrollan los ejercicios corresponde a la edad e intereses  de los alumnos.</td>
				<td align='center'><input type="radio" id="uno" name="uno" value="Siempre"></td>
				<td align='center'><input type="radio" id="uno" name="uno" value="A veces"></td>
				<td align='center'><input type="radio" id="uno" name="uno" value="Nunca"></td>
				<td align='center'><input type="radio" id="uno" name="uno" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>2.El vocabulario empleado  permite la práctica oral y escrita del mismo.</td>
				<td align='center'><input type="radio" id="dos" name="dos" value="Siempre"></td>
				<td align='center'><input type="radio" id="dos" name="dos" value="A veces"></td>
				<td align='center'><input type="radio" id="dos" name="dos" value="Nunca"></td>
				<td align='center'><input type="radio" id="dos" name="dos" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>3.El vocabulario se dosifica de manera pertinente.</td>
				<td align='center'><input type="radio" id="tres" name="tres" value="Siempre"></td>
				<td align='center'><input type="radio" id="tres" name="tres" value="A veces"></td>
				<td align='center'><input type="radio" id="tres" name="tres" value="Nunca"></td>
				<td align='center'><input type="radio" id="tres" name="tres" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>4.El vocabulario se practica en suficientes ejercicios para contribuir a que el alumno lo aprenda.</td>
				<td align='center'><input type="radio" id="cuatro" name="cuatro" value="Siempre"></td>
				<td align='center'><input type="radio" id="cuatro" name="cuatro" value="A veces"></td>
				<td align='center'><input type="radio" id="cuatro" name="cuatro" value="Nunca"></td>
				<td align='center'><input type="radio" id="cuatro" name="cuatro" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>5.El vocabulario se practica en contextos variados. </td>
				<td align='center'><input type="radio" id="cinco" name="cinco" value="Siempre"></td>
				<td align='center'><input type="radio" id="cinco" name="cinco" value="A veces"></td>
				<td align='center'><input type="radio" id="cinco" name="cinco" value="Nunca"></td>
				<td align='center'><input type="radio" id="cinco" name="cinco" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>6.Los ejercicios de fonética son útiles para mejorar la producción oral de los alumnos.</td>
				<td align='center'><input type="radio" id="seis" name="seis" value="Siempre"></td>
				<td align='center'><input type="radio" id="seis" name="seis" value="A veces"></td>
				<td align='center'><input type="radio" id="seis" name="seis" value="Nunca"></td>
				<td align='center'><input type="radio" id="seis" name="seis" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>7.Los ejercicios de comprensión auditiva incluyen videos que representan los diálogos empleados.</td>
				<td align='center'><input type="radio" id="siete" name="siete" value="Siempre"></td>
				<td align='center'><input type="radio" id="siete" name="siete" value="A veces"></td>
				<td align='center'><input type="radio" id="siete" name="siete" value="Nunca"></td>
				<td align='center'><input type="radio" id="siete" name="siete" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>8.Las explicaciones gramaticales complementan a las que usted presenta a los alumnos.</td>
				<td align='center'><input type="radio" id="ocho" name="ocho" value="Siempre"></td>
				<td align='center'><input type="radio" id="ocho" name="ocho" value="A veces"></td>
				<td align='center'><input type="radio" id="ocho" name="ocho" value="Nunca"></td>
				<td align='center'><input type="radio" id="ocho" name="ocho" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>9.Los ejemplos son suficientes para comprender el funcionamiento de las estructuras lingüísticas revisadas. </td>
				<td align='center'><input type="radio" id="nueve" name="nueve" value="Siempre"></td>
				<td align='center'><input type="radio" id="nueve" name="nueve" value="A veces"></td>
				<td align='center'><input type="radio" id="nueve" name="nueve" value="Nunca"></td>
				<td align='center'><input type="radio" id="nueve" name="nueve" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>10.Los ejercicios de las estructuras lingüísticas están en contexto.</td>
				<td align='center'><input type="radio" id="diez" name="diez" value="Siempre"></td>
				<td align='center'><input type="radio" id="diez" name="diez" value="A veces"></td>
				<td align='center'><input type="radio" id="diez" name="diez" value="Nunca"></td>
				<td align='center'><input type="radio" id="diez" name="diez" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>11.Los ejercicios que contiene el software apoyan su labor docente.</td>
				<td align='center'><input type="radio" id="once" name="once" value="Siempre"></td>
				<td align='center'><input type="radio" id="once" name="once" value="A veces"></td>
				<td align='center'><input type="radio" id="once" name="once" value="Nunca"></td>
				<td align='center'><input type="radio" id="once" name="once" value="No hay"></td>
			</tr>
			</table><br/>
			<p align='center'>Puede seleccionar más de una opción</p>
			<table cellpadding='5' align=center border='1' width='85%' style='font-family: Verdana; font-size: 8pt'>
			<tr>
				<th scope='col'colspan='4'></th>
				<th scope='col'>Palabras aisladas</th>
				<th scope='col'>Oraciones</th>
				<th scope='col'>Párrafos</th>
				<th scope='col'>No los hay</th>
			</tr>
			<tr>
				<td colspan='4'>12.Los ejercicios de expresión escrita incluyen la producción de:</td>
				<td align='center'><input type="checkbox" class='uno' name="docea" value="Palabras aisladas"><br></td>
				<td align='center'><input type="checkbox" class='uno' name="doceb" value="Oraciones"><br></td>
				<td align='center'><input type="checkbox" class='uno' name="docec" value="Párrafos"><br></td>
				<td align='center'><input type="checkbox" class='uno' name="doced" value="No los hay"><br></td>
			</tr></table>
			
			<table cellpadding='5' align=center border='1' width='85%' style='font-family: Verdana; font-size: 8pt'>
			<tr>
				<th scope='col'colspan='4'></th>
				<th scope='col'>Palabras aisladas</th>
				<th scope='col'>Oraciones</th>
				<th scope='col'>Diálogos</th>
				<th scope='col'>No los hay</th>
			</tr>
			<tr>
				<td colspan='4'>13.Los ejercicios de producción oral apoyan  la pronunciación de:</td>
				<td align='center'><input type="checkbox" class='dos' name="trecea" value="Palabras aisladas"><br></td>
				<td align='center'><input type="checkbox" class='dos' name="treceb" value="Oraciones"><br></td>
				<td align='center'><input type="checkbox" class='dos' name="trecec" value="Diálogos"><br></td>
				<td align='center'><input type="checkbox" class='dos' name="treced" value="No los hay"><br></td>
			</tr>
			</table>
			
			
			<table cellpadding='5' align=center border='1' width='85%' style='font-family: Verdana; font-size: 8pt'>
			<tr>
				<th scope='col'colspan='3'></th>
				<th scope='col'>Entonación</th>
				<th scope='col'>Acentuación</th>
				<th scope='col'>Ritmo</th>
				<th scope='col'>Fonemas</th>
				<th scope='col'>No los hay</th>
			</tr>
			<tr>
				<td colspan='3'>14.Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en:</td>
				<td align='center'><input type="checkbox" class='tres' name="catorcea" value="Entonación"></td>
				<td align='center'><input type="checkbox" class='tres' name="catorceb" value="Acentuación"></td>
				<td align='center'><input type="checkbox" class='tres' name="catorcec" value="Ritmo"></td>
				<td align='center'><input type="checkbox" class='tres' name="catorced" value="Fonemas"></td>
				<td align='center'><input type="checkbox" class='tres' name="catorcee" value="No los hay"></td>
			</tr>
			</table>
			
			<table cellpadding='5' align='center' border='1' width='85%' style='font-family: Verdana; font-size: 8pt'>			
			<tr>
				<th colspan='3'></th>
				<th>Fonemas difíciles</th>
				<th>Entonación diferente a la del español</th>
				<th>Ritmo propio del inglés</th>
				<th>Ninguno de los anteriores</th>
				<th>No hay ejercicios de fonética</th>
				
			</tr>
			<tr>
				<td colspan='3'>15.Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en:</td>
				<td align='center'><input type="checkbox" class='cuatro' name="quincea" value="Fonemas difíciles"></td>	
				<td align='center' ><input type="checkbox" class='cuatro' name="quinceb" value="Entonación diferente a la del español"></td>
				<td align='center' ><input type="checkbox" class='cuatro' name="quincec" value="Ritmo propio del inglés"></td>
				<td align='center' ><input type="checkbox" class='cuatro' name="quinced" value="Ninguno de los anteriores"></td>
				<td align='center' ><input type="checkbox" class='cuatro' name="quincee" value="No hay ejercicios de fonética"></td>
			</tr>			
			<tr>
				<td colspan='3'></td>								
				<th>Hipervínculos</th>
				<th >Ligas de consulta a diccionarios</th>
				<th >Íconos para escuchar y leer  el texto completo</th>
				<th >Ninguna de las opciones anteriores  </th>
				<th >No hay ejercicios de comprensión de lectura  </th>
			</tr>
			<tr>
				<td colspan='3'>16.Los ejercicios de comprensión  de lectura incluyen:</td>
				<td align='center'><input type="checkbox" class='cinco' name="dieciseisa" value="Hipervínculos"></td>
				<td align='center' ><input type="checkbox" class='cinco' name="dieciseisb" value="Ligas de consulta a diccionarios"></td>
				<td align='center' ><input type="checkbox" class='cinco' name="dieciseisc" value="Íconos para escuchar y leer  el texto completo"></td>
				<td align='center' ><input type="checkbox" class='cinco' name="dieciseisd" value="Ninguna de las opciones anteriores"></td>
				<td align='center' ><input type="checkbox" class='cinco' name="dieciseise" value="No hay ejercicios de comprensión de lectura"></td>
			</tr>
			
			<tr>
				<th></th>				
				<th>En contexto</th>
				<th >Fuera de contexto</th>
				<th >Mecánicos</th>
				<th >Variados</th>
				<th >Suficientes</th>
				<th >Insuficientes</th>
				<th >No los hay</th>
			</tr>
			<tr>				
				<td>17.Los ejercicios de las estructuras lingüísticas son/ están:</td>				
				<td align='center'><input type="checkbox" class='seis' name="diecisietea" value="En contexto"></td>
				<td align='center' ><input type="checkbox" class='seis' name="diecisieteb" value="Fuera de contexto"></td>			
				<td align='center' ><input type="checkbox" class='seis' name="diecisietec" value="Mecánicos"></td>
				<td align='center' ><input type="checkbox" class='seis' name="diecisieted" value="Variados"></td>
				<td align='center' ><input type="checkbox" class='seis' name="diecisietee" value="Suficientes"></td>
				<td align='center' ><input type="checkbox" class='seis' name="diecisietef" value="Insuficientes"></td>
				<td align='center' ><input type="checkbox" class='seis' name="diecisieteg" value="No los hay"></td>
			</tr>
			<tr>
				<th colspan='4'></th>			
				<th>Que de otra manera  le hubiera sido imposible</th>
				<th colspan='2'>Que requerirían de mucho tiempo de preparación de  clase</th>
				<th >De igual manera que con el libro de texto</th>
			</tr>
			<tr>				
				<td colspan='4'>18.Hasta el momento, el software le ha permitido trabajar con sus alumnos áreas de la lengua :</td>
				<td align='center'><input type="checkbox" class='siete' name="dieciochoa" value="Que de otra manera  le hubiera sido imposible"></td>
				<td colspan='2' align='center' ><input type="checkbox" class='siete' name="dieciochob" value="Que requerirían de mucho tiempo de preparación de  clase"></td>
				<td align='center' ><input type="checkbox" class='siete' name="dieciochoc" value="De igual manera que con el libro de texto"></td>
			</tr>
			</table>
			<br/>
			
			<p align='center'>19.¿Utilizó ejercicios del software adicionales a los previamente acordados?<br/></p>
			<input align='center' type="radio" id="diecinueve" name="diecinueve" value="Si">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input align='center'type="radio" id="diecinueve" name="diecinueve" value="No">No
			<br/><br/>
			<p align='center'><br/><b>Evaluación</b><br/>Seleccione una sola opción</p>
			<table cellpadding='5' align=center border='1' width='85%' style='font-family: Verdana; font-size: 8pt'>
			<tr>
				<th scope='col'colspan='4'></th>
				<th scope='col'>Siempre</th>
				<th scope='col'>A veces</th>
				<th scope='col'>Nunca</th>
				<th scope='col'>No lo(s) hay</th>
			</tr>
			<tr>
				<td  colspan='4'>20.La retroalimentación de los ejercicios o prácticas realizadas permite que el alumno resuelva sus dudas.</td>
				<td align='center'><input type="radio" id="veinte" name="veinte" value="Siempre"></td>
				<td align='center'><input type="radio" id="veinte" name="veinte" value="A veces"></td>
				<td align='center'><input type="radio" id="veinte" name="veinte" value="Nunca"></td>
				<td align='center'><input type="radio" id="veinte" name="veinte" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>21.Las unidades o lecciones contienen evaluaciones al finalizar cada una de ellas. </td>
				<td align='center'><input type="radio" id="veintiuno" name="veintiuno" value="Siempre"></td>
				<td align='center'><input type="radio" id="veintiuno" name="veintiuno" value="A veces"></td>
				<td align='center'><input type="radio" id="veintiuno" name="veintiuno" value="Nunca"></td>
				<td align='center'><input type="radio" id="veintiuno" name="veintiuno" value="No hay"></td>
			</tr>
			<tr>
				<th  colspan='8'>El registro de los ejercicios realizados por sus alumnos  le permiten :</th>
			</tr>
			<tr>
				<td  colspan='4'>22.Llevar un seguimiento puntual del trabajo de los alumnos.</td>
				<td align='center'><input type="radio" id="veintidos" name="veintidos" value="Siempre"></td>
				<td align='center'><input type="radio" id="veintidos" name="veintidos" value="A veces"></td>
				<td align='center'><input type="radio" id="veintidos" name="veintidos" value="Nunca"></td>
				<td align='center'><input type="radio" id="veintidos" name="veintidos" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>23.Evaluar el desempeño de los alumnos en cada una de las áreas o secciones del software.</td>
				<td align='center'><input type="radio" id="veintitres" name="veintitres" value="Siempre"></td>
				<td align='center'><input type="radio" id="veintitres" name="veintitres" value="A veces"></td>
				<td align='center'><input type="radio" id="veintitres" name="veintitres" value="Nunca"></td>
				<td align='center'><input type="radio" id="veintitres" name="veintitres" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>24.Conocer el número de veces que el alumno realizó cada uno de los ejercicios.</td>
				<td align='center'><input type="radio" id="veinticuatro" name="veinticuatro" value="Siempre"></td>
				<td align='center'><input type="radio" id="veinticuatro" name="veinticuatro" value="A veces"></td>
				<td align='center'><input type="radio" id="veinticuatro" name="veinticuatro" value="Nunca"></td>
				<td align='center'><input type="radio" id="veinticuatro" name="veinticuatro" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>25.Conocer el tiempo que el alumno destinó a realizar cada uno de los ejercicios.</td>
				<td align='center'><input type="radio" id="veinticinco" name="veinticinco" value="Siempre"></td>
				<td align='center'><input type="radio" id="veinticinco" name="veinticinco" value="A veces"></td>
				<td align='center'><input type="radio" id="veinticinco" name="veinticinco" value="Nunca"></td>
				<td align='center'><input type="radio" id="veinticinco" name="veinticinco" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>26.El registro de ejercicios realizados por sus alumnos le es útil.</td>
				<td align='center'><input type="radio" id="veintiseis" name="veintiseis" value="Siempre"></td>
				<td align='center'><input type="radio" id="veintiseis" name="veintiseis" value="A veces"></td>
				<td align='center'><input type="radio" id="veintiseis" name="veintiseis" value="Nunca"></td>
				<td align='center'><input type="radio" id="veintiseis" name="veintiseis" value="No hay"></td>
			</tr>
			</table><br/><br/>
			<p align='center'><b><br/>Evaluación de Aspectos Técnicos</b><br/>Seleccione una sola opción</p>
			<table cellpadding='5' align=center border='1' width='85%' style='font-family: Verdana; font-size: 8pt'>
			<tr>
				<th scope='col'colspan='4'></th>
				<th scope='col'>Siempre</th>
				<th scope='col'>A veces</th>
				<th scope='col'>Nunca</th>
				<th scope='col'>No lo(s) hay</th>
			</tr>
			<tr>
				<td  colspan='4'>27.Los videos corren adecuadamente.</td>
				<td align='center'><input type="radio" id="veintisiete" name="veintisiete" value="Siempre"></td>
				<td align='center'><input type="radio" id="veintisiete" name="veintisiete" value="A veces"></td>
				<td align='center'><input type="radio" id="veintisiete" name="veintisiete" value="Nunca"></td>
				<td align='center'><input type="radio" id="veintisiete" name="veintisiete" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>28.Los diálogos son claros y fluidos.</td>
				<td align='center'><input type="radio" id="veintiocho" name="veintiocho" value="Siempre"></td>
				<td align='center'><input type="radio" id="veintiocho" name="veintiocho" value="A veces"></td>
				<td align='center'><input type="radio" id="veintiocho" name="veintiocho" value="Nunca"></td>
				<td align='center'><input type="radio" id="veintiocho" name="veintiocho" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>29.Las imágenes se muestran claramente.</td>
				<td align='center'><input type="radio" id="veintinueve" name="veintinueve" value="Siempre"></td>
				<td align='center'><input type="radio" id="veintinueve" name="veintinueve" value="A veces"></td>
				<td align='center'><input type="radio" id="veintinueve" name="veintinueve" value="Nunca"></td>
				<td align='center'><input type="radio" id="veintinueve" name="veintinueve" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>30.El tiempo de carga de los ejercicios es el adecuado.</td>
				<td align='center'><input type="radio" id="treinta" name="treinta" value="Siempre"></td>
				<td align='center'><input type="radio" id="treinta" name="treinta" value="A veces"></td>
				<td align='center'><input type="radio" id="treinta" name="treinta" value="Nunca"></td>
				<td align='center'><input type="radio" id="treinta" name="treinta" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>31.La ruta para acceder a los ejercicios es sencilla.</td>
				<td align='center'><input type="radio" id="treintayuno" name="treintayuno" value="Siempre"></td>
				<td align='center'><input type="radio" id="treintayuno" name="treintayuno" value="A veces"></td>
				<td align='center'><input type="radio" id="treintayuno" name="treintayuno" value="Nunca"></td>
				<td align='center'><input type="radio" id="treintayuno" name="treintayuno" value="No hay"></td>
			</tr>
			<tr>
				<td  colspan='4'>32.El software contiene pantallas de ayuda.</td>
				<td align='center'><input type="radio" id="treintaydos" name="treintaydos" value="Siempre"></td>
				<td align='center'><input type="radio" id="treintaydos" name="treintaydos" value="A veces"></td>
				<td align='center'><input type="radio" id="treintaydos" name="treintaydos" value="Nunca"></td>
				<td align='center'><input type="radio" id="treintaydos" name="treintaydos" value="No hay"></td>
			</tr>
			</table><br/><br/>
			
			<label for="treintaytres">33.Comentarios:</label><br/>
			<textarea rows="8" cols="80" name="treintaytres"></textarea><br>
			<input type="hidden" id="nombre" name="nombre" value="<?php echo($Nombre);?>">
			<input type="hidden" id="clave" name="clave" value="<?php echo($Clave);?>"><br/>
			<input type="hidden" id="mes" name="mes" value="<?php echo($mes);?>"><br/>
			
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
		
