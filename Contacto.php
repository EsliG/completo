<!DOCTYPE html>
<html>
 <head>
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/menuroj.css">
<?php include("incluciones/widgets.php"); ?> 
<?php include("incluciones/menublanc.php"); ?>
</head>
<body>
	
<?php include("incluciones/analitycsbody.php"); ?> 	
<div id="myModal5" class="modal2" style="z-index:10000;">
  <div class="modal-content">
    <center>
    <div style="width: 80%;">
    	<p style="font-size:20px; padding-bottom:1%; color:#B72025; font-family: GOTHAM-THIN_0;">
			Gracias por contactarnos.
		</p>
    </div>
    </center>
</div>
</div>
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
	<input type="text" onKeyPress="return soloNumeros(event)" id="telpromo"  name="telpromo" placeholder="Teléfono*" class="inputprovini2"/>
	<br><br>
	<input type="text"  id="emailpromo" name="emailpromo" width="100%" placeholder="Correo Electrónico*" class="inputprovini2"/>
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
<table class="tablecurs">
	<tr>
		<td width="50%">
					<table style="width: 100%;">
						<tr>
							<td style="width: 20%;">
								<img class="blancimgcurs" src="img/logos/whatsblanc.png">
							</td>
							<td style="width: 80%;">
								<p class="subtitatriinic">
								33 3138 0780
								</p>
							</td>
						</tr>
					</table>
					</td>
		<td width="50%">
						<table style="width: 100%;">
						<tr>
							<td style="width: 20%;">
								<img class="blancimgcurs" src="img/logos/telefonblan.png">
							</td>
							<td style="width: 80%;">
								<p class="subtitatriinic">
								(33) 2300 3952
								</p>
							</td>
						</tr>
					</table>
					</td>
	</tr>
</table>	
		
		
		
			</div>
<table width="90%">
<tr>
<td width="100%">
<div style="width:100%; text-align:center;">
<div id="error2" style="width: 100%; display:none; font-family: GOTHAM-THIN_0; font-weight:bolder; color:#c62828;  padding-bottom:2%;  font-size:16px; padding-right:5%;">
llene todos los datos 
</div>
<div id="error3" style="width: 100%; display:none; font-family: GOTHAM-THIN_0; font-weight:bolder; color:#c62828;  padding-bottom:2%;  font-size:16px; padding-right:5%;">
Correo electrónico invalido
</div>
<div id="ect2" style="width:100%; display:none; background:#FF0004; color:#FFFFFF; text-align:center; padding:2%; font-size:16px; font-family:din;">
Ocurrio un error al enviar el correo
 </div>
<script>
function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}
function validar_email( email ) {
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
function siacetadoprom(){
	var nombre = document.getElementById("nombrepromo").value ;
	var telefono = document.getElementById("telpromo").value ;
	var email = document.getElementById("emailpromo").value ;
	var mensaje = document.getElementById("mensaje").value ;
	if(nombre!="" && telefono!="" && email!=""&& mensaje!=""){ 
		if(validar_email( email )){	
			$.ajax({ 
	 			url: "incluciones/contactoenviar.php",
    			type: "POST",
        		data: {nombre:nombre,tel:telefono,email:email,mensaje:mensaje},
        		success: function(response){
			    	$('#myModal5').fadeIn('slow');
	 				$('#myModal5').delay(4000);
	 				$('#myModal5').fadeOut('slow');
        		}
			});
		}else{ 
    		$('#error3').fadeIn('slow');
			$('#error3').delay(3000);
			$('#error3').fadeOut('slow');
		}
	}else{
		$('#error2').fadeIn('slow');
		$('#error2').delay(3000);
		$('#error2').fadeOut('slow');
	}
}	
</script>
</div>
</td>
</tr>
</table>
			</div>
</div>
	</div>
</div>

<?php include("incluciones/pie.php"); ?>
</body>
</html>
