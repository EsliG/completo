<?php 
	include("BDConecciones.php");
	$idiniciosess = $_POST["idalumno"];

	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$query=mysqli_query($link,"select * from usuario where id='".$idiniciosess."'");
	$num_rows=mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
	$nombre;
	if ($num_rows>0){
		$nombre = $row['nombre'];
		$telefono = $row['telefono'];
		
		$telefono = $row['telefono'];
		$correo  = $row['correo'];
		
		
		$imgdefondo = "'data:image/jpeg;base64,".base64_encode( $row['Fotodeperfil'] )."'";
		$fotodeperfilmain = '<div class="divmaindeperfilfoto" style="background-image: url('.$imgdefondo.');">
				</div>';
	}	
	
?>
<img src="img/slider/alumnosbinevenidapc.png" class="desksliderindex">
<img src="img/slider/alumnosbinevenidamov.png" class="movilessliderindex">

<div class="mainparaplataforma">
<p class="titutlsopraplaafromamain">Mi Perfil</p>
	
<div class="recuadro50">
<?php
	echo $fotodeperfilmain;
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

	
</div>

</div>

<div style="background: url('img/slider/promocion.png'); background-size: 100%; padding-top: 60px; padding-bottom: 0px; border-top: 10px solid #B72025;">
				

<?php 

	
	
		$querryfraces = "SELECT * FROM `fracesmotivadoras` ORDER BY RAND() LIMIT 1" ;

	
	$query=mysqli_query($link,$querryfraces);
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