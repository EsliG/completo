<?php 
	include("BDConecciones.php");
	$idiniciosess = $_POST["idalumno"];

	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$query=mysqli_query($link,"select * from usuario where id='".$idiniciosess."'");
	$num_rows=mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
	if ($num_rows>0){
		$horariodeclases  = $row['horariodeclases'];
		
		$formatodeclases = $row['modalidadclases '];
		
		if(date("l")=="Sunday"||date("l")=="Saturday"){
			$formatodediasdeclases = "fines";
		}
		else{
			$formatodediasdeclases = "intersemanal";
		}
		
		
		if($formatodediasdeclases=="intersemanal"&& $formatodeclases="1"){
			$query2=mysqli_query($link,"select * from horariosdeclase where id='".$horariodeclases."'");
			$num_rows2=mysqli_num_rows($query2);
			$row2=mysqli_fetch_array($query2);
			if ($num_rows2>0){
				$horario  = $row2['hora'];
			}
			$paraimoprimirdivs;
			
			$paracompararfechas = date("Y-m-d");
			
			
			$consulta3 = "SELECT * FROM clasesenlinea where idhorario  = '".$horariodeclases."' AND fecha >='$paracompararfechas' ";
			$resultado3 = $link->query($consulta3);
			while($row3 = $resultado3->fetch_assoc()) {
				$iddecclasenelinea = $row3['id'] ; 
				$titulodeclases =$row3['titulo'] ;
				$linkdezoom =$row3['enlacedezoom'] ;
				
				$paraimoprimirdivs='<div onclick="desplegarclasemain('.$iddecclasenelinea .')" class="mainclasedeinicioonline"> <div class="titulodeclaseenlinea">'.$titulodeclases.'</div>  <div class="titulodehorairomainclaseonline">Horario de inicio <br>'.$horario.'</div>  </div> <div class="informaciondesplegadadeclaseonluine" id="infoparadesplegar'.$iddecclasenelinea.'"> La clase se imparte en linea , enc uanto este disponible el link de inviatacion para la clase , te aparecera en la parte inferior <br> <a class="linkdezollmainhref" href="'.$linkdezoom.'" target="_blank">'.$linkdezoom.'</a> </div>';
			}
			
		}

	}	
	mysqli_close($link);
?>
<img src="img/slider/clasesonlinesliderpc.png" class="desksliderindex">
<img src="img/slider/clasesonlineslidermov.png" class="movilessliderindex">

<div class="mainparaplataforma">
<p class="titutlsopraplaafromamain">PRÓXIMAS CLASES</p>
	
	<?php echo $paraimoprimirdivs; ?>

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