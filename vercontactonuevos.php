<?php include("conecxionabasededatos.php"); ?>
<?php

$idalumno=$_POST["idalumno"];

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
		<td width="14%">
		</td>
		<td width="14%">
		</td>
	</tr>';
	

	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$consulta="SELECT DISTINCT telefono FROM interesados where fecha >= '2019-12-01'AND contactado= false AND descardado = false ORDER BY id DESC";
	$resultado = $link->query($consulta);

	while($row = $resultado->fetch_assoc()) {
$link2 = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
$consulta2="SELECT * FROM interesados where telefono ='".$row['telefono']."' AND (idquiencontacto='".$idalumno."' OR idquiencontacto ='0') ORDER BY id DESC  ";
		
	$resultado2 = $link2->query($consulta2);
if($row2 = $resultado2->fetch_assoc()) {
	
	if($row2['contactado']==false&&$row2['descardado']==false){
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
		<td width="14%" class="botondefromacionverde" onclick="contactado('.$row2['id'].')">
			Contactado
		</td>
		<td width="14%" class="botondefromacionrojo" onclick="descartar('.$row2['id'].')">
			Descartar
		</td>
		</tr>
		';
		
	}
	}	
	mysqli_close($link2);
}
		
	$tabladeregistros = $tabladeregistros."</table>";
	
	echo $tabladeregistros;
	
	mysqli_close($link);
?>