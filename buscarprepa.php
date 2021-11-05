<?php
$textobus=$_POST['texto'];

$link = mysqli_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne', 'u106265038_ceuni')or die(' coneccion fallida: ' . mysqli_error($link));
mysqli_query ($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM puntajeprepa WHERE prepa LIKE '%".$textobus."%' OR carrera LIKE '%".$textobus."%' ";
$result = mysqli_query($link, $query) or die('Consulta fallida: ' . mysqli_error($link));



echo"
<div>
<div>
<table class='tdtabletit'>
<tr>
<td style='width:25%;padding: 2%;text-align: center;'>
Preparatoria
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
<table  class='tablepuntinfo'>
	<tr>
		<td class='centrotddiv'>
			<b >".$row["prepa"]."</b>
		</td>
		<td class='tdcarrerastd'>
			<b >".$row["carrera"]."</b>
		</td>
		<td  style='width:15%; text-align: center;' onClick='fun".$id."()'>
			<img id='".$id."img' src='img/logos/atributos/cemedic/plus.png' class='masimglog'/>
		</td>
	</tr>
</table>
<div id='".$id."respu' class='divinresdic'>
Introduce tu promedio de preparatoria 
<input type='text' id='prepapro".$id."' class='inpurecinpunt' onkeypress='return valida(event)' onKeyUp='cal".$id."()'>
<br>
<div id='calculo".$id."' style='display:none; padding-top:2%; '>
El puntaje mínimo para la carrera de <b style='color:#F6323E;'>".$row["carrera"]."</b> es <b style='color:#F6323E;'>: ".$row["puntajeminimo"]."</b>
<br>
Con base a tu promedio, necesitarías obtener en tu examen de admisión una calificación de:<b id='puntajeminimo".$id."' style='color:#F6323E;'> </b><br>
Te recomendamos nuestro curso
<div id='medicos".$id."' style='display:block;'>
	REGULARIZACIÓN<a href='REGULARIZACIÓN' style='color:#ff9600'> haz clic aquí para más información... </a>
	</div>
	<div id='altospuntajes".$id."' style='display:block;'>
	REGULARIZACIÓN<a href='REGULARIZACIÓN' style='color:#ff9600'> haz clic aquí para más información... </a>
	</div>
	<div id='unextraining".$id."' style='display:block;'>
	REGULARIZACIÓN<a href='REGULARIZACIÓN' style='color:#ff9600'> haz clic aquí para más información... </a>
	</div>
	<div id='unex".$id."' style='display:block;'>
	REGULARIZACIÓN<a href='REGULARIZACIÓN' style='color:#ff9600'> haz clic aquí para más información... </a>
	</div>
</div>

</div>

<script>

function cal".$id."(){
	var a =  parseFloat(".$row['puntajeminimo'].")-parseFloat(document.getElementById('prepapro".$id."').value) ;
	document.getElementById('calculo".$id."').style.display='block';
	document.getElementById('puntajeminimo".$id."').innerHTML= a;
	
	if(a>=83){
	document.getElementById('medicos".$id."').style.display='block';
	 document.getElementById('altospuntajes".$id."').style.display='none';
	 document.getElementById('unextraining".$id."').style.display='none';
	 document.getElementById('unex".$id."').style.display='none';
	}
	if(a<=82&&a>=73){
	document.getElementById('medicos".$id."').style.display='none';
	 document.getElementById('altospuntajes".$id."').style.display='block';
	 document.getElementById('unextraining".$id."').style.display='none';
	 document.getElementById('unex".$id."').style.display='none';
	 
	}
	if(a<=73&&a>=69){
	document.getElementById('medicos".$id."').style.display='none';
	 document.getElementById('altospuntajes".$id."').style.display='none';
	 document.getElementById('unextraining".$id."').style.display='block';
	 document.getElementById('unex".$id."').style.display='none';
	 
	}
	if(a<=69){
	document.getElementById('medicos".$id."').style.display='none';
	 document.getElementById('altospuntajes".$id."').style.display='none';
	 document.getElementById('unextraining".$id."').style.display='none';
	 document.getElementById('unex".$id."').style.display='block';
	 
	}
	
	}

function fun".$id."(){
	if(document.getElementById('".$id."respu').style.display=='none'){
		document.getElementById('".$id."respu').style.display='block';
		document.getElementById('".$id."img').src='img/logos/atributos/cemedic/minus.png';
		}else{
		document.getElementById('".$id."respu').style.display='none';
		document.getElementById('".$id."img').src='img/logos/atributos/cemedic/plus.png';}}
</script>
";
} 

echo"</div> </div>";
mysqli_free_result($result); 
mysqli_close($link); 

?>
