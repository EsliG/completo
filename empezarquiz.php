<?php
$idquizhacer = $_POST['idquiz'];
$link = mysql_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne')or die(' coneccion fallida: ' . mysql_error());
mysql_select_db('u106265038_ceuni') or die('No se pudo seleccionar la base de datos');
mysql_query ("SET NAMES 'utf8'");
$query = "SELECT * FROM preguntas WHERE exam='".$idquizhacer."' GROUP BY id";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
$preguntas =1;
echo '<center><div class="recuadrodequizplatfroma">
<p class="textoexamensimuti"></p><div class="recuedrodelexamendenro">
<p class="titulosimulacroplata"></p>
';

while($row = mysql_fetch_array($result)) {
	$pregunta = $row['preg'] ;
	$bolimg  = $row['siimg'];
	$imagen = $row['img'];
	$opciona  = $row['opca'];
	$opcionb = $row['opcb'];
	$opcionc  = $row['opcc'];
	$opciond  = $row['opcd'];
	$respuesta  = $row['resp'];
	$lectura  = $row['lectura'];
	$bollectura  = $row['silectura'];

	if($bolimg == true){
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $imagen ).'" class="imgdivpregunta">';
	}
	if($bollectura == true){
		echo '<p class="textoexamensimu" style="text-align: left;">'.$lectura.'</p>';
	}
	echo '<br><p class="textoexamensimuprgujn">'.$preguntas.'.- <span style="text-align: left;">'.$pregunta.'</span></p><br><br> 
	<p class="paddingtexalingopciones">
	<input type="radio" class="radiobotonpreg" name="pregunta'.$preguntas.'" id="pregunta'.$preguntas.'"  value="a">'.$opciona.'<br>
	<input type="radio" class="radiobotonpreg" name="pregunta'.$preguntas.'" id="pregunta'.$preguntas.'" value="b">'.$opcionb.'<br>
	<input type="radio" class="radiobotonpreg" name="pregunta'.$preguntas.'" id="pregunta'.$preguntas.'" value="c">'.$opcionc.'<br>
	<input type="radio" class="radiobotonpreg" name="pregunta'.$preguntas.'" id="pregunta'.$preguntas.'" value="d">'.$opciond.'<br>
	
	<input id="respuesta'.$preguntas.'" style="display:none;" value="'.$respuesta.'">
	
	</p>';
	echo '<br><br>';
	$preguntas++;
}
echo '
<input id="numerodepregntas" type="text" value="'.$preguntas.'" style="display:none;"  disabled>
<button type="button" class="botonregos" onClick="terminarquiz()" style="font-size:2.5vh; padding-bottom:3%; padding-top:3%; padding-left:2%; text-align:100%; width:60%; padding-right:2%;">
Terminar Examen
</button><br><br><br><br></div></div></center>';
mysql_close($link); 
?>