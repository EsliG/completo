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
			Gracias por contactarnos, enviamos tu código promocional a tu correo electrónico.<br>
			Favor de checar tu bandeja de spam.
		</p>
    </div>
    </center>
</div>
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
</script>



<div class="divinicursodictamen" style="background-image: url(img/slider/indexdictamen.png)">
<div style="width: 100%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);">
	<table class="tablecurses" width="100%">
		<tr>
			<td valign="middle" width="100%" style="text-align: center;">
				<p class="index1dictamen">Consulta los resultados del</p>
				<p class="index2dictamen">DICTAMEN</p>
				<p class="index3dictamen">DE ADMISIÓN 2019 A</p>
				<img class="imgdictamen" src="img/logos/flechadictamaenaba.png" >
			</td>
		</tr>
	</table>
	</div>
</div>




<div id="temporaldeshabilitado" style="display: none;">
<div id="iniciodiv" class="divdictamencuerpo">
	<p class="index5dictamen">ESTAMOS CONTIGO</p>
	<p class="index4dictamen">Ingresa tú numero de aspirante</p>
	<div class="divreginput">
		<input type="text" id="numeroderegistro" name="numeroderegistro" placeholder="No. de Registro*" class="inputprovini"/>
	</div>
	<div class="divbotondictamen">
		<button type="button" class="botondictamenes" onClick="enviarpromocion()" style="">
			Consultar
		</button>
	</div>
</div>
<div id="felicidades" class="divfelsec">
	<img class="fellg" src="img/logos/felicidades.png">
	<p class="index5dictamen">	
	Fuiste aceptado en 
	</p>
	<p id="carrerfelicidadesa" class="index4dictamen">	
	</p>
	<b class="index6dictamen">De parte de todo el equipo CE UNI, <br>te deseamos mucho éxito en esta nueva etapa.</b>
	<br>
	<img class="imgdictamen2" src="img/logos/flechadictamaenaba.png" >
	<br>
	
</div>
<div id="losiento" style="display: none; text-align: center;">
<div class="divanocredi">
	<br><br>
	<p class="index9dictamen">	
	NO ACEPTADO 
	</p>
	<b class="index6dictamen">Nunca renuncies a tus sueños, 
siempre <br> es demasiado pronto para darse por vencido.</b>
	<p class="index6dictamen">	
		Cambiemos juntos este status a <b class="index9dictamen">Admitido</b>
	</p>
	<br>
	<img class="imgdictamen2" src="img/logos/flechadictamaenaba.png" >
	<br>
	<br>
</div>
	
</div>
<div id="infogeneral" style="display: none; text-align: center">
<div class="divinicursodictamen2" style="background-image: url(img/slider/collaguedic.png)">
<div style="width: 100%; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
	<div class="tablecurses">
		
	</div>
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
				<img class="cuponimg" src="img/logos/cupon.png" >
			</td>
			<td class="td" valign="middle" width="50%" style="text-align: center;">
			<div class="regdisppron">
				<div class="margindivprov">
	<input type="text" id="nombrepromo" name="nombrepromo" placeholder="Nombre Completo*" class="inputprovini"/>
	<br><br>
	<input type="text" onKeyPress="return soloNumeros(event)" id="telpromo"  name="telpromo" placeholder="Teléfono*" class="inputprovini"/>
	<br><br>
	<input type="text"  id="emailpromo" name="emailpromo" width="100%" placeholder="Correo Electrónico*" class="inputprovini"/>
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
<table width="100%" style=" padding-top:1%;  padding-bottom:3%;">
<tr>
<td width="100%">
<button type="button" class="botonregos" onClick="siacetadoprom()" style="font-size:2.5vh; padding-bottom:3%; padding-top:3%; padding-left:2%; text-align:100%; width:60%; padding-right:2%;">
 Informes 
