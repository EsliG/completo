<div id="lightboxintrucciones" class="mainlightboxexamen" style="display: none;">
	<div id="contenidoplightbox" class="lightboxcontenidoexamen">
	</div>
</div>

<style>
#example thead tr th{
	padding-top:10px;
	padding-bottom:10px;
	color: #fff;
	background:#B72025;
}
#example tfoot tr th{
	padding-top:10px;
	padding-bottom:10px;
	color: #fff;
	background:#B72025;
}
#example tbody tr th{
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
<?php 
	include("BDConecciones.php");
	$idiniciosess = $_POST["idalumno"];

	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$query=mysqli_query($link,"select * from usuario where id='".$idiniciosess."'");
	$num_rows=mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
	$diferecniapuntos;
	$nombre;
	if ($num_rows>0){
		
		$nombre = $row['nombre'];
		$telefono = $row['telefono'];
		
		$telefono = $row['telefono'];
		$correo  = $row['correo'];
		$horario = $row['horario'];
		
		$carrera = $row['carrera'];
		
		$centrodeaspiracion = $row['centrodeaspiracion'];
		
		$imgdefondodecentro;
		
		if($centrodeaspiracion=="CUAAD"){
			$imgdefondodecentro="'img/centros/cuaad.jpg'";
		}
		if($centrodeaspiracion=="CUCBA"){
			$imgdefondodecentro="'img/centros/cucba.jpg'";
		}
		if($centrodeaspiracion=="CUCEA"){
			$imgdefondodecentro="'img/centros/cucea.jpg'";
		}
		if($centrodeaspiracion=="CUCEI"){
			$imgdefondodecentro="'img/centros/cucei.jpg'";
		}
		if($centrodeaspiracion=="CUCS"){
			$imgdefondodecentro="'img/centros/cucs.jpg'";
		}
		if($centrodeaspiracion=="CUCSH"){
			$imgdefondodecentro="'img/centros/cucsh.jpg'";
		}
		if($centrodeaspiracion=="CUALTOS"){
			$imgdefondodecentro="'img/centros/cualtos.png'";
		}
		if($centrodeaspiracion=="CUCI"){
			$imgdefondodecentro="'img/centros/cuci.png'";
		}
		if($centrodeaspiracion=="CUCOSTA"){
			$imgdefondodecentro="'img/centros/cucosta.png'";
		}
		if($centrodeaspiracion=="CUCSUR"){
			$imgdefondodecentro="'img/centros/cucsur.png'";
		}
		if($centrodeaspiracion=="CULAGOS"){
			$imgdefondodecentro="'img/centros/culagos.png'";
		}
		
		if($centrodeaspiracion=="CUNORTE"){
			$imgdefondodecentro="'img/centros/cunorte.png'";
		}
		
		if($centrodeaspiracion=="CUTONALA"){
			$imgdefondodecentro="'img/centros/cutonala.png'";
		}
		
		if($centrodeaspiracion=="CUVALLES"){
			$imgdefondodecentro="'img/centros/cuvalles.png'";
		}
		
		if($centrodeaspiracion=="SUV"){
			$imgdefondodecentro="'img/centros/suv.jpg'";
		}
		
		$divdecentrosimg= '<div class="imgcenrtrodefromacion" style="background-image: url('.$imgdefondodecentro.')"></div>';
			
			
			
		
			$puntajesminimos =$row["puntajeminimo"];
	$promedioformacion =$row["promedio"];
		 
		$diferecniapuntos = $puntajesminimos - $promedioformacion ;
		
		$centrodeaspiracion = $row['centrodeaspiracion'];
		
		$imgdefondo = "'data:image/jpeg;base64,".base64_encode( $row['Fotodeperfil'] )."'";
		$fotodeperfilmain = '<div class="divmaindeperfilfoto" style="background-image: url('.$imgdefondo.');">
				</div>';
	}	
	mysqli_close($link);
?>
<img src="img/slider/alumnosbinevenidapc.png" class="desksliderindex">
<img src="img/slider/alumnosbinevenidamov.png" class="movilessliderindex">

<div class="mainparaplataforma">
<p class="titutlsopraplaafromamain">Mi Perfil </p>
	
<div class="recuadro50">
<?php
	echo $fotodeperfilmain."  | ".$diferecniapuntos;
?>
</div>
	<div class="recuadro50" style="vertical-align:top;">
	<p class="textosplataformadatosd" style="color: #B72025;">NOMBRE:</p>
		<p class="textosplataformadatosdsub" style="color: #000;">
<?php
 	echo $nombre;
