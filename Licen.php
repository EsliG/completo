<!DOCTYPE html>
<html>
 <head>
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/menubla.css">
<?php include("incluciones/widgets.php"); ?>
<?php include("incluciones/menublanc.php"); ?>
<?php include("incluciones/podiv.php"); ?>
<?php include("incluciones/masinfodivcurs.php");?>
</head>
<body>
<?php include("incluciones/analitycsbody.php"); ?> 
<?php
	$descuento1 = 0.34;
	$descuento2 = 0.30;
	$descuento3 = 0.25;
	$descuentos1= "34";
	$descuentos2= "30";
	$descuentos3= "25";
	$fechadedescuento = "15 de octubre";
	
	function sacardescuento($cantidad,$descuento){
		$descuento = $cantidad*$descuento;
		$final = $cantidad-$descuento;
		return $final;
	}
	function sacar10mas($cantidad){
		$descuento = $cantidad*0.10;
		$final = $cantidad-$descuento;
		return $final;
	}
	
	//variablesinerseman 
	$Int_total_de_semanas="4";
	$Int_fecha_de_inicio = "13 de julio";
	$Int_fecha_de_termino = "07 de agosto";
	$Int_horas_diarias = "2";
	$Int_total_de_horas = "60";
	$Int_precio_curso = 3990;
	$Int_horario_matutino = "11:00 - 13:00";
	$Int_horario_vespertino = "15:00 - 17:00";
	
	//primerdeeuntgo
	$fechaprimerpagointer1 = $fechadedescuento;
	$fechaultimopagointer1 = $Int_fecha_de_inicio;
	$descuentointer1 = round(sacardescuento($Int_precio_curso,$descuento1));
	$descuentodiezinter1 = round(sacar10mas($descuentointer1));
	//segundodescuento
	$fechaprimerpagointer2 = $fechadedescuento;
	$fechaultimopagointer2 = "08 de julio";
	$descuentointer2 = round(sacardescuento($Int_precio_curso,$descuento2));
	$descuentodiezinter2 = round(sacar10mas($descuentointer2));
	//stercerdescuento
	$fechaprimerpagointer3 = $fechadedescuento;
	$fechaultimopagointer3 = "08 de julio";
	$descuentointer3 = round(sacardescuento($Int_precio_curso,$descuento3));
	$descuentodiezinter3 = round(sacar10mas($descuentointer3));
	//fin intersemana variables
	
	//variables fines de semana
	$numerodeseansfines="4 SÁBADOS";
	$fechainicofinesseman = "18 de julio";
	$fechaterminofinesseman = "08 de agosto";
	$numerodehorasfines = "5";
	$nuemrodehorasdiasfines = "20";
	$Fines_precio_curso = 2990;
	$horariosmattinofines = "<b class='infotexatricurcurspo'>SÁBADOS</b> : 14:00-19:00<br>";
	$horariosvespnofines = "";
	
	//primerdeeuntgo
	$fechaprimerpagofines1 = $fechadedescuento;
	$fechaultimopagofines1 = $fechainicofinesseman;
	$descuentofines1 = round(sacardescuento($Fines_precio_curso,$descuento1));
	$descuentodiezfines1 = round(sacar10mas($descuentofines1));
	//segundodescuento
	$fechaprimerpagofines2 = $fechadedescuento;
	$fechaultimopagofines2 = "08 de julio";
	$descuentofines2 = round(sacardescuento($Fines_precio_curso,$descuento2));
	$descuentodiezfines2 = round(sacar10mas($descuentofines2));
	//stercerdescuento
	$fechaprimerpagofines3 = $fechadedescuento;
	$fechaultimopagofines3 = "08 de julio";
	$descuentofines3 = round(sacardescuento($Fines_precio_curso,$descuento3));
	$descuentodiezfines3 = round(sacar10mas($descuentofines3));
	//fin fines de semana variables
	
?>

<div class="divinicurso" style="background-image: url('img/slider/gastronomia.png');">
<div style="width: 100%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);">
	<table class="tablecurses" width="60%">
		<tr>
			<td valign="middle" width="100%" style="text-align: center;">
				<img class="logoscursos" src="img/logos/licen.png">
				<span class="texttitulocursos">Licen</span>
			</td>
		</tr>
	</table>
	</div>
</div>
<div style="position: relative;">
	<div class="relativmodalida">
		<table style="width: 100%;
    text-align: center;
    border-collapse: collapse;">
			<tr>
				<td onClick="interdiv()" width="50%" id="divintersem" class="selectlicen">
					Intersemanal
				</td>
				<td onClick="finesdiv()" width="50%" class="interlicen" id="divfinessem">
					Fines de Semana
				</td>
			</tr>
		</table>
	</div>
</div>
<center>
<div id="lunesaviernes">
	<div class="cuerpo80">
		<table class="table" role="table" width="100%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td valign="top" class="td" width="100%">
						<div class="texinitexdiv" style="text-align: center;">
							<p class="texnegbody">
