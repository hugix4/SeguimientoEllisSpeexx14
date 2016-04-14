<?php include("seguridad.php");?>		
<?php

header('Content-type: application/vnd.ms-excel');

header("Content-Disposition: attachment; filename=CuestionarioMensual.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
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
	</head>
 
	
	<body>
	
<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main" align='center'><!-- contenido principal y menus laterales -->
		<?php
		include('abre_seguimiento2.php');  
		$query = "select distinct Nombre, Plantel, uno, dos, tres, cuatro, cinco, seis, siete, ocho, nueve, diez, once, docea, doceb, docec, doced, trecea, treceb, trecec, treced, catorcea, catorceb, catorcec, catorced, catorcee, quincea, quinceb, quincec, quinced, quincee, dieciseisa, dieciseisb, dieciseisc, dieciseisd, dieciseise, diecisietea, diecisieteb, diecisietec, diecisieted, diecisietee, diecisietef, diecisieteg, dieciochoa, dieciochob, dieciochoc, diecinueve, veinte, veintiuno, veintidos, veintitres, veinticuatro, veinticinco, veintiseis, veintisiete, veintiocho, veintinueve, treinta, treintayuno, treintaydos, treintaytres, cuestionario, Hora from $tabla where completo='Si'"; 
		$result = mysql_query($query) or die ("Tus datos no se encuentran registrados");
		
		
			echo "<div align='center'>  
    <table border='1' width='100%' style='font-family: Verdana; font-size: 8pt' id='table1'>         
        <tr align='center'> 
            <td><b>Nombre</b></td> 
            <td><b>Plantel</b></td> 
			<td><b>El contexto en el que se desarrollan los ejercicios corresponde a la edad e intereses de los alumnos</b></td>
			<td><b>El vocabulario empleado permite la práctica oral y escrita del mismo</b></td>
			<td><b>El vocabulario se dosifica de manera pertinente</b></td>
			<td><b>El vocabulario se practica en suficientes ejercicios para contribuir a que el alumno lo aprenda</b></td>
			<td><b>El vocabulario se practica en contextos variados</b></td>
			<td><b>Los ejercicios de fonética son útiles para mejorar la producción oral de los alumnos</b></td>
			<td><b>Los ejercicios de comprensión auditiva incluyen videos que representan los diálogos empleados</b></td>
			<td><b>Las explicaciones gramaticales complementan a las que usted presenta a los alumnos</b></td>
			<td><b>Los ejemplos son suficientes para comprender el funcionamiento de las estructuras lingüísticas revisadas</b></td>
			<td><b>Los ejercicios de las estructuras lingüísticas están en contexto</b></td>
			<td><b>Los ejercicios que contiene el software apoyan su labor docente</b></td>
			<td><b>Los ejercicios de expresión escrita incluyen la producción de</b></td>
			<td><b>Los ejercicios de expresión escrita incluyen la producción de</b></td>
			<td><b>Los ejercicios de expresión escrita incluyen la producción de</b></td>
			<td><b>Los ejercicios de expresión escrita incluyen la producción de</b></td>
			<td><b>Los ejercicios de producción oral apoyan la pronunciación de</b></td> 
			<td><b>Los ejercicios de producción oral apoyan la pronunciación de</b></td>
			<td><b>Los ejercicios de producción oral apoyan la pronunciación de</b></td>
			<td><b>Los ejercicios de producción oral apoyan la pronunciación de</b></td>
			<td><b>Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en</b></td>
			<td><b>Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en</b></td>
			<td><b>Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en</b></td>
			<td><b>Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en</b></td>
			<td><b>Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en</b></td>
			<td><b>Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en</b></td>
			<td><b>Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en</b></td>
			<td><b>Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en</b></td>
			<td><b>Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en</b></td>
			<td><b>Con los ejercicios de fonética los alumnos pueden practicar y registrar sus avances en</b></td>
			<td><b>Los ejercicios de comprensión de lectura incluyen</b></td>
			<td><b>Los ejercicios de comprensión de lectura incluyen</b></td>
			<td><b>Los ejercicios de comprensión de lectura incluyen</b></td>
			<td><b>Los ejercicios de comprensión de lectura incluyen</b></td>
			<td><b>Los ejercicios de comprensión de lectura incluyen</b></td>
			<td><b>Los ejercicios de las estructuras lingüísticas son/ están</b></td>			
			<td><b>Los ejercicios de las estructuras lingüísticas son/ están</b></td>
			<td><b>Los ejercicios de las estructuras lingüísticas son/ están</b></td>
			<td><b>Los ejercicios de las estructuras lingüísticas son/ están</b></td>
			<td><b>Los ejercicios de las estructuras lingüísticas son/ están</b></td>
			<td><b>Los ejercicios de las estructuras lingüísticas son/ están</b></td>
			<td><b>Los ejercicios de las estructuras lingüísticas son/ están</b></td>
			<td><b>Hasta el momento, el software le ha permitido trabajar con sus alumnos áreas de la lengua a</b></td>
			<td><b>Hasta el momento, el software le ha permitido trabajar con sus alumnos áreas de la lengua b</b></td>
			<td><b>Hasta el momento, el software le ha permitido trabajar con sus alumnos áreas de la lengua c</b></td>
			<td><b>Utilizó ejercicios del software adicionales a los previamente acordados</b></td>
			<td><b>La retroalimentación de los ejercicios o prácticas realizadas permite que el alumno resuelva sus dudas</b></td>
			<td><b>Las unidades o lecciones contienen evaluaciones al finalizar cada una de ellas</b></td>
			<td><b>Llevar un seguimiento puntual del trabajo de los alumnos</b></td>
			<td><b>Evaluar el desempeño de los alumnos en cada una de las áreas o secciones del software</b></td>
			<td><b>Conocer el número de veces que el alumno realizó cada uno de los ejercicios</b></td>
			<td><b>Conocer el tiempo que el alumno destinó a realizar cada uno de los ejercicios</b></td>
			<td><b>El registro de ejercicios realizados por sus alumnos le es útil</b></td>
			<td><b>Los videos corren adecuadamente</b></td>
			<td><b>Los diálogos son claros y fluidos</b></td>
			<td><b>Las imágenes se muestran claramente</b></td>
			<td><b>El tiempo de carga de los ejercicios es el adecuado</b></td>
			<td><b>La ruta para acceder a los ejercicios es sencilla</b></td>
			<td><b>El software contiene pantallas de ayuda</b></td>
			<td><b>Comentarios</b></td>
			<td><b>Mes del cuestionario</b></td>
			<td><b>Fecha de elaboración</b></td>			
		</tr>";
		while ($registro = mysql_fetch_array($result))
		{ 
		
		echo "<table border='1' width='100%' style='font-family: Verdana; font-size: 8pt'>
		<tr align='center'> 
            <td>".$registro["Nombre"]."</td> 
			<td>".$registro["Plantel"]."</td> 
			<td>".$registro["uno"]."</td>
			<td>".$registro["dos"]."</td>
			<td>".$registro["tres"]."</td>
			<td>".$registro["cuatro"]."</td>
			<td>".$registro["cinco"]."</td>
			<td>".$registro["seis"]."</td>
			<td>".$registro["siete"]."</td>
			<td>".$registro["ocho"]."</td>
			<td>".$registro["nueve"]."</td>
			<td>".$registro["diez"]."</td>
			<td>".$registro["once"]."</td>
			<td>".$registro["docea"]."</td>
			<td>".$registro["doceb"]."</td>
			<td>".$registro["docec"]."</td>
			<td>".$registro["doced"]."</td>
			<td>".$registro["trecea"]."</td> 
			<td>".$registro["treceb"]."</td>
			<td>".$registro["trecec"]."</td>
			<td>".$registro["treced"]."</td>
			<td>".$registro["catorcea"]."</td>
			<td>".$registro["catorceb"]."</td>
			<td>".$registro["catorcec"]."</td>
			<td>".$registro["catorced"]."</td>
			<td>".$registro["catorcee"]."</td>
			<td>".$registro["quincea"]."</td>
			<td>".$registro["quinceb"]."</td>
			<td>".$registro["quincec"]."</td>
			<td>".$registro["quinced"]."</td>
			<td>".$registro["quincee"]."</td>
			<td>".$registro["dieciseisa"]."</td>
			<td>".$registro["dieciseisb"]."</td>
			<td>".$registro["dieciseisc"]."</td>
			<td>".$registro["dieciseisd"]."</td>
			<td>".$registro["dieciseise"]."</td>
			<td>".$registro["diecisietea"]."</td>			
			<td>".$registro["diecisieteb"]."</td>
			<td>".$registro["diecisietec"]."</td>
			<td>".$registro["diecisieted"]."</td>
			<td>".$registro["diecisietee"]."</td>
			<td>".$registro["diecisietef"]."</td>
			<td>".$registro["diecisieteg"]."</td>
			<td>".$registro["dieciochoa"]."</td>
			<td>".$registro["dieciochob"]."</td>
			<td>".$registro["dieciochoc"]."</td>
			<td>".$registro["diecinueve"]."</td>
			<td>".$registro["veinte"]."</td>
			<td>".$registro["veintiuno"]."</td>
			<td>".$registro["veintidos"]."</td>
			<td>".$registro["veintitres"]."</td>
			<td>".$registro["veinticuatro"]."</td>
			<td>".$registro["veinticinco"]."</td>
			<td>".$registro["veintiseis"]."</td>
			<td>".$registro["veintisiete"]."</td>
			<td>".$registro["veintiocho"]."</td>
			<td>".$registro["veintinueve"]."</td>
			<td>".$registro["treinta"]."</td>
			<td>".$registro["treintayuno"]."</td>
			<td>".$registro["treintaydos"]."</td>
			<td>".$registro["treintaytres"]."</td>
			<td>".$registro["cuestionario"]."</td>
			<td>".$registro["Hora"]."</td>
		</tr>";}
		echo"</table>";
		include('cierra_seguimiento.php');
		?>
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->		
</div><!-- Fin de la "envoltura" -->
<!--Que no le digan y que no le cuenten, toda esta página fue diseñada en su totalidad por el Ingeniero Hugo Luna alias hugix4-->
</body>
</html>