<?php include("conecxionabasededatos.php"); ?>
<?php

	$tabladeregistros = '<table style="width: 100%;border-collapse: collapse;">
	<tr>
		<td width="14%" class="tituloparadisplay">
			Nombre
		</td>
		<td width="14%" class="tituloparadisplay">
			Teléfono
		</td>
		<td width="14%" class="tituloparadisplay">
			Correo
		</td>
		<td width="14%" class="tituloparadisplay">
			Fecha
		</td>
		<td width="14%" class="tituloparadisplay">
			Hora
		</td>
	</tr>';
	

	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$consulta="SELECT DISTINCT telefono FROM interesados where fecha >= '2019-12-01' AND descardado = true ORDER BY id DESC";
	$resultado = $link->query($consulta);

	while($row = $resultado->fetch_assoc()) {
$link2 = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
$consulta2="SELECT * FROM interesados where telefono ='".$row['telefono']."' ORDER BY id DESC ";
	$resultado2 = $link2->query($consulta2);
if($row2 = $resultado2->fetch_assoc()) {
		$tabladeregistros = $tabladeregistros.'
		<tr>
		<td width="14%" class="textosdetable">
			'.$row2['nomcom'].'
		</td>
		<td width="14%" class="textosdetable">
			'.$row2['telefono'].'
		</td>
		<td width="14%" class="textosdetable">
			'.$row2['correo'].'
		</td>
		<td width="14%" class="textosdetable">
			'.$row2['fecha'].'
		</td>
		<td width="14%" class="textosdetable">
			'.$row2['hora'].'
		</td>
		</tr>
		';
	}	
	mysqli_close($link2);
}
		
	$tabladeregistros = $tabladeregistros."</table>";
	
	echo $tabladeregistros;
	
	mysqli_close($link);
?>