Comprometido con tu educación superior, CE UNI pone a tu disposición una sede cerca de ti, donde podrás cursar nuestro sistema de capacitación avanzado en un espacio adaptado para tu mayor comodidad, equipado con tecnología de apoyo para proporcionarte el entrenamiento apropiado en las áreas de instrucción exigidas en la PAA y de este modo lograr tu máximo aprovechamiento. Todas nuestras sedes cuentan con pantallas y/o proyectores, mismos que serán utilizados por tu profesor Master Training, como herramienta del método de entrenamiento “COACHING” y así lograr un mayor acercamiento e interacción con los alumnos.
							</p>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="table" role="table" width="100%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td valign="top" class="td" width="33%">
						<div class="merginatrib">
							<center>
								<img src="img/logos/iqatri.png" class="logatricurso">
								<p class="texnegbody">
									Sistema de IQ Lect de lectura rápida, para fortalecer la velocidad, retención y calidad de interpretación de la capacidad lectora del alumno.
								</p>
							</center>
						</div>
					</td>
					<td valign="top" class="td" width="33%">
						<div class="merginatrib">
							<center>
								<img src="img/logos/auatri.png" class="logatricurso">
								<p class="texnegbody">
									Curso con capacidad limitada para brindar atención personalizada, cupo máximo 15 alumnos 
								</p>
							</center>
						</div>
					</td>
					<td valign="top" class="td" width="33%">
						<div class="merginatrib">
							<center>
								<img src="img/logos/coachingantiestres.png" class="logatricurso">
								<p class="texnegbody">
									Taller de asesoría psicológica y técnicas de relajación, serás capaz de controlar el estrés al momento de presentar el examen de admisión
								</p>
							</center>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<br>
		<table class="table" role="table" width="100%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td valign="top" class="td" width="20%" style="background: #eeeeee;">
						<table id="tablecursatri1" class="infoatritableslect" onClick="atributo1()">
							<tr>
								<td class="infoatribu">
									<img class="infoatriimg" src="img/logos/atributos/licen/expaa1.png">
									<p class="infotexatricurdes">
										FECHAS Y HORARIOS
									</p>
								</td>
								<td class="infotexatricur">
									<div class="subtexmovatrides">
										<table width="100%">
											<tr>
												<td width="80%">
													FECHAS Y HORARIOS
												</td>
												<td width="20%">
													<img id="flecha1" class="lgmedcurs" src="img/logos/atributos/licen/minus.png">
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table>
						<div style="position: relative; width: 100%;">
							<div id="divinfoatri1" class="infodiccursos1">
							<div style="text-align: left;">
								<p class="infotexatricurcurspo">
													INTERSEMANAL<br>
													DURACION <?php echo $Int_total_de_semanas; ?> SEMANAS<br><br>
												</p>
							</div>
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Fecha de inicio:</b><span class="subinfocursdiv">&nbsp;<?php echo $Int_fecha_de_inicio; ?></span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Fecha de término:</b><span class="subinfocursdiv">&nbsp;<?php echo $Int_fecha_de_termino; ?></span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Horas por sesión:</b><span class="subinfocursdiv">&nbsp;<?php echo $Int_horas_diarias; ?> Horas</span><br>
												</div>
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Matutino:</b><span class="subinfocursdiv">&nbsp;<?php echo $Int_horario_matutino; ?> </span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Vespertino:</b><span class="subinfocursdiv">&nbsp;
													<?php echo $Int_horario_vespertino; ?>
													</span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">TOTAL:</b><span class="subinfocursdiv">&nbsp;<?php echo $Int_total_de_horas; ?> Horas</span><br>
												</div>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="20%" style="background: #eeeeee;">
						<table id="tablecursatri2" class="infoatritable" onClick="atributo2()">
							<tr>
								<td class="infoatribu">
									<img class="infoatriimg" src="img/logos/atributos/licen/expaa2.png">
									<p class="infotexatricurdes">
										TEMAS IMPARTIDOS
									</p>
								</td>
								<td class="infotexatricur">
									<div class="subtexmovatrides">
										<table width="100%">
											<tr>
												<td width="80%">
													TEMAS IMPARTIDOS
												</td>
												<td width="20%">
													<img id="flecha2" class="lgmedcurs" src="img/logos/atributos/licen/plus.png">
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table> 
						<div style="position: relative; width: 100%;">
							<div id="divinfoatri2" class="infodiccursos2">
							<div style="text-align: left;">
							</div>
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Lectura y redacción:</b><br>
													<span class="subinfocursdiv">Desarrollarás mayor habilidad verbal, lo que se traduce en un aumento de tu capacidad de lenguaje para la comprensión e interpretación de lecturas. Además, por la naturaleza de la PAA, perfeccionarás tanto tu razonamiento deductivo como tu capacidad de interpretación según sea el contexto y uso de las palabras.</span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Matemáticas:</b><br><span class="subinfocursdiv">Conseguirás incrementar tu agilidad de Matemáticas, mediante ejercicios que reforzarán tu habilidad para procesar, analizar y utilizar información en la solución de problemas de aritmética, álgebra, geometría, y estadística y probabilidad.</span><br>
												</div>
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="20%" style="background: #eeeeee;">
						<table id="tablecursatri3" class="infoatritable" onClick="atributo3()">
							<tr>
								<td class="infoatribu">
									<img class="infoatriimg" src="img/logos/atributos/licen/expaa3.png">
									<p class="infotexatricurdes">
										PROGRAMAS DE REFORZAMIENTO
									</p>
								</td>
								<td class="infotexatricur">
									<div class="subtexmovatrides">
										<table width="100%">
											<tr>
												<td width="80%">
													PROGRAMAS DE REFORZAMIENTO
												</td>
												<td width="20%">
													<img id="flecha3" class="lgmedcurs" src="img/logos/atributos/licen/plus.png">
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table>
						<div style="position: relative; width: 100%;">
							<div id="divinfoatri3" class="infodiccursos3">
							<div style="text-align: left;">
							</div>
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Tutorías 24/7:</b><br>
													<span class="subinfocursdiv">Tendrás a tu disposición tutorías personalizadas por parte de tus profesores categoría Master training, a las que tendrás acceso desde la plataforma virtual, donde estaremos resolviendo todas tus dudas durante tus horas de estudio que no sean dentro del salón de clases.</span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Asesorías personalizadas:</b><br>
													<span class="subinfocursdiv">
														Las asesorías personalizadas serán parte de un programa de reforzamiento de contenidos que ves durante tus clases, estarán basadas en los resultados de tu evaluaciones. Asimismo, trabajaremos únicamente en la solución de ejercicios en los que tú necesitas un mayor reforzamiento. 
													</span><br>
												</div>
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Sesiones grupal:</b><br>
													<span class="subinfocursdiv">
														Participarás en actividades de competencia grupal, donde llevarán a cabo una serie de dinámicas de interacción para reforzar tus habilidades con un método extraordinario. 
													</span><br>
												</div>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="20%" style="background: #eeeeee; display: none"><!--Display-->
						<table id="tablecursatri4" class="infoatritable" onClick="atributo4()">
							<tr>
								<td class="infoatribu">
									<img class="infoatriimg" src="img/logos/atributos/licen/expaa4.png">
									<p class="infotexatricurdes">
										MATERIAL DIDACTICO
									</p>
								</td>
								<td class="infotexatricur">
									<div class="subtexmovatrides">
										<table width="100%">
											<tr>
												<td width="80%">
													MATERIAL DIDACTICO
												</td>
												<td width="20%">
													<img id="flecha4" class="lgmedcurs" src="img/logos/atributos/licen/plus.png">
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table> 
						<div style="position: relative; width: 100%;">
							<div id="divinfoatri4" class="infodiccursos4">
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">1 Manual de Lectura y redacción :</b><br>
													<span class="subinfocursdiv">
														Contiene teoría, marcos explicativos, ejemplos y referencias, ello con la finalidad de que comprendas cada uno de los temas. Asimismo, con la finalidad de que tu comprensión sea óptima hay ejercicios aislados de cada uno de los temas y lecturas con preguntas de tipo examen. 
													</span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">1 Manual Matemático:</b><br>
													<span class="subinfocursdiv">
														Contiene ejercicios de Matemáticas con el mismo grado de dificultad que los ejercicios del examen real, mismos con los que podrás aumentar tu agilidad para procesar, analizar y utilizar la información en la solución de problemas de aritmética, estadística y probabilidad, álgebra y geometría.
													</span><br>
												</div>
												
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">1 Manual de exámenes temáticos:</b><br>
													<span class="subinfocursdiv">
														Contiene exámenes enfocados en cada uno de los temas con los que se compone la PAA con el cual podrás reforzar exhaustivamente cada uno de los contenidos vistos en el curso. 
													</span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">IQLect :</b><br>
													<span class="subinfocursdiv">
														Contiene ejercicios de acondicionamiento y técnica; de desarrollo de ambientes de aprendizaje y fortalecimiento de localización de información; de memoria, de optimización de tiempos y de la calidad de interpretación de lecturas.
													</span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">4 Exámenes simulacro:</b><br>
													<span class="subinfocursdiv">
		Nuestros exámenes exclusivos son adaptados a la forma de aplicación de la PAA; contienen la misma cantidad de ejercicios, grado de dificultad similar o superior y tiempos establecidos para cada módulo.
													</span><br>
												</div>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="20%" style="background: #eeeeee;">
						<table id="tablecursatri5" class="infoatritable" onClick="atributo5()">
							<tr>
								<td class="infoatribu">
									<img class="infoatriimg" src="img/logos/atributos/licen/expaa5.png">
									<p class="infotexatricurdes">
										MASTER TRAINING
									</p>
								</td>
								<td class="infotexatricur">
									<div class="subtexmovatrides">
										<table width="100%">
											<tr>
												<td width="80%">
													MASTER TRAINING
												</td>
												<td width="20%">
													<img id="flecha5" class="lgmedcurs" src="img/logos/atributos/licen/plus.png">
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table> 
						<div style="position: relative; width: 100%;">
							<div id="divinfoatri5" class="infodiccursos5">
								<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">EQUIPO DE DOCENTES - MASTER TRAINING</b><br>
													<div style="text-align: left;">
													<br>
													
														<span class="subinfocursdiv" style="text-align: left;">
														¿Qué hace a nuestros profesores entrar en la categoría de Master Training?
