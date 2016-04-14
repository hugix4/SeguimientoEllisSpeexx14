<?php include("seguridad.php");?>
<html>
	<head>
		<title>CGL UNAM</title>
		
		<script Language="JavaScript">	 
  function Valida2(){
	uno=null;
	uno=document.getElementById("uno").value;
	dos=document.getElementById("dos").value;
	tres=document.getElementById("tres").value;
	cuatro=document.getElementById("cuatro").value;
	cinco=document.getElementById("cinco").value;
	seis=document.getElementById("seis").value;
	siete=document.getElementById("siete").value;
	ocho=document.getElementById("ocho").value;
	nueve=document.getElementById("nueve").value;
	diez=document.getElementById("diez").value;
	obtenerValorSeleccionado(uno);
	alert("El valor de uno es: "+uno);
	if(uno=="Siempre" || uno=="A veces"|| uno=="Nunca"|| uno=="No hay"){//|| dos==0 || tres==0 || cuatro==0 || cinco==0 || seis==0 || siete==0 || ocho==0 || nueve==0 || diez==0){
	alert("Hay una coincidencia al menos uno");
	
	return false;
	}
	else{
	alert("Se van los datos porque si están llenos los campos");
	alert("El valor de uno es: "+uno);
		return true;
	}	
  }
  
  
  function obtenerValorSeleccionado(radio){
	for(i=0;i<radio.length;i++)
		if(radio[i].checked) return radio[i].value;
  }
  
   
</script>
		
		
	</head>
	
	 
	
	<body>
		<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Cuestionario</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		</br><p class="eval" style="color: #000;">Estimado profesor:
Con la finalidad de dar seguimiento a la instrumentación del software educativo en grupos piloto  para evaluar su utilidad cualitativamente en el bachillerato de la UNAM, le solicitamos responder  este cuestionario al finalizar cada unidad del  Programa de Estudios de Inglés IV o Segundos Acercamientos al Programa de Inglés I, según corresponda.
Lea las siguientes preguntas y marque la respuesta que considere más apropiada de acuerdo con su experiencia. 

		</br>
		</p>
	</br>
	<form method='POST' action="respuestaM.php" onsubmit="return Valida2()" align='center'>
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
		<input name="buttosky" type="button" onClick="sms()" value="Oa"/>
		</br></br>
		<p align="center"><input type="submit" value="Aceptar"></input>
		</p>
	</form>	
				
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
	</body>
</html>
		
