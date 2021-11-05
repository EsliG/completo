
<?php 
	include("BDConecciones.php");
	$idiniciosess = $_POST["idusuario"];
	mysqli_close($link);
?>

<style>
#listaddecalificacionesdealumnos thead tr th{
	padding-top:10px;
	padding-bottom:10px;
	color: #fff;
	background:#B72025;
}
#listaddecalificacionesdealumnos tfoot tr th{
	padding-top:10px;
	padding-bottom:10px;
	color: #fff;
	background:#B72025;
}
#listaddecalificacionesdealumnos tbody tr th{
	padding-top:10px;
	padding-bottom:10px;
}
.fondoainexa{
	color: #fff;
	background:#B72025;
}
.divsiingreso{
	color: #fff;
	background:green;
	width:100%;
}
.divnoingreso{
	color: #fff;
	background:#B72025;
	width:100%;
}
</style>
<p class="titutlsopraplaafromamain">Calificaciones de Exámenes</p>
<table id="listaddecalificacionesdealumnos" class="display nowrap;" style="font-family: 'Gotham-Medium';" width="90%">
        <thead>
          <tr>
		  	<th>Examen</th>
			<th>Respuestas Esp</th>
			<th>Puntaje Esp</th>
			<th>Calificación Esp</th>
			<th>Respuestas Mat</th>
			<th>Puntaje Mat</th>
			<th>Calificación Mat</th>
            <th>Calificacion</th>
			<th>Ingrese</th>

          </tr>
        </thead>

        <tfoot>
          <tr>

		  	<th>Examen</th>
			<th>Respuestas Esp</th>
			<th>Puntaje Esp</th>
			<th>Calificación Esp</th>
			<th>Respuestas Mat</th>
			<th>Puntaje Mat</th>
			<th>Calificación Mat</th>
            <th>Calificacion</th>
			<th>Ingrese</th>

          </tr>
        </tfoot>

    <tbody>
         
	<tr>
		  	
          </tr>

		  <?php 
	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$consulta = "SELECT * FROM resutadosexamenes where 	idusuiario= '".$idiniciosess."'";
	$resultado = $link->query($consulta);
	while($row = $resultado->fetch_assoc()) {


	$consulta2 = "SELECT * FROM usuario where id= '".$idiniciosess."'";
	$resultado2 = $link->query($consulta2);

	$diferecniapuntos;

	while($row2 = $resultado2->fetch_assoc()) {
		
		$puntajesminimos =$row2["puntajeminimo"];
		$promedioformacion =$row2["promedio"];
			 
			$diferecniapuntos = $puntajesminimos - $promedioformacion ;

	}





		$calificacionfinal = $row['primerresultado'];
		$preg_esp = $row['preg_esp'];
		$preg_mat = $row['preg_mat'];
		$pun_esp = $row['pun_esp'];
		$pun_mat = $row['pun_mat'];
		$cal_esp = $row['cal_esp'];
		$cal_mat = $row['cal_mat'];
		$numerodeexamen = $row['numerodeexamen'];
		$divdesiingreso;
		if($diferecniapuntos<=$calificacionfinal){
			$divdesiingreso='<div class="divsiingreso">Admitido</div>';
		}else{
			$divdesiingreso='<div class="divnoingreso">No Admitido</div>';
		}
		
		$cursotitulo;
		//$imgdefondo = "'data:image/jpeg;base64,".base64_encode( $row['Fotodeperfil'] )."'";
		//$fotdeperfil = '<div class="fotodeperfilcirculo" style="background-image: url('.$imgdefondo.');"></div>';
		echo" <tr>
		<th class='fondoainexa'>Examen ".$numerodeexamen."</th>
		<th>".$preg_esp."/70</th>
			<th>".number_format($pun_esp, 2, '.', '')."/800</th>
			<th>".number_format($cal_esp, 2, '.', '')."/100</th>
			<th>".$preg_mat."/55</th>
			<th>".number_format($pun_mat, 2, '.', '')."/800</th>
			<th>".number_format($cal_mat, 2, '.', '')."/100</th>
            <th>".number_format($calificacionfinal, 2, '.', '')."/100</th>
			<th>".$divdesiingreso."</th>
	  </tr>";
	}	
	mysqli_close($link);
?>
    </tbody>
</table>