<br><br>
En CE UNI creemos firmemente en el conocimiento, experiencia, disciplina e innovación como características fundamentales en nuestros docentes, por esto:
<br><br>
• Nuestros profesores Master Training dominan las áreas de la PAA (Prueba de Aptitud Académica), ya que son egresados de licenciaturas del área de Ciencias Exactas y Lengua Española.
• Tienen al menos tres años de experiencia como docentes.
• Cuentan con experiencia real en el examen, ya que son egresados de la Universidad de Guadalajara.
• Tienen un promedio mayor al 85% de admitidos en sus cursos.
• Cuentan con capacitación constante e innovadora para hacer de sus clases una experiencia didáctica más interactiva y estimulante para el alumno.
• Tienen una aprobación del alumnado mayor al 95% .
													</span><br>
													</div>
												</div>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="espacioblanccursos"></div>
		<script>
			function atributo1(){
				if(document.getElementById("divinfoatri1").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("divinfoatri1").style.display="none";
						document.getElementById("flecha1").src="img/logos/atributos/licen/plus.png";
						document.getElementById("tablecursatri1").classList.add("infoatritable");
					document.getElementById("tablecursatri1").classList.remove("infoatritableslect");
					}
				}
				else{
					document.getElementById("flecha1").src="img/logos/atributos/licen/minus.png";
					document.getElementById("tablecursatri1").classList.remove("infoatritable");
					document.getElementById("tablecursatri1").classList.add("infoatritableslect");
					document.getElementById("divinfoatri1").style.display="block";
					document.getElementById("tablecursatri2").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri2").classList.add("infoatritable");
					document.getElementById("divinfoatri2").style.display="none";
					document.getElementById("tablecursatri3").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri3").classList.add("infoatritable");
					document.getElementById("divinfoatri3").style.display="none";
					document.getElementById("tablecursatri4").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri4").classList.add("infoatritable");
					document.getElementById("divinfoatri4").style.display="none";
					document.getElementById("tablecursatri5").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri5").classList.add("infoatritable");
					document.getElementById("divinfoatri5").style.display="none";
				}
			}
			function atributo2(){
				if(document.getElementById("divinfoatri2").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("divinfoatri2").style.display="none";
						document.getElementById("flecha2").src="img/logos/atributos/licen/plus.png";
						document.getElementById("tablecursatri2").classList.add("infoatritable");
					document.getElementById("tablecursatri2").classList.remove("infoatritableslect");
					}
				}
				else{
					document.getElementById("flecha2").src="img/logos/atributos/licen/minus.png";
					document.getElementById("tablecursatri2").classList.remove("infoatritable");
					document.getElementById("tablecursatri2").classList.add("infoatritableslect");
					document.getElementById("divinfoatri2").style.display="block";
					document.getElementById("tablecursatri1").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri1").classList.add("infoatritable");
					document.getElementById("divinfoatri1").style.display="none";
					document.getElementById("tablecursatri3").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri3").classList.add("infoatritable");
					document.getElementById("divinfoatri3").style.display="none";
					document.getElementById("tablecursatri4").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri4").classList.add("infoatritable");
					document.getElementById("divinfoatri4").style.display="none";
					document.getElementById("tablecursatri5").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri5").classList.add("infoatritable");
					document.getElementById("divinfoatri5").style.display="none";
				}
			}
			function atributo3(){
				if(document.getElementById("divinfoatri3").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("divinfoatri3").style.display="none";
						document.getElementById("flecha3").src="img/logos/atributos/licen/plus.png";
						document.getElementById("tablecursatri3").classList.add("infoatritable");
					document.getElementById("tablecursatri3").classList.remove("infoatritableslect");
					}
				}
				else{
					document.getElementById("flecha3").src="img/logos/atributos/licen/minus.png";
					document.getElementById("tablecursatri3").classList.remove("infoatritable");
					document.getElementById("tablecursatri3").classList.add("infoatritableslect");
					document.getElementById("divinfoatri3").style.display="block";
					document.getElementById("tablecursatri1").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri1").classList.add("infoatritable");
					document.getElementById("divinfoatri1").style.display="none";
					document.getElementById("tablecursatri2").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri2").classList.add("infoatritable");
					document.getElementById("divinfoatri2").style.display="none";
					document.getElementById("tablecursatri4").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri4").classList.add("infoatritable");
					document.getElementById("divinfoatri4").style.display="none";
					document.getElementById("tablecursatri5").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri5").classList.add("infoatritable");
					document.getElementById("divinfoatri5").style.display="none";
				}
			}
			function atributo4(){
				if(document.getElementById("divinfoatri4").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("divinfoatri4").style.display="none";
						document.getElementById("flecha4").src="img/logos/atributos/licen/plus.png";
						document.getElementById("tablecursatri4").classList.add("infoatritable");
					document.getElementById("tablecursatri4").classList.remove("infoatritableslect");
					}
				}
				else{
					document.getElementById("flecha4").src="img/logos/atributos/licen/minus.png";
					document.getElementById("tablecursatri4").classList.remove("infoatritable");
					document.getElementById("tablecursatri4").classList.add("infoatritableslect");
					document.getElementById("divinfoatri4").style.display="block";
					document.getElementById("tablecursatri1").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri1").classList.add("infoatritable");
					document.getElementById("divinfoatri1").style.display="none";
					document.getElementById("tablecursatri2").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri2").classList.add("infoatritable");
					document.getElementById("divinfoatri2").style.display="none";
					document.getElementById("tablecursatri3").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri3").classList.add("infoatritable");
					document.getElementById("divinfoatri3").style.display="none";
					document.getElementById("tablecursatri5").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri5").classList.add("infoatritable");
					document.getElementById("divinfoatri5").style.display="none";
				}
			}
			function atributo5(){
				if(document.getElementById("divinfoatri5").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("divinfoatri5").style.display="none";
						document.getElementById("flecha5").src="img/logos/atributos/licen/plus.png";
						document.getElementById("tablecursatri5").classList.add("infoatritable");
					document.getElementById("tablecursatri5").classList.remove("infoatritableslect");
					}
				}
				else{
					document.getElementById("flecha5").src="img/logos/atributos/licen/minus.png";
					document.getElementById("tablecursatri5").classList.remove("infoatritable");
					document.getElementById("tablecursatri5").classList.add("infoatritableslect");
					document.getElementById("divinfoatri5").style.display="block";
					document.getElementById("tablecursatri1").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri1").classList.add("infoatritable");
					document.getElementById("divinfoatri1").style.display="none";
					document.getElementById("tablecursatri2").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri2").classList.add("infoatritable");
					document.getElementById("divinfoatri2").style.display="none";
					document.getElementById("tablecursatri3").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri3").classList.add("infoatritable");
					document.getElementById("divinfoatri3").style.display="none";
					document.getElementById("tablecursatri4").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri4").classList.add("infoatritable");
					document.getElementById("divinfoatri4").style.display="none";
				}
			}
		</script>
		

<?php include("incluciones/dossedescursointer.php");?>
		