</button>
</td>
</tr>
</table>
<script>
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
<br><br>
<p class="index4dictamen">Nuestro Próximos Cursos </p>
<div class="cuerpo80" style="margin-top: 0%;">
<table class="table" role="table" width="100%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td valign="top" class="td" width="25%">
						<table class="table1" onClick="infocurso1()">
							<tr>
								<td class="tdlogoinf">
									<img class="lgmed" src="img/logos/cemedic.png">
								</td>
								<td class="tdtex">
									CE Medic Pro
								</td>
								<td class="tddown">
									<img id="felcha1" class="lgmed" src="img/logos/minus.png">
								</td>
							</tr>
						</table> 
						<div style="position: relative; width: 100%;">
							<div id="infocursos1" class="divinfocurs1">
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													INTERSEMANAL<br>
													DURACION 13 SEMANAS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 11 de febrero<br>
													Fecha de término: 17 de mayo<br>
												</p>
											</div>
											<div style="text-align: right; padding-right: 5%;">
												<a href="CEMedicPro">
													<p class="textwhitinfo">
														más información
													</p>
												</a>
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													FINES DE SEMANA<br>
													DURACION 12 SÁBADOS Y 12 DOMINGOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 16 de febrero<br>
													Fecha de término: 12 de mayo<br>
												</p>
											</div>
											<div style="text-align: right; padding-right: 5%;">
												<a href="CEMedicPro?Curso=FinesdeSemana">
													<p class="textwhitinfo">
														más información
													</p>
												</a>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="25%">
						<table class="table2" onClick="infocurso2()">
							<tr>
								<td class="tdlogoinf">
									<img class="lgmed" src="img/logos/ceproadvance.png">
								</td>
								<td class="tdtex">
									CE Pro Advance
								</td>
								<td class="tddown">
									<img id="felcha2" class="lgmed" src="img/logos/plus.png">
								</td>
							</tr>
						</table>
						<div style="position: relative; width: 100%;">
							<div id="infocursos2" class="divinfocurs2">
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													INTERSEMANAL<br>
													DURACION 11 SEMANAS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 25 de febrero<br>
													Fecha de término: 17 de mayo<br>
												</p>
											</div>
											<div style="text-align: right; padding-right: 5%;">
												<a href="CEProAdvance">
													<p class="textwhitinfo">
														más información
													</p>
												</a>
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													FINES DE SEMANA<br>
													DURACION 10 SÁBADOS Y 10 DOMINGOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 02 de marzo<br>
													Fecha de término: 12 de mayo<br>
												</p>
											</div>
											<div style="text-align: right; padding-right: 5%;">
												<a href="CEProAdvance?Curso=FinesdeSemana">
													<p class="textwhitinfo">
														más información
													</p>
												</a>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="25%">
						<table class="table3" onClick="infocurso3()">
							<tr>
								<td class="tdlogoinf">
									<img class="lgmed" src="img/logos/unex.png">
								</td>
								<td class="tdtex">
									UNEX Training
								</td>
								<td class="tddown">
									<img id="felcha3" class="lgmed" src="img/logos/plus.png">
								</td>
							</tr>
						</table>
						<div style="position: relative; width: 100%;">
							<div id="infocursos3" class="divinfocurs3">
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													INTERSEMANAL<br>
													DURACION 12 SEMANAS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 18 de febrero<br>
													Fecha de término: 17 de mayo<br>
												</p>
											</div>
											<div style="text-align: right; padding-right: 5%;">
												<a href="UNEXTraining">
													<p class="textwhitinfo">
														más información
													</p>
												</a>
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													FINES DE SEMANA<br>
													DURACION 11 SÁBADOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 23 de febrero<br>
													Fecha de término: 12 de mayo<br>
												</p>
											</div>
											<div style="text-align: right; padding-right: 5%;">
												<a href="UNEXTraining?Curso=FinesdeSemana">
													<p class="textwhitinfo">
														más información
													</p>
												</a>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="25%">
						<table class="table4" onClick="infocurso4()">
							<tr>
								<td class="tdlogoinf">
									<img class="lgmed" src="img/logos/unex.png">
								</td>
								<td class="tdtex">
									UNEX
								</td>
								<td class="tddown">
									<img id="felcha4" class="lgmed" src="img/logos/plus.png">
								</td>
							</tr>
						</table>
						<div style="position: relative; width: 100%;">
							<div id="infocursos4" class="divinfocurs4">
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													INTERSEMANAL<br>
													DURACION 10 SEMANAS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 04 de marzo<br>
													Fecha de término: 17 de mayo<br>
												</p>
											</div>
											<div style="text-align: right; padding-right: 5%;">
												<a href="UNEX">
													<p class="textwhitinfo">
														más información
													</p>
												</a>
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													FINES DE SEMANA<br>
													DURACION 09 SÁBADOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 09 de marzo<br>
													Fecha de término: 12 de mayo<br>
												</p>
											</div>
											<div style="text-align: right; padding-right: 5%;">
												<a href="UNEX?Curso=FinesdeSemana">
													<p class="textwhitinfo">
														más información
													</p>
												</a>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
