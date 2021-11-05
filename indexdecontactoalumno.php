<?php 

session_start();

include("BDConecciones.php");
	$idiniciosess = $_SESSION["id"];

	
	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$query=mysqli_query($link,"select * from usuario where id='".$idiniciosess."'");
	$num_rows=mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
	if ($num_rows>0){
		$correo  = $row['correo'];
		
	echo"<script> var correoelectronico = '".$correo."';</script>";
	}	
	mysqli_close($link);

?>
<img src="img/slider/contactosliderpc.png" class="desksliderindex">
<img src="img/slider/contactoslidermov.png" class="movilessliderindex">


<div class="divinicursodictamen3con2" style="background-image: url(img/slider/collaguedic.png);">
<div style="width: 100%; text-align: center; position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%);">
	<p class="tdgrangotneg" style="color:#c62828;">
		CONTÁCTANOS
	</p><br>
<div class="divcontacto" style="">
	<div class="regdispprom" style="width: 90%; text-align: center; padding-top: 5%; border-radius: 10px;">
				<p class="tdgrangot">Estamos para ayudarte</p>
				<div class="margindivprov" style="width: 85%;">
	<input type="text" id="nombrepromo" name="nombrepromo" placeholder="Nombre Completo*" class="inputprovini2"/>
	<br><br>
	<textarea id="mensaje" name="mensaje" placeholder="Comentario o duda" class="inputprovini2"></textarea>
</div>
			<div style="width: 90%">
				<table width="100%">
<tr>
<td width="100%">
<button type="button" class="botonregosaseg" onClick="siacetadoprom()" style="font-size:2.5vh; padding-bottom:3%; padding-top:3%; padding-left:2%; text-align:100%; width:60%; padding-right:2%; margin-top: 0;">
 ENVIAR 
</button>
</td>
</tr>
</table>
<br>
</div>
<table width="90%">
<tr>
<td width="100%">
<div style="width:100%; text-align:center;">
<div id="error2" style="width: 100%; display:none; font-family: GOTHAM-THIN_0; font-weight:bolder; color:#fff;  padding-bottom:2%;  font-size:16px; padding-right:5%;">
llene todos los datos 
</div>
<div id="error3" style="width: 100%; display:none; font-family: GOTHAM-THIN_0; font-weight:bolder; color:#c62828;  padding-bottom:2%;  font-size:16px; padding-right:5%;">
Correo electrónico invalido
</div>
<div id="ect2" style="width:100%; display:none; background:#FF0004; color:#FFFFFF; text-align:center; padding:2%; font-size:16px; font-family:din;">
Ocurrio un error al enviar el correo
 </div>

</div>
</td>
</tr>
</table>
			</div>
</div>
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
            });
</script>
		
		</div>