<div class="margipagosdiv">
			<div class="pagosfon"> 
				<p class="texsistematitulo">SISTEMAS DE PAGO</p>
				<p class="subtexpago">Costo Total $<?php echo number_format($Int_precio_curso); ?> MXN.</p>
				<table class="table" role="table" width="80%" style="border-collapse: collapse;">
					<tbody class="tbody" role="rowgroup">
						<tr class="tr" role="row">
					<td valign="top" class="td" width="33%">
						<div class="paddinpres">
							<div class="licenpago1">
							<div class="titulicendidiv">
								ANTICIPADO 
							</div>
							<div class="maegendivpago">
								<div id="antititulo">
									<br>
									<p class="gotham">
										<b class="fontgrande">
											<?php echo $descuentos1; ?>%
										</b>
										<br>
										Inscripción individual
										<br>
										<br>
										<b class="fontgrande">
											<?php echo $descuentos1; ?>%+ 
										<b class="fontmediangran">
											10%*
										</b>
										</b>
									<br>
									Inscripción especial<br>
									10% de descuentos adicional<br>
									a lo ya rebajado
									<br>
									</p>
								</div>
								<div id="antidivinter" style="display:none;">
									<br>
									<br>
									<p style="font-family:GOTHAM-THIN_0;">
										<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold;"><?php echo $descuentos1; ?>%</b>
										<br>
										de descuento
										<br>
										<br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;">
										</div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>
										fecha límite primer pago<br>
										<?php echo $fechaprimerpagointer1; ?><br>
										fecha de último pago<br>
										<?php echo $fechaultimopagointer1; ?><br><br>  
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>Resumen de inversión <br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentointer1); ?></b>
										<br><br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
									</center>
									<diV class="corolobaselicen">
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
											<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos1; ?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
										</p>
										<center>
											<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<p style="font-family:GOTHAM-THIN_0;">
											<br>3 o más personas que <br> se inscriban en grupo 
											<br> o<br>si tomaste curso en otro instituto<br><br>
										</p>
										<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
										<b>Precio Especial</b><br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezinter1); ?></b><br><br>
									</p>
									</diV>
							<button type="button" class="btnins" onClick="iniciarcurs('Intersemanal','ExPAA')">Detalles de Inscripción</button>
					</div>
			</div>
	</div>
						<center>
<img onClick="aniiner()" id="antimas" src="img/logos/plus.png" class="masdivindes"/>
</center>
						</div>
					</td>
					<td valign="top" class="td" width="33%">
						<div class="paddinpres">
							<div class="licenpago1">
							<div class="titulicendidiv">
								MENSUAL 
							</div>
							<div class="maegendivpago">
								<div id="mestitulo">
									<br>
									<p class="gotham">
										<b class="fontgrande">
											<?php echo $descuentos2; ?>%
										</b>
										<br>
										Inscripción individual
										<br>
										<br>
										<b class="fontgrande">
											<?php echo $descuentos2; ?>%+ 
										<b class="fontmediangran">
											10%*
										</b>
										</b>
									<br>
									Inscripción especial<br>
									10% de descuentos adicional<br>
									a lo ya rebajado
									<br>
									</p>
								</div>
								<div id="mesdivinter" style="display:none;">
									<br>
									<br>
									<p style="font-family:GOTHAM-THIN_0;">
										<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold;"><?php echo $descuentos2; ?>%</b>
										<br>
										de descuento
										<br>
										<br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;">
										</div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>
										fecha límite primer pago<br>
										<?php echo $fechaprimerpagointer2; ?><br>
										fecha de último pago<br>
										<?php echo $fechaultimopagointer2; ?><br><br>  
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>Resumen de inversión <br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentointer2); ?></b>
										<br><br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
									</center>
									<diV class="corolobaselicen">
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
											<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos2; ?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
										</p>
										<center>
											<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<p style="font-family:GOTHAM-THIN_0;">
											<br>3 o más personas que <br> se inscriban en grupo 
											<br> o<br>si tomaste curso en otro instituto<br><br>
										</p>
										<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
										<b>Precio Especial</b><br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezinter2); ?></b><br><br>
										</p>
									</diV>
							<button type="button" class="btnins" onClick="iniciarcurs('Intersemanal','ExPAA')">Detalles de Inscripción</button>
					</div>
			</div>
	</div>
						<center>
<img onClick="mesner()" id="mesmas" src="img/logos/plus.png" class="masdivindes"/>
</center>
						</div>
					</td>
					<td valign="top" class="td" width="33%">
						<div class="paddinpres">
							<div class="licenpago1">
							<div class="titulicendidiv">
								QUINCENAL 
							</div>
							<div class="maegendivpago">
								<div id="quintitulo">
									<br>
									<p class="gotham">
										<b class="fontgrande">
											<?php echo $descuentos3; ?>%
										</b>
										<br>
										Inscripción individual
										<br>
										<br>
										<b class="fontgrande">
											<?php echo $descuentos3; ?>%+ 
										<b class="fontmediangran">
											10%*
										</b>
										</b>
									<br>
									Inscripción especial<br>
									10% de descuentos adicional<br>
									a lo ya rebajado
									<br>
									</p>
								</div>
								<div id="quindivinter" style="display:none;">
									<br>
									<br>
									<p style="font-family:GOTHAM-THIN_0;">
										<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold;"><?php echo $descuentos3; ?>%</b>
										<br>
										de descuento
										<br>
										<br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;">
										</div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>
										fecha límite primer pago<br>
										<?php echo $fechaprimerpagointer3; ?><br>
										fecha de último pago<br>
										<?php echo $fechaultimopagointer3; ?><br><br>  
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>Resumen de inversión <br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentointer3); ?></b>
										<br><br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
									</center>
									<diV class="corolobaselicen">
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
											<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos3; ?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
										</p>
										<center>
											<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<p style="font-family:GOTHAM-THIN_0;">
											<br>3 o más personas que <br> se inscriban en grupo 
											<br> o<br>si tomaste curso en otro instituto<br><br>
										</p>
										<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
										<b>Precio Especial</b><br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezinter2); ?></b><br><br>
										</p>
									</diV>
							<button type="button" class="btnins" onClick="iniciarcurs('Intersemanal','ExPAA')">Detalles de Inscripción</button>
					</div>
			</div>
	</div>
						<center>
<img onClick="quinner()" id="quinmas" src="img/logos/plus.png" class="masdivindes"/>
</center>
						</div>
					</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<script>
		function aniiner(){
			var antidiv = document.getElementById("antidivinter");
			var masmenosdiv = document.getElementById("antimas");
			var titutloanti = document.getElementById("antititulo");
			if(antidiv.style.display=="block"){
				antidiv.style.display="none";
				masmenosdiv.src ="img/logos/plus.png";
				titutloanti.style.display="block";
			}
			else{
				titutloanti.style.display="none";
				antidiv.style.display="block";
				masmenosdiv.src ="img/logos/minus.png";
			}
			
		}
		function mesner(){
			var antidiv = document.getElementById("mesdivinter");
			var masmenosdiv = document.getElementById("mesmas");
			var titutloanti = document.getElementById("mestitulo");
			if(antidiv.style.display=="block"){
				antidiv.style.display="none";
				masmenosdiv.src ="img/logos/plus.png";
				titutloanti.style.display="block";
			}
			else{
				titutloanti.style.display="none";
				antidiv.style.display="block";
				masmenosdiv.src ="img/logos/minus.png";
			}
			
		}
		function quinner(){
			var antidiv = document.getElementById("quindivinter");
			var masmenosdiv = document.getElementById("quinmas");
			var titutloanti = document.getElementById("quintitulo");
			if(antidiv.style.display=="block"){
				antidiv.style.display="none";
				masmenosdiv.src ="img/logos/plus.png";
				titutloanti.style.display="block";
			}
			else{
				titutloanti.style.display="none";
				antidiv.style.display="block";
				masmenosdiv.src ="img/logos/minus.png";
			}
			
		}
		</script>
		<br><br>
		<p class="rojotitulocurslandin">Aceptamos pagos con tarjeta</p>	
		<table class="table" role="table" width="75%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
			<tr class="tr" role="row">
				<td valign="top" class="td" width="50%">
					<table width="100%">
						<tr>
							<td width="33%">
								<img src="img/tarjetas/americanexpress.png" width="100%">
							</td>
							<td width="33%">
								<img src="img/tarjetas/carnet.png" width="100%">
							</td>
							<td width="33%">
								<img src="img/tarjetas/Mastercard.png" width="100%">
							</td>
						</tr>
					</table>
				</td>
				<td valign="top" class="td" width="50%">
					<table width="100%">
						<tr>
							<td width="33%">
								<img src="img/tarjetas/sivale.png" width="100%">
							</td>
							<td width="33%">
								<img src="img/tarjetas/ticket.png" width="100%">
							</td>
							<td width="33%">
								<img src="img/tarjetas/visa.png" width="100%">
							</td>
						</tr>
					</table>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