?>
		</p>
		<br>
			<p class="textosplataformadatosd" style="color: #B72025;">TELÉFONO:</p>
		<p class="textosplataformadatosdsub" style="color: #000;">
<?php
 	echo $telefono;
?>
		</p>
		<br>
		<p class="textosplataformadatosd" style="color: #B72025;">CORREO ELECTRÓNICO:</p>
		<p class="textosplataformadatosdsub" style="color: #000;">
<?php
 	echo $correo;
?>
		</p>
</div>
	
	<br><br><br>
	<p class="titutlsopraplaafromamain">Datos Académicos</p>
	
	<div class="recuadro50">
		<div>
			<div class="maindearpiracioncarrera">
				<?php echo $divdecentrosimg;?>
				
				<div class="centroycarreratitulo"><p class="titulksiodeformacionindecarrera"><?php echo $centrodeaspiracion;?></p><?php echo $carrera;?></div>
				<div class="puntajeminimotituloplat">Puntaje minimo para ingresar<br><p class="titulksiodeformacionindecarrera"><?php echo $puntajesminimos;?></p></div>
			</div>
		</div>
	</div>
	
	<div class="recuadro50" style="vertical-align: top;">
		<div class="mainformacionternmain">
			<div class="divdepuntajesminimos">Teniendo encuenta tu promedio de </div>
			<div class="tupuintajeimpresionmain"><?php echo $promedioformacion;?></div>
			<div class="divdepuntajesminimos">Necesitamos conseguir un puntaje de</div>
			<div class="tupuintajeimpresionmain"><?php echo number_format($diferecniapuntos, 2, '.', '');?><span  class="tueyamenspan">en tu examen</span></div>

		</div>
	</div>
	<script>
		var diferenciadepunto = <?php echo $diferecniapuntos;?>;
	</script>
	

	<br><br><br>
	<p class="titutlsopraplaafromamain">Calificaciones de Exámenes</p>
	
<div class="bordercalificadorgris" onclick="iracalificarexamen('<? echo $idiniciosess?>')">Calificar mi examen</div>
	
</div>


<table id="example" class="display nowrap;" style="font-family: 'Gotham-Medium';" width="90%">
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
			<th>Diferencia</th>
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
			<th>Diferencia</th>
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
		$calificacionfinal = $row['primerresultado'];
		$preg_esp = $row['preg_esp'];
		$preg_mat = $row['preg_mat'];
		$pun_esp = $row['pun_esp'];
		$pun_mat = $row['pun_mat'];
		$cal_esp = $row['cal_esp'];
		$cal_mat = $row['cal_mat'];
		$numerodeexamen = $row['numerodeexamen'];

		$direfenciadepuintajeparaimprimir = $diferecniapuntos - $calificacionfinal;
		$divdesiingreso;
		if($diferecniapuntos<=$calificacionfinal){
			$divdesiingreso='<div class="divsiingreso">Admitido</div>';
		}else{
			$divdesiingreso='<div class="divnoingreso">No Admitido</div>';
		}
		$direfenciadepuintajeparaimprimir=$direfenciadepuintajeparaimprimir*-1;
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
			<th>".number_format($direfenciadepuintajeparaimprimir, 2, '.', '')."</th>
			<th>".$divdesiingreso."</th>
	  </tr>";
	}	
	mysqli_close($link);
?>
    </tbody>
</table>

<br><br><br>
	<p class="titutlsopraplaafromamain"></p>




</div>

<div style="background: url('img/slider/promocion.png'); background-size: 100%; padding-top: 60px; padding-bottom: 0px; border-top: 10px solid #B72025;">
				

<?php 

	
	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$query=mysqli_query($link,"SELECT * FROM `fracesmotivadoras` ORDER BY RAND() LIMIT 1");
	$num_rows=mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
	if ($num_rows>0){
		$mensaje  = $row['mesnaje'];
		$autor = $row['autor'];
	}	
	mysqli_close($link);

?>		
		<div class="tetimonisaaseguraingreso" style="background: none;">
			<div class="divinicursodictamen4" style="background: none;">
			<div style="width: 100%; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
			
				<div class="testialum">

              <p class="opniontexlandincur"><?php echo $mensaje ;?></p>
              <p class="personatex">-<?php echo $autor ;?></p>

				</div>
			</div>
		</div>
				</div>
<script>
	 $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                center: true,
                responsiveClass: true,
				  dotsEach:true,
				  autoplay:true,
				  autoplayHoverPause:true,
				  autoplayTimeout:3000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1,
                    loop: true,
                    margin: 0
                  }
                }
              })
            });
</script>
		
		</div>