<div class="espacioblanc"></div>
<script>
			function infocurso1 (){
				if(document.getElementById("infocursos1").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("infocursos1").style.display="none";
						document.getElementById("felcha1").src="img/logos/plus.png";
					}
				}else{
					document.getElementById("infocursos1").style.display="block";
					document.getElementById("felcha1").src="img/logos/minus.png";
					document.getElementById("infocursos2").style.display="none";
					document.getElementById("felcha2").src="img/logos/plus.png";
					document.getElementById("infocursos3").style.display="none";
					document.getElementById("felcha3").src="img/logos/plus.png";
					document.getElementById("infocursos4").style.display="none";
					document.getElementById("felcha4").src="img/logos/plus.png";
				}
			}
			function infocurso2 (){
				if(document.getElementById("infocursos2").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("infocursos2").style.display="none";
						document.getElementById("felcha2").src="img/logos/plus.png";
					}
				}else{
					document.getElementById("infocursos2").style.display="block";
					document.getElementById("felcha2").src="img/logos/minus.png";
					document.getElementById("infocursos1").style.display="none";
					document.getElementById("felcha1").src="img/logos/plus.png";
					document.getElementById("infocursos3").style.display="none";
					document.getElementById("felcha3").src="img/logos/plus.png";
					document.getElementById("infocursos4").style.display="none";
					document.getElementById("felcha4").src="img/logos/plus.png";
				}
			}
			function infocurso3 (){
				if(document.getElementById("infocursos3").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("infocursos3").style.display="none";
						document.getElementById("felcha3").src="img/logos/plus.png";
					}
				}else{
					document.getElementById("infocursos3").style.display="block";
					document.getElementById("felcha3").src="img/logos/minus.png";
					document.getElementById("infocursos2").style.display="none";
					document.getElementById("felcha2").src="img/logos/plus.png";
					document.getElementById("infocursos1").style.display="none";
					document.getElementById("felcha1").src="img/logos/plus.png";
					document.getElementById("infocursos4").style.display="none";
					document.getElementById("felcha4").src="img/logos/plus.png";
				}
			}
			function infocurso4 (){
				if(document.getElementById("infocursos4").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("infocursos4").style.display="none";
						document.getElementById("felcha4").src="img/logos/plus.png";
					}
				}else{
					document.getElementById("infocursos4").style.display="block";
					document.getElementById("felcha4").src="img/logos/minus.png";
					document.getElementById("infocursos2").style.display="none";
					document.getElementById("felcha2").src="img/logos/plus.png";
					document.getElementById("infocursos3").style.display="none";
					document.getElementById("felcha3").src="img/logos/plus.png";
					document.getElementById("infocursos1").style.display="none";
					document.getElementById("felcha1").src="img/logos/plus.png";
				}
			}
		
		</script>
</div>	
</div>
<script>
function enviarpromocion(){
	var regaspi = document.getElementById("numeroderegistro").value;
	$.ajax({ 
	 			url: "incluciones/aspirantes.php",
    			type: "POST",
        		data: {regaspi:regaspi},
        		success: function(response){
					if(response=="noadmitido"){
						fbq('track', 'NoAceptado');
						document.getElementById("losiento").style.display="block";
						document.getElementById("felicidades").style.display="none";
						document.getElementById("infogeneral").style.display="block";
						document.getElementById("mensajepertip").innerHTML="Regístrate para recibir este descuento";
					}else{
						fbq('track', 'SiAceptado');
						document.getElementById("felicidades").style.display="block";
						document.getElementById("losiento").style.display="none";
						document.getElementById("infogeneral").style.display="block";
						document.getElementById("carrerfelicidadesa").innerHTML = response;
						document.getElementById("mensajepertip").innerHTML="Registra a un amigo para que reciba este descuento";
					}
        		}
			});
}
</script>
	
</div>


<div id="contador">
	<center>
<br>
<br>
	<p class="index5dictamen">Los resultado se publicaran en:</p>
<p class="index4dictamen" id="demo"></p>
<br>
<br>
</center>
</div>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 14, 2019 01:15:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days +" dias "+ hours + " horas " + minutes + " minutos " + seconds + " segundos ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("temporaldeshabilitado").style.display="block";
	document.getElementById("contador").style.display="none";
  }
}, 1000);
</script>
<?php 
$v1=$_GET['prueb'];
if($v1 =="si"){
	echo "
	 <script language='javascript'>
	  document.getElementById('temporaldeshabilitado').style.display = 'block';
	 document.getElementById('contador').style.display = 'none';
    </script>
	 ";
	}
?>


<?php include("incluciones/pie.php"); ?>

</body>
</html>
