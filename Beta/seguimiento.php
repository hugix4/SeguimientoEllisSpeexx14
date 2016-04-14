<?php include("seguridad.php");?>		
<?php
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=EvaluaciónLecciones.xls");
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
			<body>
	
<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main" align='center'><!-- contenido principal y menus laterales -->
		</br>		
		<?php
		include('abre_seguimiento.php');  
		$query = "select Distinct Nombre,Paterno,Materno,Plantel,Turno,Unidad, Utilizo, Contribuyo, Agrado, Problema, Observaciones,Hora from $tabla where Completo='Si'"; 
		$result = mysql_query($query) or die ("Tus datos no se encuentran registrados");
		
			echo "<div align='center'>  
    <table border='1' width='100%' style='font-family: Verdana; font-size: 8pt' id='table1'>         
        <tr align='center'> 
            <td><b>Nombre</b></td> 
            <td><b>Apellido Paterno</b></td> 
			<td><b>Apellido Materno</b></td> 
            <td><b>Plantel</b></td>
			<td><b>Turno</b></td>
			<td><b>Unidad</b></td>
			<td><b>¿Utilizó este ejercicio?</b></td>
			<td><b>¿Contribuyó a alcannzar el conocimiento del tema?</b></td>
			<td><b>¿El ejercicio fue del agrado de los alumnos?</b></td>
			<td><b>¿Hubo algún problema técnico?</b></td>
			<td><b>Comentarios</b></td>
			<td><b>Hora</b></td>			
		</tr>";
		while ($registro = mysql_fetch_array($result))
		{ 
		
		echo "<table border='1' width='100%' style='font-family: Verdana; font-size: 8pt'>
		<tr align='center'> 
            <td>".$registro["Nombre"]."</td> 
            <td>".$registro["Paterno"]."</td> 
			<td>".$registro["Materno"]."</td> 
            <td>".$registro["Plantel"]."</td> 
			<td>".$registro["Turno"]."</td> 
			<td>".$registro["Unidad"]."</td> 
			<td>".$registro["Utilizo"]."</td> 
			<td>".$registro["Contribuyo"]."</td> 
			<td>".$registro["Agrado"]."</td> 
			<td>".$registro["Problema"]."</td> 
			<td>".$registro["Observaciones"]."</td> 
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