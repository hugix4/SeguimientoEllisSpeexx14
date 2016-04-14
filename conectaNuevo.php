<?
echo "Hola $_POST[id], bienvenido a PHP $_POST[nombre] Opcion= $_POST[numplantel]<BR>";
$link = mysql_connect("mysql6.000webhost.com", "a6831370_hugi", "h0lamundo");
mysql_select_db("a6831370_prueba1",$link);
$sql = "select * from prueba";// where id=$_POST[id]
$sql = mysql_query($sql) or die("No se pudo realizar la consulta");
echo "<body bgcolor='#050a2f'>";
echo "<table border='2' align='center' width='800' cellpadding='10'>
<tr align='center'>
		<td width='200'><p>Id<br></td>
		<td width='200'><p>Nombre</td>
		<td width='200'><p>Apellido</td>
		<td width='200'><p>Numero de cuenta</td>
</tr>";

echo"<style type='text/css'>
  p {
	font-family:Century Gothic, sans-serif;
	font-size:18px;
    color: #b79d49;
    }
  </style>";


while($row = mysql_fetch_array($sql))
{


echo "<table border='2' align='center' width='800' cellpadding='10'>
<tr align='center'>
	<td width='200'><p>".$row['id']."</td>
	<td width='200'><p>".$row['nombre']."</td>
	<td width='200'><p>".$row['apellido']."</td>
	<td width='200'><p>".$row['numcuenta']."</td>
</tr>
";


}

echo"</body>";
?>