<div id="finesdesemana" style="display: none;">
	<div class="cuerpo80">
		<table class="table" role="table" width="100%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td valign="top" class="td" width="100%">
						<div class="texinitexdiv" style="text-align: center;">
							<p class="texnegbody">
Comprometido con tu educación superior, CE UNI pone a tu disposición una sede cerca de ti, donde podrás cursar nuestro sistema de capacitación avanzado en un espacio adaptado para tu mayor comodidad, equipado con tecnología de apoyo para proporcionarte el entrenamiento apropiado en las áreas de instrucción exigidas en la PAA y de este modo lograr tu máximo aprovechamiento. Todas nuestras sedes cuentan con pantallas y/o proyectores, mismos que serán utilizados por tu profesor Master Training, como herramienta del método de entrenamiento “COACHING” y así lograr un mayor acercamiento e interacción con los alumnos.
						</p>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="table" role="table" width="100%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td valign="top" class="td" width="33%">
						<div class="merginatrib">
							<center>
								<img src="img/logos/iqatri.png" class="logatricurso">
								<p class="texnegbody">
									Sistema de IQ Lect de lectura rápida, para fortalecer la velocidad, retención y calidad de interpretación de la capacidad lectora del alumno.
								</p>
							</center>
						</div>
					</td>
					<td valign="top" class="td" width="33%">
						<div class="merginatrib">
							<center>
								<img src="img/logos/auatri.png" class="logatricurso">
								<p class="texnegbody">
									Curso con capacidad limitada para brindar atención personalizada, cupo máximo 15 alumnos 
								</p>
							</center>
						</div>
					</td>
					<td valign="top" class="td" width="33%">
						<div class="merginatrib">
							<center>
								<img src="img/logos/coachingantiestres.png" class="logatricurso">
								<p class="texnegbody">
									Taller de asesoría psicológica y técnicas de relajación, serás capaz de controlar el estrés al momento de presentar el examen de admisión
								</p>
							</center>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<br>
		<table class="table" role="table" width="100%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
				<tr class="tr" role="row">
					<td valign="top" class="td" width="20%" style="background: #eeeeee;">
						<table id="tablecursatri1fin" class="infoatritableslect" onClick="atributo1fin()">
							<tr>
								<td class="infoatribu">
									<img class="infoatriimg" src="img/logos/atributos/licen/expaa1.png">
									<p class="infotexatricurdes">
										FECHAS Y HORARIOS
									</p>
								</td>
								<td class="infotexatricur">
									<div class="subtexmovatrides">
										<table width="100%">
											<tr>
												<td width="80%">
													FECHAS Y HORARIOS
												</td>
												<td width="20%">
													<img id="flecha1fin" class="lgmedcurs" src="img/logos/atributos/licen/minus.png">
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table>
						<div style="position: relative; width: 100%;">
							<div id="divinfoatri1fin" class="infodiccursos1">
							<div style="text-align: left;">
								<p class="infotexatricurcurspo">
													FINES DE SEMANA<br>
													DURACION <?php echo $numerodeseansfines?><br><br>
												</p>
							</div>
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Fecha de inicio:</b><span class="subinfocursdiv">&nbsp;<?php echo $fechainicofinesseman?></span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Fecha de término:</b><span class="subinfocursdiv">&nbsp;<?php echo $fechaterminofinesseman?></span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Horas por sesión:</b><span class="subinfocursdiv">&nbsp;<?php echo $numerodehorasfines?> Horas</span><br>
												</div>
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											<div style="text-align: left;">
												<div class="infotexatricurdiv"><span class="subinfocursdiv"><?php echo $horariosmattinofines;?></span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">TOTAL:</b><span class="subinfocursdiv">&nbsp;<?php echo $nuemrodehorasdiasfines;?> Horas</span><br>
												</div>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="20%" style="background: #eeeeee;">
						<table id="tablecursatri2fin" class="infoatritable" onClick="atributo2fin()">
							<tr>
								<td class="infoatribu">
									<img class="infoatriimg" src="img/logos/atributos/licen/expaa2.png">
									<p class="infotexatricurdes">
										TEMAS IMPARTIDOS
									</p>
								</td>
								<td class="infotexatricur">
									<div class="subtexmovatrides">
										<table width="100%">
											<tr>
												<td width="80%">
													TEMAS IMPARTIDOS
												</td>
												<td width="20%">
													<img id="flecha2fin" class="lgmedcurs" src="img/logos/atributos/licen/plus.png">
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table> 
						<div style="position: relative; width: 100%;">
							<div id="divinfoatri2fin" class="infodiccursos2">
							<div style="text-align: left;">
							</div>
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Lectura y redacción:</b><br>
													<span class="subinfocursdiv">Desarrollarás mayor habilidad verbal, lo que se traduce en un aumento de tu capacidad de lenguaje para la comprensión e interpretación de lecturas. Además, por la naturaleza de la PAA, perfeccionarás tanto tu razonamiento deductivo como tu capacidad de interpretación según sea el contexto y uso de las palabras.</span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Matemáticas:</b><br><span class="subinfocursdiv">Conseguirás incrementar tu agilidad de Matemáticas, mediante ejercicios que reforzarán tu habilidad para procesar, analizar y utilizar información en la solución de problemas de aritmética, álgebra, geometría, y estadística y probabilidad.</span><br>
												</div>
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="20%" style="background: #eeeeee;">
						<table id="tablecursatri3fin" class="infoatritable" onClick="atributo3fin()">
							<tr>
								<td class="infoatribu">
									<img class="infoatriimg" src="img/logos/atributos/licen/expaa3.png">
									<p class="infotexatricurdes">
										PROGRAMAS DE REFORZAMIENTO
									</p>
								</td>
								<td class="infotexatricur">
									<div class="subtexmovatrides">
										<table width="100%">
											<tr>
												<td width="80%">
													PROGRAMAS DE REFORZAMIENTO
												</td>
												<td width="20%">
													<img id="flecha3fin" class="lgmedcurs" src="img/logos/atributos/licen/plus.png">
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table>
						<div style="position: relative; width: 100%;">
							<div id="divinfoatri3fin" class="infodiccursos3">
							<div style="text-align: left;">
							</div>
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Tutorías 24/7:</b><br>
													<span class="subinfocursdiv">Tendrás a tu disposición tutorías personalizadas por parte de tus profesores categoría Master training, a las que tendrás acceso desde la plataforma virtual, donde estaremos resolviendo todas tus dudas durante tus horas de estudio que no sean dentro del salón de clases.</span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Asesorías personalizadas:</b><br>
													<span class="subinfocursdiv">
														Las asesorías personalizadas serán parte de un programa de reforzamiento de contenidos que ves durante tus clases, estarán basadas en los resultados de tu evaluaciones. Asimismo, trabajaremos únicamente en la solución de ejercicios en los que tú necesitas un mayor reforzamiento. 
													</span><br>
												</div>
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">Sesiones grupal:</b><br>
													<span class="subinfocursdiv">
														Participarás en actividades de competencia grupal, donde llevarán a cabo una serie de dinámicas de interacción para reforzar tus habilidades con un método extraordinario. 
													</span><br>
												</div>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="20%" style="background: #eeeeee; display: none"><!--Display-->
						<table id="tablecursatri4fin" class="infoatritable" onClick="atributo4fin()">
							<tr>
								<td class="infoatribu">
									<img class="infoatriimg" src="img/logos/atributos/licen/expaa4.png">
									<p class="infotexatricurdes">
										MATERIAL DIDACTICO
									</p>
								</td>
								<td class="infotexatricur">
									<div class="subtexmovatrides">
										<table width="100%">
											<tr>
												<td width="80%">
													MATERIAL DIDACTICO
												</td>
												<td width="20%">
													<img id="flecha4fin" class="lgmedcurs" src="img/logos/atributos/licen/plus.png">
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table> 
						<div style="position: relative; width: 100%;">
							<div id="divinfoatri4fin" class="infodiccursos4">
								<table class="table" role="table" width="100%" style="border-collapse: collapse;">
									<tbody class="tbody" role="rowgroup">
										<tr class="tr" role="row">
											<td valign="top" class="td" width="50%">
											<div class="margininf">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">1 Manual de Lectura y redacción :</b><br>
													<span class="subinfocursdiv">
														Contiene teoría, marcos explicativos, ejemplos y referencias, ello con la finalidad de que comprendas cada uno de los temas. Asimismo, con la finalidad de que tu comprensión sea óptima hay ejercicios aislados de cada uno de los temas y lecturas con preguntas de tipo examen. 
													</span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">1 Manual Matemático:</b><br>
													<span class="subinfocursdiv">
														Contiene ejercicios de Matemáticas con el mismo grado de dificultad que los ejercicios del examen real, mismos con los que podrás aumentar tu agilidad para procesar, analizar y utilizar la información en la solución de problemas de aritmética, estadística y probabilidad, álgebra y geometría.
													</span><br>
												</div>
												
											</div>
											</div>
											</td>
											<td valign="top" class="td" width="50%">
											<div style="text-align: left;">
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">IQLect :</b><br>
													<span class="subinfocursdiv">
														Contiene ejercicios de acondicionamiento y técnica; de desarrollo de ambientes de aprendizaje y fortalecimiento de localización de información; de memoria, de optimización de tiempos y de la calidad de interpretación de lecturas.
													</span><br>
												</div>
												<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">4 Exámenes simulacro:</b><br>
													<span class="subinfocursdiv">
		Nuestros exámenes exclusivos son adaptados a la forma de aplicación de la PAA; contienen la misma cantidad de ejercicios, grado de dificultad similar o superior y tiempos establecidos para cada módulo.
													</span><br>
												</div>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</td>
					<td valign="top" class="td" width="20%" style="background: #eeeeee;">
						<table id="tablecursatri5fin" class="infoatritable" onClick="atributo5fin()">
							<tr>
								<td class="infoatribu">
									<img class="infoatriimg" src="img/logos/atributos/licen/expaa5.png">
									<p class="infotexatricurdes">
										MASTER TRAINING
									</p>
								</td>
								<td class="infotexatricur">
									<div class="subtexmovatrides">
										<table width="100%">
											<tr>
												<td width="80%">
													MASTER TRAINING
												</td>
												<td width="20%">
													<img id="flecha5fin" class="lgmedcurs" src="img/logos/atributos/licen/plus.png">
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table> 
						<div style="position: relative; width: 100%;">
							<div id="divinfoatri5fin" class="infodiccursos5">
								<div class="infotexatricurdiv">
													<b class="infotexatricurcurspo">EQUIPO DE DOCENTES - MASTER TRAINING</b><br>
													<div style="text-align: left;">
													<br>
													
														<span class="subinfocursdiv" style="text-align: left;">
														¿Qué hace a nuestros profesores entrar en la categoría de Master Training?
