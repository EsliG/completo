<!DOCTYPE html>
<html>
 <head>
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/menunegro.css">
<?php include("incluciones/widgets.php"); ?>
<?php include("incluciones/menublanc.php"); ?>
</head>
<body>
<?php include("incluciones/analitycsbody.php"); ?> 
<div class="recuadroparaasliderver"></div>
<div class="owl-carousel owl-theme" id="carrulseinicio">
	<div class="item" >
		<img src="img/slider/plataformamain-pc-01.png" class="desksliderindex">
		<img src="img/slider/plataformamain-mov-01.png" class="movilessliderindex">
	</div>
</div>
	
<script>
	$(document).ready(function() {
              $('#carrulseinicio').owlCarousel({
				 center: true,
                responsiveClass: true,
				  dotsEach:true,
				  autoplay:true,
				  autoplayHoverPause:true,
				  nav : false,
				  autoplayTimeout:5000,
                responsive: {
                  0: {
                    items: 1,
					  loop: true
                  },
                  600: {
                    items: 1,
					  loop: true
                  },
                  1000: {
                    items: 1,
                    loop: true
                  }
                }
              })
            });
</script>

<div class="bodyclass" style="background: #fff;">
	<div class="diviniciosss">
		<br><br>
		<center>
		<div class="divloginplataforma">
		<p class="titulosofertaeducativa2" >Usuario</p>
		<input type="text" placeholder="" name="usr" id="usr" class="inputprovini"/>
		<p class="titulosofertaeducativa2" >Contraseña</p>
		<input type="password" placeholder="" name="pass" id="pass" class="inputprovini"/>
		<div id="articulofaltanbase" style=" padding: 10px; width: 80%; background: #BD0003; color: #fff; font-family: impact; display: none; margin-top: 10px; font-size: 12pt;">Porfavor llenar todos los campos</div>
				<div id="usrinvalido" style=" padding: 10px; width: 80%; background: #BD0003; color: #fff; font-family: impact; display: none; margin-top: 10px; font-size: 12pt;">Usuario o contraseña invalido</div>
			<br><br>
				<center>
						<div class="botonregos" onClick="inisesion()">
								Enviar
						</div>
				</center>
			<br><br><br><br><br><br>
		</div>
		</center>
		
	</div>
</div>
<script>
function inisesion(){
		var pass = document.getElementById('pass').value;
		var usr = document.getElementById('usr').value;
		if(pass!="" && usr!=""){
			
			
			
	$.ajax({
        	url: "incluciones/login.php",
			type: "POST",
			data: {pass:pass,usr:usr},
			success: function(response){
				//alert(response);
				if(response==1){
					location.href ="Panel";
				}else{
					$('#usrinvalido').fadeIn('slow');
	 				$('#usrinvalido').delay(3000);
	 				$('#usrinvalido').fadeOut('slow');
				}
				
		    },
		  	error: function(jqXHR, textStatus, errorThrown){
				//alert(jqXHR.status+" | "+textStatus+" | "+errorThrown);
			} 	        
	   });
			
			
			
			}else{
				$('#articulofaltanbase').fadeIn('slow');
	 $('#articulofaltanbase').delay(3000);
	 $('#articulofaltanbase').fadeOut('slow');
				}
	}
</script>
	
<?php include("incluciones/pie.php"); ?>
	
</body>
</html>
