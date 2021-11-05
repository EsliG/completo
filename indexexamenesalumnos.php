<img src="img/slider/examenesplataformapc.png" class="desksliderindex">
<img src="img/slider/examenesplataformamovil.png" class="movilessliderindex">


<div id="lightboxintrucciones" class="mainlightboxexamen" style="display: none;">
	<div id="contenidoplightbox" class="lightboxcontenidoexamen">
	</div>
</div>

<div id="lightboxintrucciones2" class="mainlightboxexamen2" style="display: none;">
	<div id="contenidoplightbox2" class="lightboxcontenidoexamen2">
	</div>
</div>

<div class="mainparaplataforma">
<p class="titutlsopraplaafromamain">EXAMENES SIMULACRO</p>
	
<div class="espaciparaexamenes" >
	
	<?php
	session_start();
		include("BDConecciones.php");
	
		$iddeusuario = $_SESSION["id"];
	
		$puntajesminimos = $_SESSION["puntajeminimo"];
		$promedio = $_SESSION["promedio"];
	
		$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
		$consulta = "SELECT * FROM Int_cantidad_examenes_simulacro";
		$resultado = $link->query($consulta);
		
		
		
		while($row = $resultado->fetch_assoc()) {
			
			$diferecnia = $puntajesminimos - $promedio;
			
			$nombre = $row['nombre'];
			$pdf = $row['pdf'];
			
			$parte1 = $row['parte1'];
			$parte2 = $row['parte2'];
			$parte3 = $row['parte3'];
			
			
			$hojaderespuesta = $row['hojaderespuesta'];
			$idquiz = $row['id'];
			$solucionario = $row['solucionario'];
			 
			
			$puntajedeexamenimprimir="-";
			
			
			$consulta2 = "SELECT * FROM resutadosexamenes where idusuiario  = '".$iddeusuario."' AND idexamen='".$idquiz."' ";
			$resultado2 = $link->query($consulta2);

			while($row2 = $resultado2->fetch_assoc()) {
				
				$puntajedeexamenimprimir= $row2['ultimoresultado'];
				$diferecnia = $diferecnia-$puntajedeexamenimprimir;
			}
			
			
			echo '  
	
	<div class="maindeexamenpararecuadro">
	<div class="espacioparatitlodeescamen">
    	<div class="titulodenombretext">'.$nombre.'</div>
	</div>
	
	<p id="iddeexamen'.$idquiz.'" style="display:none;">'.$pdf.'</p>
	<p id="nombresimulacro'.$idquiz.'" style="display:none;">'.$nombre.'</p>
	
	<p id="parte1'.$idquiz.'" style="display:none;">'.$parte1.'</p>
	<p id="parte2'.$idquiz.'" style="display:none;">'.$parte2.'</p>
	<p id="parte3'.$idquiz.'" style="display:none;">'.$parte3.'</p>
	
	<p id="idhojadecontestacion'.$idquiz.'" style="display:none;">'.$hojaderespuesta.'</p>
	<p id="solucionario'.$idquiz.'" style="display:none;">'.$solucionario.'</p>
	
	<div class="maincalificador"  OnClick="primerempezarexamen('.$idquiz.')">Iniciar examen</div>
	<div class="recuadrocalificacionmain">Ultima Calificacion <br> <span class="submaincalexampla">'.bcdiv($puntajedeexamenimprimir, '1', 2).'</span></div>
	<div class="recuadrocalificacionmain">Diferencia para lograr tu puntaje minimo <br><span  class="submaincalexampla">'.bcdiv($diferecnia, '1', 2).'</span></div>
	<div class="bordercalificadorgris" onclick="iracalificarexamen('.$idquiz.')">Calificar mi examen</div>
	<div class="mainsolucionario" onclick="solucionardisplay('.$idquiz.')" >Solucionario</div>
	</div>
	';
		}
	mysqli_close($link);
		?>
	
	<p class="titutlsopraplaafromamain">CE QUIZES DE ESPAÑOL</p>

<ul class="honeycomb" lang="es">
	
	<?php
		$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
		$consulta = "SELECT * FROM quizes WHERE tipos  = '1'";
		$resultado = $link->query($consulta);

		
		while($row = $resultado->fetch_assoc()) {
			$nombre = $row['titulo'];
			
			$descripcion = $row['descripcion'];
			
			$idquiz = $row['id'];
			
			echo '  <li class="honeycomb-cell"  onClick="emopezarquiz('.$idquiz.');">
			<p id="descripcion'.$idquiz.'" style="display:none;">'.$descripcion.'</p>
    <img class="honeycomb-cell__image" src="img/slider/fondoexamenes.png">
    <div class="honeycomb-cell__title">'.$nombre.'</div>
	
	
  </li>';
		}
	
	mysqli_close($link);
		?>



  <li class="honeycomb-cell honeycomb__placeholder"></li>
</ul>
	
<p class="titutlsopraplaafromamain">CE QUIZES DE MATEMÁTICAS</p>

<ul class="honeycomb" lang="es">
	
	<?php
		$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
		$consulta = "SELECT * FROM quizes WHERE tipos  = '2'";
		$resultado = $link->query($consulta);

		
		while($row = $resultado->fetch_assoc()) {
			$nombre = $row['titulo'];
			
			$descripcion = $row['descripcion'];
			
			$idquiz = $row['id'];
			
			echo '  <li class="honeycomb-cell"  onClick="emopezarquiz('.$idquiz.');">
			<p id="descripcion'.$idquiz.'" style="display:none;">'.$descripcion.'</p>
    <img class="honeycomb-cell__image" src="img/slider/fondoexamenes.png">
    <div class="honeycomb-cell__title">'.$nombre.'</div>
	
	
  </li>';
		}
	
	mysqli_close($link);
		?>



  <li class="honeycomb-cell honeycomb__placeholder"></li>
</ul>
	
	
</div>
	
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
            })
</script>
		
		</div>

	

	