<br><br>
En CE UNI creemos firmemente en el conocimiento, experiencia, disciplina e innovación como características fundamentales en nuestros docentes, por esto:
<br><br>
• Nuestros profesores Master Training dominan las áreas de la PAA (Prueba de Aptitud Académica), ya que son egresados de licenciaturas del área de Ciencias Exactas y Lengua Española.
• Tienen al menos tres años de experiencia como docentes.
• Cuentan con experiencia real en el examen, ya que son egresados de la Universidad de Guadalajara.
• Tienen un promedio mayor al 85% de admitidos en sus cursos.
• Cuentan con capacitación constante e innovadora para hacer de sus clases una experiencia didáctica más interactiva y estimulante para el alumno.
• Tienen una aprobación del alumnado mayor al 95% .
													</span><br>
													</div>
												</div>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="espacioblanccursos"></div>
		<script>
			function atributo1fin(){
				if(document.getElementById("divinfoatri1fin").style.display=="block"){
					var w3 = window.innerWidth;
					if(w3<940){
						document.getElementById("divinfoatri1fin").style.display="none";
						document.getElementById("flecha1fin").src="img/logos/atributos/licen/plus.png";
						document.getElementById("tablecursatri1fin").classList.add("infoatritable");
					document.getElementById("tablecursatri1fin").classList.remove("infoatritableslect");
					}
				}
				else{
					document.getElementById("flecha1fin").src="img/logos/atributos/licen/minus.png";
					document.getElementById("tablecursatri1fin").classList.remove("infoatritable");
					document.getElementById("tablecursatri1fin").classList.add("infoatritableslect");
					document.getElementById("divinfoatri1fin").style.display="block";
					document.getElementById("tablecursatri2fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri2fin").classList.add("infoatritable");
					document.getElementById("divinfoatri2fin").style.display="none";
					document.getElementById("tablecursatri3fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri3fin").classList.add("infoatritable");
					document.getElementById("divinfoatri3fin").style.display="none";
					document.getElementById("tablecursatri4fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri4fin").classList.add("infoatritable");
					document.getElementById("divinfoatri4fin").style.display="none";
					document.getElementById("tablecursatri5fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri5fin").classList.add("infoatritable");
					document.getElementById("divinfoatri5fin").style.display="none";
				}
			}
			function atributo2fin(){
				if(document.getElementById("divinfoatri2fin").style.display=="block"){
					var w3 = window.innerWidth;
					if(w3<940){
						document.getElementById("divinfoatri2fin").style.display="none";
						document.getElementById("flecha2fin").src="img/logos/atributos/licen/plus.png";
						document.getElementById("tablecursatri2fin").classList.add("infoatritable");
					document.getElementById("tablecursatri2fin").classList.remove("infoatritableslect");
					}
				}
				else{
					document.getElementById("flecha2fin").src="img/logos/atributos/licen/minus.png";
					document.getElementById("tablecursatri2fin").classList.remove("infoatritable");
					document.getElementById("tablecursatri2fin").classList.add("infoatritableslect");
					document.getElementById("divinfoatri2fin").style.display="block";
					document.getElementById("tablecursatri1fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri1fin").classList.add("infoatritable");
					document.getElementById("divinfoatri1fin").style.display="none";
					document.getElementById("tablecursatri3fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri3fin").classList.add("infoatritable");
					document.getElementById("divinfoatri3fin").style.display="none";
					document.getElementById("tablecursatri4fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri4fin").classList.add("infoatritable");
					document.getElementById("divinfoatri4fin").style.display="none";
					document.getElementById("tablecursatri5fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri5fin").classList.add("infoatritable");
					document.getElementById("divinfoatri5fin").style.display="none";
				}
			}
			function atributo3fin(){
				if(document.getElementById("divinfoatri3fin").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("divinfoatri3fin").style.display="none";
						document.getElementById("flecha3fin").src="img/logos/atributos/licen/plus.png";
						document.getElementById("tablecursatri3fin").classList.add("infoatritable");
					document.getElementById("tablecursatri3fin").classList.remove("infoatritableslect");
					}
				}
				else{
					document.getElementById("flecha3fin").src="img/logos/atributos/licen/minus.png";
					document.getElementById("tablecursatri3fin").classList.remove("infoatritable");
					document.getElementById("tablecursatri3fin").classList.add("infoatritableslect");
					document.getElementById("divinfoatri3fin").style.display="block";
					document.getElementById("tablecursatri1fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri1fin").classList.add("infoatritable");
					document.getElementById("divinfoatri1fin").style.display="none";
					document.getElementById("tablecursatri2fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri2fin").classList.add("infoatritable");
					document.getElementById("divinfoatri2fin").style.display="none";
					document.getElementById("tablecursatri4fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri4fin").classList.add("infoatritable");
					document.getElementById("divinfoatri4fin").style.display="none";
					document.getElementById("tablecursatri5fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri5fin").classList.add("infoatritable");
					document.getElementById("divinfoatri5fin").style.display="none";
				}
			}
			function atributo4fin(){
				if(document.getElementById("divinfoatri4fin").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("divinfoatri4fin").style.display="none";
						document.getElementById("flecha4fin").src="img/logos/atributos/licen/plus.png";
						document.getElementById("tablecursatri4fin").classList.add("infoatritable");
					document.getElementById("tablecursatri4fin").classList.remove("infoatritableslect");
					}
				}
				else{
					document.getElementById("flecha4fin").src="img/logos/atributos/licen/minus.png";
					document.getElementById("tablecursatri4fin").classList.remove("infoatritable");
					document.getElementById("tablecursatri4fin").classList.add("infoatritableslect");
					document.getElementById("divinfoatri4fin").style.display="block";
					document.getElementById("tablecursatri1fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri1fin").classList.add("infoatritable");
					document.getElementById("divinfoatri1fin").style.display="none";
					document.getElementById("tablecursatri2fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri2fin").classList.add("infoatritable");
					document.getElementById("divinfoatri2fin").style.display="none";
					document.getElementById("tablecursatri3fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri3fin").classList.add("infoatritable");
					document.getElementById("divinfoatri3fin").style.display="none";
					document.getElementById("tablecursatri5fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri5fin").classList.add("infoatritable");
					document.getElementById("divinfoatri5fin").style.display="none";
				}
			}
			function atributo5fin(){
				if(document.getElementById("divinfoatri5fin").style.display=="block"){
					var w2 = window.innerWidth;
					if(w2<940){
						document.getElementById("divinfoatri5fin").style.display="none";
						document.getElementById("flecha5fin").src="img/logos/atributos/licen/plus.png";
						document.getElementById("tablecursatri5fin").classList.add("infoatritable");
					document.getElementById("tablecursatri5fin").classList.remove("infoatritableslect");
					}
				}
				else{
					document.getElementById("flecha5fin").src="img/logos/atributos/licen/minus.png";
					document.getElementById("tablecursatri5fin").classList.remove("infoatritable");
					document.getElementById("tablecursatri5fin").classList.add("infoatritableslect");
					document.getElementById("divinfoatri5fin").style.display="block";
					document.getElementById("tablecursatri1fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri1fin").classList.add("infoatritable");
					document.getElementById("divinfoatri1fin").style.display="none";
					document.getElementById("tablecursatri2fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri2fin").classList.add("infoatritable");
					document.getElementById("divinfoatri2fin").style.display="none";
					document.getElementById("tablecursatri3fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri3fin").classList.add("infoatritable");
					document.getElementById("divinfoatri3fin").style.display="none";
					document.getElementById("tablecursatri4fin").classList.remove("infoatritableslect");
					document.getElementById("tablecursatri4fin").classList.add("infoatritable");
					document.getElementById("divinfoatri4fin").style.display="none";
				}
			}
		</script>	
		

		
