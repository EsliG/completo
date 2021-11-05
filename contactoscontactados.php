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
			Fecha de contacto
		</td>
		<td width="14%" class="tituloparadisplay">
			Curso de interes
		</td>
		<td width="14%" class="tituloparadisplay">
			Escuela de proveniencia 
		</td>
		<td width="14%">
		</td>
	</tr>';
	

	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$consulta="SELECT DISTINCT telefono FROM interesados where fecha >= '2019-12-01'AND contactado= true AND descardado = false ORDER BY fechadeultimocontacto DESC";
	$resultado = $link->query($consulta);

	while($row = $resultado->fetch_assoc()) {
$link2 = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
$consulta2="SELECT * FROM interesados where telefono ='".$row['telefono']."' ORDER BY fechadeultimocontacto DESC  ";
	$resultado2 = $link2->query($consulta2);
if($row2 = $resultado2->fetch_assoc()) {
	
	if($row2['contactado']==true&&$row2['descardado']==false){
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
			'.$row2['fechadeultimocontacto'].'
		</td>
		<td width="14%" class="textosdetable">
			'.$row2['cursodeinteres'].'
		</td>
		<td width="14%" class="textosdetable">
			'.$row2['escuela'].'
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