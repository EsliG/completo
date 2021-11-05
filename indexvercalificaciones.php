<img src="img/slider/alumnosbinevenidapc.png" class="desksliderindex">
<img src="img/slider/alumnosbinevenidamov.png" class="movilessliderindex">

<div class="mainparaplataforma">
	<p class="titutlsopraplaafromamain">CALIFICACIONES</p>
	<center>


	<div id="">
	<?php 
	include("BDConecciones.php");
	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$consulta = "SELECT * FROM usuario where tipo  = 'Alumno'";
	$resultado = $link->query($consulta);
	while($row = $resultado->fetch_assoc()) {
		$nombre = $row['nombre'];
		$imgdefondo = "'data:image/jpeg;base64,".base64_encode( $row['Fotodeperfil'] )."'";
		$fotdeperfil = '<div class="fotodeperfilcirculo" style="background-image: url('.$imgdefondo.');">
				</div>';
		echo"<script>var idalumno = '".$idiniciosess ."'</script>";
	}	
	mysqli_close($link);
?>

<div class="col-lg-6">
                    <div class="row" style="font-family: 'Gotham-Medium';">
                        <div class="page-header">
                            <h4 class="text-center">Buscar</h4>
                        </div>
                    </div>
                    <div class="row" style="font-family: 'Gotham-Medium'; text-align: left; margin-bottom:40px;">
                        <div class="form-group">
                            <label class="control-label">Buscar por Curso:</label>

						<select id="opcionesdecursos">
							<option value="">Todos los Cursos</option>

						

							
		  <?php 
	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$consulta = "select * from Cursos";
	$resultado = $link->query($consulta);
	while($row = $resultado->fetch_assoc()) {
		$cursotitulo=$row['nombre'];
		$idcurso=$row['id'];
		echo'<option value="'.$cursotitulo.'">'.$cursotitulo.'</option>';
	}
		mysqli_close($link);
?>

</select>
                        </div>
                    </div>
                </div>
      
      <table id="tablacalificacionesalumn" class="display nowrap;" style="font-family: 'Gotham-Medium';" width="100%">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Curso</th>
			<th></th>
          </tr>
        </thead>

        <tfoot>
          <tr>
		  	<th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Curso</th>
			<th></th>
          </tr>
        </tfoot>

    <tbody>
         
		  <?php 
	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$consulta = "SELECT * FROM usuario where tipo  = 'Alumno'";
	$resultado = $link->query($consulta);
	while($row = $resultado->fetch_assoc()) {
		$nombre = $row['nombre'];
		$telefono = $row['telefono'];
		$correo = $row['correo'];
		$cursos = $row['curso'];
		$idaluno = $row['id'];
		
		$cursotitulo;
		$query=mysqli_query($link,"select * from Cursos where id='".$cursos."'");
	$num_rows=mysqli_num_rows($query);
	$row2=mysqli_fetch_array($query);
	if ($num_rows>0){
		$cursotitulo=$row2['nombre'];
	}
		//$imgdefondo = "'data:image/jpeg;base64,".base64_encode( $row['Fotodeperfil'] )."'";
		//$fotdeperfil = '< class="fotodeperfilcirculo" style="background-image: url('.$imgdefondo.');"></>';
		echo" <tr>
		<td>".$nombre."</td>
		<td>".$telefono."</td>
		<td>".$correo."</td>
		<td>".$cursotitulo."</td>
		<td><div class='botonregos' style='width: 90%; text-align: center;' onclick='vercalalummno(".$idaluno.")'>ver Calificaciones</div></td>
	  </tr>";
	}	
	mysqli_close($link);
?>
    </tbody>
</table>


	</center>
</div>



</div>