<?php include("incluciones/dossedescursointer.php");?>
		
		
		
	<div class="margipagosdiv">
		<div class="pagosfon"> 
				<p class="texsistematitulo">SISTEMAS DE PAGO</p>
				<p class="subtexpago">Costo Total <?php echo number_format($Fines_precio_curso);?>  MXN.</p>
				<table class="table" role="table" width="80%" style="border-collapse: collapse;">
					<tbody class="tbody" role="rowgroup">
						<tr class="tr" role="row">
					<td valign="top" class="td" width="33%">
						<div class="paddinpres">
							<div class="licenpago1">
							<div class="titulicendidiv">
								ANTICIPADO 
							</div>
							<div class="maegendivpago">
								<div id="antititulofin">
									<br>
									<p class="gotham">
										<b class="fontgrande">
											<?php echo $descuentos1;?>%
										</b>
										<br>
										Inscripción individual
										<br>
										<br>
										<b class="fontgrande">
											<?php echo $descuentos1;?>%+ 
										<b class="fontmediangran">
											10%*
										</b>
										</b>
									<br>
									Inscripción especial<br>
									10% de descuentos adicional<br>
									a lo ya rebajado
									<br>
									</p>
								</div>
								<div id="antidivinterfin" style="display:none;">
									<br>
									<br>
									<p style="font-family:GOTHAM-THIN_0;">
										<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold;"><?php echo $descuentos1;?>%</b>
										<br>
										de descuento
										<br>
										<br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;">
										</div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>
										fecha límite primer pago<br>
										<?php echo $fechaprimerpagofines1;?><br>
										fecha de último pago<br>
										<?php echo $fechaultimopagofines1 ;?><br><br>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>Resumen de inversión <br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentofines1);?></b>
										<br><br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
									</center>
									<diV class="corolobaselicen">
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
											<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos1;?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
										</p>
										<center>
											<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<p style="font-family:GOTHAM-THIN_0;">
											<br>3 o más personas que <br> se inscriban en grupo 
											<br> o<br>si tomaste curso en otro instituto<br><br>
										</p>
										<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
										<b>Precio Especial</b><br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezfines1);?></b><br><br>
									</p>
									</diV>
							<button type="button" class="btnins" onClick="iniciarcurs('Fines de Semana','ExPAA')">Detalles de Inscripción</button>
					</div>
			</div>
	</div>
						<center>
<img onClick="aniinerfin()" id="antimasfin" src="img/logos/plus.png" class="masdivindes"/>
</center>
						</div>
					</td>
					<td valign="top" class="td" width="33%">
						<div class="paddinpres">
							<div class="licenpago1">
							<div class="titulicendidiv">
								MENSUAL 
							</div>
							<div class="maegendivpago">
								<div id="mestitulofin">
									<br>
									<p class="gotham">
										<b class="fontgrande">
											<?php echo $descuentos2;?>%
										</b>
										<br>
										Inscripción individual
										<br>
										<br>
										<b class="fontgrande">
											<?php echo $descuentos2;?>%+ 
										<b class="fontmediangran">
											10%*
										</b>
										</b>
									<br>
									Inscripción especial<br>
									10% de descuentos adicional<br>
									a lo ya rebajado
									<br>
									</p>
								</div>
								<div id="mesdivinterfin" style="display:none;">
									<br>
									<br>
									<p style="font-family:GOTHAM-THIN_0;">
										<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold;"><?php echo $descuentos2;?>%</b>
										<br>
										de descuento
										<br>
										<br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;">
										</div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>
										fecha límite primer pago<br>
										<?php echo $fechaprimerpagofines2;?><br>
										fecha de último pago<br>
										<?php echo $fechaultimopagofines2 ;?><br><br>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>Resumen de inversión <br>
										<b style=" font-size:5vh;">$
										<?php echo number_format($descuentofines2);?></b>
										<br><br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
									</center>
									<diV class="corolobaselicen">
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
											<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos2;?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
										</p>
										<center>
											<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<p style="font-family:GOTHAM-THIN_0;">
											<br>3 o más personas que <br> se inscriban en grupo 
											<br> o<br>si tomaste curso en otro instituto<br><br>
										</p>
										<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
										<b>Precio Especial</b><br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezfines2);?></b><br><br>
										</p>
									</diV>
							<button type="button" class="btnins" onClick="iniciarcurs('Fines de Semana','ExPAA')">Detalles de Inscripción</button>
					</div>
			</div>
	</div>
						<center>
