<?php
$textobus=$_POST['texto'];

$link = mysqli_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne', 'u106265038_ceuni')or die(' coneccion fallida: ' . mysqli_error($link));
mysqli_query ($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM puntajes WHERE centro  LIKE '%".$textobus."%' OR campus LIKE '%".$textobus."%' OR   carrera  LIKE '%".$textobus."%' ";
$result = mysqli_query($link, $query) or die('Consulta fallida: ' . mysqli_error($link));



echo"
<div>
<div>
<table class='tdtabletit'>
<tr>
<td style='width:25%;padding: 2%;text-align: center;'>
Centro
</td>
<td style='width:75%;padding: 2%;text-align: center;'>
Carrera
</td>
</tr>
</table>
";
while($row = mysqli_fetch_array($result)) {
	$id=$row["id"];
echo "
<table  class='tablepuntinfo' id='selectdeinfodiv".$id."'>
	<tr>
		<td class='centrotddiv'>
			<b>".$row["centro"]."</b>
		</td>
		<td class='tdcarrerastd'>
			<b>".$row["carrera"]."</b>
		</td>
		<td class='botonrojseleccionfro' style='width:15%; text-align: center;' onClick='seleccionarclase(".$id.")'>
			Seleccionar
		</td>
	</tr>
</table>



";
} 

echo"</div> </div>";
mysqli_free_result($result); 
mysqli_close($link); 

?>