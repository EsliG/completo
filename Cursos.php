<!DOCTYPE html>
<html>
 <head>
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/menuroj.css">
<?php include("incluciones/widgets.php"); ?> 
<?php include("incluciones/menublanc.php"); ?>
</head>
<body>

<div class="divinicursodictamen3" style="background-image: url(img/slider/collaguedic.png)">
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
				<p class="tdgrangotneg">Cursos de capacitación para<br>ingerar a la <b style="color:#c62828;">UdeG</b></p>
				<img class="cuponimg2" src="img/logos/cuponcurs.png" >
				<p class="tdgrangotneg2">ÚNICOS CURSOS PERSONALIZADOS</p>
				<p class="tdgrangotneg3">CON MÁXIMO 15 ALUMNOS POR AULA</p>
			</td>
			<td class="td" valign="middle" width="50%" style="text-align: center;">
			
			<div class="regdispprom">
				<p class="tdgrangot">REGISTRATE</p>
				<div class="margindivprov" style="width: 85%;">
	<input type="text" id="nombrepromo" name="nombrepromo" placeholder="Nombre Completo*" class="inputprovini2"/>
	<br><br>
	<input type="text" onKeyPress="return soloNumeros(event)" id="telpromo"  name="telpromo" placeholder="Teléfono*" class="inputprovini2"/>
	<br><br>
	<input type="text"  id="emailpromo" name="emailpromo" width="100%" placeholder="Correo ElectrÃƒÂ³nico*" class="inputprovini2"/>
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
	if(nombre!="" && telefono!="" && email!=""){ 
		if(validar_email( email )){	
			$.ajax({ 
	 			url: "incluciones/enviarpromocion.php",
    			type: "POST",
        		data: {nombre:nombre,tel:telefono,email:email},
        		success: function(response){
					//alert(response);
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

<div class="rojcurslan">
			<p class="titulotexamaricurs">¿POR QUÉ CAPACITARSE CON NOSOTROS?</p>
			<div class="atributosdesk">
				<div class="paddincurs">
				<table class="table" role="table" width="70%">
					<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td valign="top" class="td" width="33%" style="">
						<div class="divcurslan">
							<center>
						<img class="atrilg" src="img/logos/curs1.png">
						
							<p class="titatriinic">Más de 10 años</p>
							<p class="subtitatriiniccur">de experiencia en el mercado</p>
						</center>
						</div>
						
						
					</td>
					<td valign="top" class="td" width="33%" style="">
					<div class="divcurslan">
					<center>
						<img class="atrilg" src="img/logos/curs2.png">
						
							<p class="titatriinic">Clases personalizadas</p>
							<p class="subtitatriiniccur">Máximo 15 alumnos por aula</p>
						</center>
						</div>
					</td>
					<td valign="top" class="td" width="33%" style="">
					<div class="divcurslan">
						<center>
						<img class="atrilg" src="img/logos/curs3.png">
						
							<p class="titatriinic">Taller de lectura Rápida</p>
							<p class="subtitatriiniccur">sistema de entrenamiento avanzado</p>
						</center>
						</div>
					</td>
					
				</tr>
				<tr class="tr" role="row">
					<td valign="top" class="td" width="33%" style="">
						<div class="divcurslan">
							<center>
						<img class="atrilg" src="img/logos/curs4.png">
						
							<p class="titatriinic">Maestros Master Training</p>
							<p class="subtitatriiniccur">Más de 6 al experiencia </p>
						</center>
						</div>
						
						
					</td>
					<td valign="top" class="td" width="33%" style="">
					<div class="divcurslan">
					<center>
						<img class="atrilg" src="img/logos/curs5.png">
						
							<p class="titatriinic">Material Didáctico</p>
							<p class="subtitatriiniccur">Totalmente actualizado</p>
						</center>
						</div>
					</td>
					<td valign="top" class="td" width="33%" style="">
					<div class="divcurslan">
						<center>
						<img class="atrilg" src="img/logos/curs6.png">
						
							<p class="titatriinic">Ubicación</p>
							<p class="subtitatriiniccur">5 sedes en Guadalajara</p>
						</center>
						</div>
					</td>
				</tr>
			</tbody>
				</table>
			</div>
			</div>
			<div class="atributosmov">
				<div class="paddincurs">
				<table class="tablecurs2int">
				<tbody>
				<tr>
					<td valign="top" width="50%">
						<div class="divcurslan">
							<center>
						<img class="atrilg" src="img/logos/curs1.png">
						
							<p class="titatriinic">Más de 10 años</p><br>
							<p class="subtitatriiniccur">de experiencia en el mercado</p>
						</center>
						</div>
						
						
					</td>
					<td valign="top" width="50%">
					<div class="divcurslan">
					<center>
						<img class="atrilg" src="img/logos/curs2.png">
						
							<p class="titatriinic">Clases personalizadas</p>
							<p class="subtitatriiniccur">Máximo 15 alumnos por aula</p>
						</center>
						</div>
					</td>
				</tr>
				<tr>
					<td valign="top" width="50%">
					<div class="divcurslan">
						<center>
						<img class="atrilg" src="img/logos/curs3.png">
						
							<p class="titatriinic">Taller de lectura Rápida</p>
							<p class="subtitatriiniccur">sistema de entrenamiento avanzado</p>
						</center>
						</div>
					</td>
					<td valign="top" width="50%">
						<div class="divcurslan">
							<center>
						<img class="atrilg" src="img/logos/curs4.png">
						
							<p class="titatriinic">Maestros Master Training</p>
							<p class="subtitatriiniccur">Más de 6 al experiencia </p>
						</center>
						</div>
						
						
					</td>
				</tr>
				<tr>
					<td valign="top" width="50%">
					<div class="divcurslan">
					<center>
						<img class="atrilg" src="img/logos/curs5.png">
						
							<p class="titatriinic">Material Didáctico</p>
							<p class="subtitatriiniccur">Totalmente actualizado</p>
						</center>
						</div>
					</td>
					<td valign="top" width="50%">
					<div class="divcurslan">
						<center>
						<img class="atrilg" src="img/logos/curs6.png">
						
							<p class="titatriinic">Ubicación</p>
							<p class="subtitatriiniccur">5 sedes en Guadalajara</p>
						</center>
						</div>
					</td>
				</tr>
				</tbody>
				</table>
			</div>
			</div>
		</div>
<center>
<div class="cuerpo80">
		<p class="rojotitulocurslandin">TENEMOS UN CURSO IDEAL PARA TI</p>
		<p class="ceistitulocurslandin">¿A DÓNDE QUIERES INGRESAR?</p>
		<table class="tablebotonescurs">
			<tr>
				<td width="50%">
					<button class="prepabtncurs" onClick="prepaclick()">Preparatoria</button>
				</td>
				<td width="50%">
					<button class="unibtncurs" onClick="univerclick()">Licenciatura</button>
				</td>
			</tr>
		</table>
		
		<div id="cursoslicenciatura" style="display: none;">
			<div class="curslandingdesk">
			<table class="table" role="table" width="100%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td valign="top" class="td" width="50%">
						<div style="position: relative;">
							<img src="img/logos/cemedic.png" class="imgsrccursimg">
						</div>
						<div class="divcolordeskcursos"  style="background:#B72025;">
						<p class="textwhitinfotitulo">CE Medic Pro</p>
							<table width="100%">
								<tr>
									<td width="50%" valign="top">
										<div class="margininf">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													INTERSEMANAL<br>
													DURACION 13 SEMANAS<br><br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio:<br>25 de febrero<br><br>
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
									<td width="50%" valign="top">
										<div style="text-align: left;">
												<p class="textwhitinfo">
													FINES DE SEMANA<br>
													DURACION 12 SÁBADOS Y 12 DOMINGOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio:<br>02 de marzo<br><br>
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
							</table>
						</div>
					</td>
					<td valign="top" class="td" width="50%">
						<div style="position: relative;">
							<img src="img/logos/ceproadvance.png" class="imgsrccursimg">
						</div>
						<div class="divcolordeskcursos" style="background:#C62828;">
							<p class="textwhitinfotitulo">CE Pro Advance</p>
							<table width="100%">
								<tr>
									<td width="50%" valign="top">
										<div class="margininf">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													INTERSEMANAL<br>
													DURACION 11 SEMANAS<br><br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio:<br>11 de marzo<br><br>
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
									<td width="50%" valign="top">
										<div style="text-align: left;">
												<p class="textwhitinfo">
													FINES DE SEMANA<br>
													DURACION 10 SÁBADOS Y 10 DOMINGOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio:<br>16 de marzo<br><br>
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
							</table>
						</div>
					</td>
				</tr>
				<tr class="tr" role="row">
					<td valign="top" class="td" width="50%">
						<div style="position: relative;">
							<img src="img/logos/unex.png" class="imgsrccursimg">
						</div>
						<div class="divcolordeskcursos"  style="background:#F57C00;">
						<p class="textwhitinfotitulo">UNEX Training</p>
							<table width="100%">
								<tr>
									<td width="50%" valign="top">
										<div class="margininf">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													INTERSEMANAL<br>
													DURACION 12 SEMANAS<br><br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio:<br>04 de marzo<br><br>
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
									<td width="50%" valign="top">
										<div style="text-align: left;">
												<p class="textwhitinfo">
													FINES DE SEMANA<br>
													DURACION 13 SÁBADOS o DOMINGOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio:<br>23 de febrero<br><br>
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
							</table>
						</div>
					</td>
					<td valign="top" class="td" width="50%">
						<div style="position: relative;">
							<img src="img/logos/unex.png" class="imgsrccursimg">
						</div>
						<div class="divcolordeskcursos" style="background:#f39535;">
							<p class="textwhitinfotitulo">UNEX</p>
							<table width="100%">
								<tr>
									<td width="50%" valign="top">
										<div class="margininf">
											<div style="text-align: left;">
												<p class="textwhitinfo">
													INTERSEMANAL<br>
													DURACION 10 SEMANAS<br><br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio:<br>18 de marzo<br><br>
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
									<td width="50%" valign="top">
										<div style="text-align: left;">
												<p class="textwhitinfo">
													FINES DE SEMANA<br>
													DURACION 11 SÁBADOS o 11 DOMINGOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio:<br>09 o 10 de marzo<br><br>
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
							</table>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		</div>
			<div class="curslandingmovil">
			<table class="table" role="table" width="100%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td valign="top" class="td" width="25%">
						<table class="table1curs" onClick="infocurso1()">
							<tr>
								<td class="tdlogoinf">
									<img class="lgmed" src="img/logos/cemedic.png">
								</td>
								<td class="tdtexcur1">
									CE Medic Pro
								</td>
								<td class="tddown">
									<img id="felcha1" class="lgmed" src="img/logos/plus.png">
								</td>
							</tr>
						</table> 
						<div style="position: relative; width: 100%;">
							<div id="infocursos1" class="divinfocurs1curs">
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
													Fecha de inicio: 25 de febrero<br>
													Fecha de término: 31 de mayo<br>
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
													DURACION 12 SÁBADOS Y 12 DOMINGOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 02 de marzo<br>
													Fecha de término: 25 de mayo<br>
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
						<table class="table2curs" onClick="infocurso2()">
							<tr>
								<td class="tdlogoinf">
									<img class="lgmed" src="img/logos/ceproadvance.png">
								</td>
								<td class="tdtexcur2">
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
													Fecha de inicio: 11 de marzo<br>
													Fecha de término: 31 de mayo<br>
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
													DURACION 10 SÁBADOS Y 10 DOMINGOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 16 de marzo<br>
													Fecha de término: 25 de mayo<br>
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
						<table class="table3curs" onClick="infocurso3()">
							<tr>
								<td class="tdlogoinf">
									<img class="lgmed" src="img/logos/unex.png">
								</td>
								<td class="tdtexcur3">
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
													Fecha de inicio: 04 de marzo<br>
													Fecha de término: 31 de mayo<br>
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
													DURACION 13 SÁBADOS o DOMINGOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 23 de febrero<br>
													Fecha de término: 25 de mayo<br>
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
						<table class="table4curs" onClick="infocurso4()">
							<tr>
								<td class="tdlogoinf">
									<img class="lgmed" src="img/logos/unex.png">
								</td>
								<td class="tdtexcur4">
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
													Fecha de inicio: 18 de marzo<br>
													Fecha de término: 31 de mayo<br>
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
													DURACION 11 SÁBADOS o DOMINGOS<br><br>
												</p>
												<p class="textwhitinfogot">
													Fecha de inicio: 09 o 10 de marzo<br>
													Fecha de término: 25 o 26 de mayo<br>
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
		<div id="cursospreparatoria" style="display: none;">
			<p class="azultitulocurslandin">PREPAX</p>
			<table class="table" role="table" width="90%">
			<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td class="td" width="20%">
						<img src="img/logos/prepax.png" class="prepaximglg">
					</td>
					<td class="td" width="80%">
						<div class="recuadroazul">
							<table class="table" role="table" width="100%">
							<tbody class="tbody" role="rowgroup">
								<tr class="tr" role="row">
									<td class="td" width="50%">
									<div class="texprepax">
							<p class="infotexatricurcurspo">
								INTERSEMANAL<br>
								DURACION 08 SEMANAS
							</p>
							<p>
							<b class="infotexatricurcurspo">Fecha de inicio:</b>
							<span class="subinfocursdiv">&nbsp;08 de abril</span><br>
							</p>
							<p>
							<b class="infotexatricurcurspo">Fecha de término:</b>
							<span class="subinfocursdiv">&nbsp;07 de junio</span><br>
							</p>
							<p style="text-align: left;">
								<a class="texazullink" href="PREPAX" >...más información</a>
							</p>
									</div>
							
									</td>
									<td class="td" width="50%">
									<div class="texprepax">
							<p class="infotexatricurcurspo">
								FINES DE SEMANA<br>
								DURACION 08 SÃBADOS o 08 DOMINGOS
							</p>
							<p>
							<b class="infotexatricurcurspo">Fecha de inicio:</b>
							<span class="subinfocursdiv">&nbsp;06 o 07 de abril</span><br>
							</p>
							<p>
							<b class="infotexatricurcurspo">Fecha de término:</b>
							<span class="subinfocursdiv">&nbsp;01 o 02 de junio</span><br>
							</p>
							<p style="text-align: left;">
								<a class="texazullink" href="PREPAX?Curso=FinesdeSemana" >...más información</a>
							</p>	
										</div>
									</td>
								</tr>
							</tbody>
							</table>
						</div>
					</td>
				</tr>
			</tbody>
			</table>
		</div>
		
		<script>
			function univerclick(){
				document.getElementById("cursoslicenciatura").style.display="block";
				document.getElementById("cursospreparatoria").style.display="none";
			}
			function prepaclick(){
				document.getElementById("cursoslicenciatura").style.display="none";
				document.getElementById("cursospreparatoria").style.display="block";
			}
		</script>
	</div>
</center>
<div class="margintopin">
			<div class="divinicursodictamen4" style="background-image: url(img/slider/collaguedic.png)">
			<div style="width: 100%; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
			
				<div class="testialum">
				<p class="ceistitulocurslandin">TESTIMONIOS DE NUESTROS ALUMNOS</p>
					<div class="owl-carousel owl-theme">
            <div class="item">
              <p class="opniontexlandincur">Excelente servicio, muy capacitado todo el personal excelente trato</p>
              <p class="personatex">-Lizeth Espinoza</p>
            </div>
            <div class="item">
              <p class="opniontexlandincur">¡Excelente curso! Capacitación 100% profesional. Excelentes maestros y excelente ambiente.</p>
              <p class="personatex">-Isaac Serna Jiménez</p>
            </div>
            <div class="item">
              <p class="opniontexlandincur">Muy buen servicio y atención, el contenido de las clases son excelentes</p>
              <p class="personatex">-Joseline González</p>
            </div>
             <div class="item">
              <p class="opniontexlandincur">Excelente trato, te apoyan en las dudas que tienes, asesoría personalizada... me gustó mucho el curso.</p>
              <p class="personatex">-Brendita Gómez</p>
            </div>
             <div class="item">
              <p class="opniontexlandincur">ufff los profesores dan muy buen trato y están muy capacitados en muy poco tiempo se está dando bastante ayuda.</p>
              <p class="personatex">-Karol Garcia</p>
            </div>
             <div class="item">
              <p class="opniontexlandincur">Antes de entrar al CEU yo no me veía en la prepa porque salí de secundaria con un promedio de 8 y... Es bastante bajo, pero la forma de enseñar de los maestros y la confianza que se respira allá hicieron que aún así saliera en las listas.</p>
              <p class="personatex">-Vanessa Yanzueth</p>
            </div>
            <div class="item">
              <p class="opniontexlandincur">Me mega encanto, maÃ±ana hago el examen y me siento demasiado preparada, tienen maestros de primera, enseÃ±an excelentemente bien, si no entiendes algo te lo explican hasta que entiendas al 100% </p>
              <p class="personatex">-Ale Gonzalez Chaho</p>
            </div>
            <div class="item">
              <p class="opniontexlandincur">Me encantó, los maestros y todo el personal es muy amable y muy capacitado, te enseñan las cosas de una manera muy clara para que lo entiendas bien,el material y todo lo que te dan es muy bueno.</p>
              <p class="personatex">-Vanessa Yanzueth</p>
            </div>
             <div class="item">
              <p class="opniontexlandincur">Trabajan super bien me encanto me enseñaron cosas que la verdad ni en la secundaria me lo explicaban bien tienen profesores increíbles y te hacen estar seguro de ti mismo.</p>
              <p class="personatex">-Mariana Gonzalez</p>
            </div>
           </div>
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