<img onClick="mesnerfin()" id="mesmasfin" src="img/logos/plus.png" class="masdivindes"/>
</center>
						</div>
					</td>
					<td valign="top" class="td" width="33%">
						<div class="paddinpres">
							<div class="licenpago1">
							<div class="titulicendidiv">
								QUINCENAL 
							</div>
							<div class="maegendivpago">
								<div id="quintitulofin">
									<br>
									<p class="gotham">
										<b class="fontgrande">
											<?php echo $descuentos3;?>%
										</b>
										<br>
										Inscripción individual
										<br>
										<br>
										<b class="fontgrande">
											<?php echo $descuentos3;?>%+ 
										<b class="fontmediangran">
											10%*
										</b>
										</b>
									<br>
									Inscripción especial<br>
									10% de descuentos adicional<br>
									a lo ya rebajado
									<br>
									</p>
								</div>
								<div id="quindivinterfin" style="display:none;">
									<br>
									<br>
									<p style="font-family:GOTHAM-THIN_0;">
										<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold;"><?php echo $descuentos3;?>%</b>
										<br>
										de descuento
										<br>
										<br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;">
										</div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>
										fecha límite primer pago<br>
										<?php echo $fechaprimerpagofines3;?><br>
										fecha de último pago<br>
										<?php echo $fechaultimopagofines3;?><br><br>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
									</center>
									<p style="font-family:GOTHAM-THIN_0;">
										<br>Resumen de inversión <br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentofines3);?></b>
										<br><br>
									</p>
									<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
									</center>
									<diV class="corolobaselicen">
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
											<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos3;?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
										</p>
										<center>
											<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<p style="font-family:GOTHAM-THIN_0;">
											<br>3 o más personas que <br> se inscriban en grupo 
											<br> o<br>si tomaste curso en otro instituto<br><br>
										</p>
										<center>
										<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
										</center>
										<br>
										<p style="font-family:GOTHAM-THIN_0;">
										<b>Precio Especial</b><br>
										<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezfines3);?></b><br><br>
										</p>
									</diV>
							<button type="button" class="btnins" onClick="iniciarcurs('Fines de Semana','ExPAA')">Detalles de Inscripción</button>
					</div>
			</div>
	</div>
						<center>
<img onClick="quinnerfin()" id="quinmasfin" src="img/logos/plus.png" class="masdivindes"/>
</center>
						</div>
					</td>
					</tr>
					</tbody>
				</table>
		</div>
	</div>
		<script>
		function aniinerfin(){
			var antidiv = document.getElementById("antidivinterfin");
			var masmenosdiv = document.getElementById("antimasfin");
			var titutloanti = document.getElementById("antititulofin");
			if(antidiv.style.display=="block"){
				antidiv.style.display="none";
				masmenosdiv.src ="img/logos/plus.png";
				titutloanti.style.display="block";
			}
			else{
				titutloanti.style.display="none";
				antidiv.style.display="block";
				masmenosdiv.src ="img/logos/minus.png";
			}
			
		}
		function mesnerfin(){
			var antidiv = document.getElementById("mesdivinterfin");
			var masmenosdiv = document.getElementById("mesmasfin");
			var titutloanti = document.getElementById("mestitulofin");
			if(antidiv.style.display=="block"){
				antidiv.style.display="none";
				masmenosdiv.src ="img/logos/plus.png";
				titutloanti.style.display="block";
			}
			else{
				titutloanti.style.display="none";
				antidiv.style.display="block";
				masmenosdiv.src ="img/logos/minus.png";
			}
			
		}
		function quinnerfin(){
			var antidiv = document.getElementById("quindivinterfin");
			var masmenosdiv = document.getElementById("quinmasfin");
			var titutloanti = document.getElementById("quintitulofin");
			if(antidiv.style.display=="block"){
				antidiv.style.display="none";
				masmenosdiv.src ="img/logos/plus.png";
				titutloanti.style.display="block";
			}
			else{
				titutloanti.style.display="none";
				antidiv.style.display="block";
				masmenosdiv.src ="img/logos/minus.png";
			}
			
		}
		</script>
		<br><br>
		<p class="rojotitulocurslandin">Aceptamos pagos con tarjeta</p>	
		<table class="table" role="table" width="75%" style="border-collapse: collapse;">
			<tbody class="tbody" role="rowgroup">
			<tr class="tr" role="row">
				<td valign="top" class="td" width="50%">
					<table width="100%">
						<tr>
							<td width="33%">
								<img src="img/tarjetas/americanexpress.png" width="100%">
							</td>
							<td width="33%">
								<img src="img/tarjetas/carnet.png" width="100%">
							</td>
							<td width="33%">
								<img src="img/tarjetas/Mastercard.png" width="100%">
							</td>
						</tr>
					</table>
				</td>
				<td valign="top" class="td" width="50%">
					<table width="100%">
						<tr>
							<td width="33%">
								<img src="img/tarjetas/sivale.png" width="100%">
							</td>
							<td width="33%">
								<img src="img/tarjetas/ticket.png" width="100%">
							</td>
							<td width="33%">
								<img src="img/tarjetas/visa.png" width="100%">
							</td>
						</tr>
					</table>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
</center>
	
	
	
	
	
	
</script>	
	
	

<?php include("incluciones/pie.php"); ?>
<?php 
$v1=$_GET['Curso'];
if($v1 =="Intersemana"){
	echo "
	 <script language='javascript'>
	  document.getElementById('lunesaviernes').style.display = 'block';
	 document.getElementById('finesdesemana').style.display = 'none';
	 	document.getElementById('divintersem').classList.remove('interlicen');
		document.getElementById('divintersem').classList.add('selectlicen');
		document.getElementById('divfinessem').classList.remove('selectlicen');
		document.getElementById('divfinessem').classList.add('interlicen');
    </script>
	 ";
	}
	if($v1 =="FinesdeSemana"){
	echo "
	 <script language='javascript'>
	 document.getElementById('lunesaviernes').style.display = 'none';
	 document.getElementById('finesdesemana').style.display = 'block';
	 document.getElementById('divfinessem').classList.remove('interlicen');
	 document.getElementById('divfinessem').classList.add('selectlicen');
		document.getElementById('divintersem').classList.remove('selectlicen');
		document.getElementById('divintersem').classList.add('interlicen');
    </script>
	 ";
	}

?>
<script>
	function interdiv(){
		document.getElementById('lunesaviernes').style.display = 'block';
	 document.getElementById('finesdesemana').style.display = 'none';
	 	document.getElementById('divintersem').classList.remove('interlicen');
		document.getElementById('divintersem').classList.add('selectlicen');
		document.getElementById('divfinessem').classList.remove('selectlicen');
		document.getElementById('divfinessem').classList.add('interlicen');
	}
	function finesdiv(){
		document.getElementById('lunesaviernes').style.display = 'none';
	 document.getElementById('finesdesemana').style.display = 'block';
	 document.getElementById('divfinessem').classList.remove('interlicen');
	 document.getElementById('divfinessem').classList.add('selectlicen');
		document.getElementById('divintersem').classList.remove('selectlicen');
		document.getElementById('divintersem').classList.add('interlicen');
	}
</script>
</body>
</html>
