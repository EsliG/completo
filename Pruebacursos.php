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
<div style="background-image: url('img/slider/promocion.png'); background-size: cover;">
<div class="divinicursodictamen3" style="background: none;">
<div style="width: 100%; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
	<div class="cuerpo80" style="margin-top: 0%;
margin-bottom: 0%;">
	<center>
		<p class="index4dictamen" id="mensajepertip"></p>
	</center>
	</div>
	<table class="table" role="table" width="100%">
		<tbody class="tbody" role="rowgroup">
		<tr class="tr" role="row">
			<td class="td"valign="middle" width="50%" style="text-align: center;">
				<p class="tdgrangotneg" style="color: #fff">Cursos de capacitación para<br>ingresar a la <b style="color:#c62828;">UdeG</b></p>
				<img class="cuponimg2" src="img/logos/cuponcurs5.png" >
				<p class="tdgrangotneg2" style="color: #fff">ÚNICOS CURSOS PERSONALIZADOS</p>
				<p class="tdgrangotneg3" style="color: #fff">CON MÁXIMO 12 ALUMNOS POR AULA</p>
			</td>
			<td class="td" valign="middle" width="50%" style="text-align: center;">
			
			<div class="regdispprom">
				<p class="tdgrangot">REGÍSTRATE</p>
				<div class="margindivprov" style="width: 85%;">
	<input type="text" id="nombrepromo" name="nombrepromo" placeholder="Nombre Completo*" class="inputprovini2"/>
	<br><br>
	<input type="text" onKeyPress="return soloNumeros(event)" id="telpromo"  name="telpromo" placeholder="Teléfono*" class="inputprovini2"/>
	<br><br>
	<input type="text"  id="emailpromo" name="emailpromo" width="100%" placeholder="Correo Electrónico*" class="inputprovini2"/>
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
<div id="error2" style="width: 100%; display:none; font-family: GOTHAM-THIN_0; font-weight:bolder; color:#fff;  padding-bottom:2%;  font-size:16px; padding-right:5%;">
llene todos los datos 
</div>
<div id="error3" style="width: 100%; display:none; font-family: GOTHAM-THIN_0; font-weight:bolder; color:#fff;  padding-bottom:2%;  font-size:16px; padding-right:5%;">
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
	if(nombre!="" && telefono!="" && email!=""){ 
		if(validar_email( email )){	
			$.ajax({ 
	 			url: "incluciones/enviarpromocion.php",
    			type: "POST",
        		data: {nombre:nombre,tel:telefono,email:email},
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
			</td>
		</tr>
		</tbody>
	</table>
	</div>
</div>
</div>
<center>
	<div class="cuerpo80" style="margin-bottom: 2%;">
		
		<div class="espaciobr">
			
			<p class="titulosofertaeducativa2" style="position: relative;"><span class="tituosexpregunta1pri">¿</span>POR QUÉ CAPACITARSE CON NOSOTROS<span class="tituosexpregunta2pri">?</span></p>
			
			<table class="table" width="100%">
				<tbody class="tbody">
					<tr class="tr">
						<td class="td" width="33.3%" valign="top">
							<img src="img/logos/ceuni1.png" class="imgatribucapacitarse">
							<p class="titlosatribuceunin">Cursos personalizados</p>
							<p class="cuerpoatribuceunin">Máximo 15 alumnos por aula y asesorías personalizadas extra clase.</p>
						</td>
						<td class="td" width="33.3%" valign="top">
							<img src="img/logos/ceuni2.png" class="imgatribucapacitarse">
							<p class="titlosatribuceunin">Talleres y cursos anti stress</p>
							<p class="cuerpoatribuceunin">Con el taller IQLect y anti stress mejoramos las habilidades y aprendizaje de nuestros alumnos.</p>
						</td>
						<td class="td" width="33.3%" valign="top">
							<img src="img/logos/ceuni3.png" class="imgatribucapacitarse">
							<p class="titlosatribuceunin">Excelencia académica</p>
							<p class="cuerpoatribuceunin">Gracias a nuestro Material Actualizado y Maestros especializados, logramos tu ingreso.</p>
						</td>
						<!--<td class="td" width="25%" valign="top">
							<img src="img/logos/garaatri.png" class="imgatribucapacitarse">
							<p class="titlosatribuceunin">Cursos garantizados</p>
							<p class="cuerpoatribuceunin">Con nuestro curso CE Medic y CE Pro garantizamos 90 puntos en tu examen de admisión.</p>
						</td>-->
					</tr>
				</tbody>
			</table>
		</div>
		
	</div>
	
	
<?php include("incluciones/listadotodosloscursos.php"); ?>
	
<div style="clear:both;"></div>
</center>
<div id="myModal5" class="modal2" style="z-index:10000;">
  <div class="modal-content">
    <center>
    <div style="width: 80%;">
    	<p style="font-size:20px; padding-bottom:1%; color:#B72025; font-family: GOTHAM-THIN_0;">
			Gracias por contactarnos, enviamos tu código promocional a tu correo electrónico.<br>
			Favor de checar tu bandeja de spam.
		</p>
    </div>
    </center>
</div>
</div>

<?php include("incluciones/pie.php"); ?>
	
<style>
	.owl-theme .owl-nav.disabled + .owl-dots {
    margin-top: 0px;
}
	.owl-theme .owl-dots .owl-dot span {
    width: 10px;
    height: 10px;
    margin: 5px 7px;
    background: #515151;
    display: block;
    -webkit-backface-visibility: visible;
    transition: opacity .2s ease;
    border-radius: 30px;

}
	.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    background: #c62828;

}
</style>
</body>
</html>
