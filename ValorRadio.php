<html>
<head>
<script>
var redskull=0;
var un1="";
var do2="";
var tr3="";
var cu4="";
var ci5="";
var se6="";
var si7="";
var uno = document.getElementsByName("so");
var dos = document.getElementsByName("os");

function probando(){
alert("valor un1:"+un1);
alert("valor do2:"+do2);
}
function check(){
un1=checkup(uno);
do2=checkup(dos);
}

function checkup(pregunta){	
	for(var i=0,length=pregunta.length;i<length;i++){
		if(pregunta[i].checked){
			redskull=0;
			alert(pregunta[i].value);
			return pregunta[i].value;
			break;
		}if(!pregunta[i].checked){redskull++; return false}
	}//alert("Valor redskull: "+redskull+" y la opción pregunta es: "+un1);
}
	
</script>
</head>
<body>
<form method='POST' action="respuestaR.php" onsubmit="return check()" align='center'>
<input type="radio" name="so"  value="windows">Windows
<input type="radio" name="so"  value="linux">Linux</br>
<input type="radio" name="os"  value="osx">OSX
<input type="radio" name="os"  value="other">Other
<input type="button" onclick="check()" value="Check"></input>
<input type="button" onclick="probando()" value="Probando"></input>
<input type="submit" value="Aceptar"></input>
</form>
</body>

</html>