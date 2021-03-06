<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="css/menubla.css">
	<link rel="stylesheet" href="css/esli-.css">
	<?php include("incluciones/widgets.php"); ?>
	<?php include("incluciones/menublanc.php"); ?>
	<?php include("incluciones/podiv.php"); ?>
	<?php include("incluciones/masinfodivcurs.php"); ?>
</head>

<body>

	<?php include("incluciones/analitycsbody.php"); ?>
	<?php
	$descuento1 = 0.40;
	$descuento2 = 0.35;
	$descuento3 = 0.30;
	$fechadedescuento = "15 de octubre";

	function sacardescuento($cantidad, $descuento)
	{
		$descuento = $cantidad * $descuento;
		$final = $cantidad - $descuento;
		return $final;
	}
	function sacar10mas($cantidad)
	{
		$descuento = $cantidad * 0.10;
		$final = $cantidad - $descuento;
		return $final;
	}
	$descuentos1 = "40";
	$descuentos2 = "35";
	$descuentos3 = "30";

	//VARIABLES INTERSEMANAL
	$Int_total_de_semanas = "3";
	$Int_fecha_de_inicio = "25 de octubre";
	$Int_fecha_de_termino = "12 de noviembre";
	$Int_horas_diarias = "4";
	$Int_cantidad_examenes_simulacro = "4";
	$Int_total_de_horas = "60";
	$Int_precio_curso = 6290;
	$Int_horario_matutino = "09:00 - 11:00 / 11:00 - 13:00";
	$Int_horario_vespertino = "15:00 - 19:00";

	//---------------------------------------------------------------NO TOCAR-------------------------------------------------------------//
	//primerdeeuntgo
	$fechaprimerpagointer1 = $fechadedescuento;
	$fechaultimopagointer1 = "25 de octubre";
	$descuentointer1 = round(sacardescuento($Int_precio_curso, $descuento1));
	$descuentodiezinter1 = round(sacar10mas($descuentointer1));
	//segundodescuento
	$fechaprimerpagointer2 = $fechadedescuento;
	$fechaultimopagointer2 = "25 de octubre";
	$descuentointer2 = round(sacardescuento($Int_precio_curso, $descuento2));
	$descuentodiezinter2 = round(sacar10mas($descuentointer2));
	//stercerdescuento
	$fechaprimerpagointer3 = $fechadedescuento;
	$fechaultimopagointer3 = "25 de octubre";
	$descuentointer3 = round(sacardescuento($Int_precio_curso, $descuento3));
	$descuentodiezinter3 = round(sacar10mas($descuentointer3));
	//fin intersemana variables

	//variables fines de semana
	$Fines_total_de_semanas = "7 S??BADOS";
	$Fines_fecha_de_inicio = "25 de septiembre";
	$Fines_fecha_de_termino = "06 de noviembre";
	$Fines_horas_diarias = "5";
	$Int_cantidad_examenes_simulacrofines = "6";
	$Fines_total_de_horas = "35";
	$Fines_precio_curso = 5990;
	$Fines_horario_matutino = ": 09:00 - 14:00";
	$Fines_horario_vespertino = " ";

	//primerdeeuntgo
	$fechaprimerpagofines1 = $fechadedescuento;
	$fechaultimopagofines1 = "25 de septiembre";
	$descuentofines1 = round(sacardescuento($Fines_precio_curso, $descuento1));
	$descuentodiezfines1 = round(sacar10mas($descuentofines1));
	//segundodescuento
	$fechaprimerpagofines2 = $fechadedescuento;
	$fechaultimopagofines2 = "15 de octubre";
	$descuentofines2 = round(sacardescuento($Fines_precio_curso, $descuento2));
	$descuentodiezfines2 = round(sacar10mas($descuentofines2));
	//stercerdescuento
	$fechaprimerpagofines3 = $fechadedescuento;
	$fechaultimopagofines3 = "15 de Octubre";
	$descuentofines3 = round(sacardescuento($Fines_precio_curso, $descuento3));
	$descuentodiezfines3 = round(sacar10mas($descuentofines3));
	//fin fines de semana variables

	//---------------------------------------------------------------FIN NO TOCAR-------------------------------------------------------------//


	?>

	<div class="divinicurso" style="background-image: url('img/slider/abogado.png');">
		<div style="width: 100%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);">
			<table class="tablecurses" width="60%">
				<tr>
					<td valign="middle" width="100%" style="text-align: center;">
						<img class="logoscursos" src="img/logos/intex.png">
						<span class="texttitulocursos">INTEX</span>
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
				<tr class="botones_luis">
					<td onClick="location.href='/IntexPremiun'" width="50%" id="divintersem" class="selectmedic">
						Intersemanal
					</td>
					<td style="display:none" onClick="location.href='IntexPremiun?Curso=FinesdeSemana'" width="50%" class="intermodcemedic" id="divfinessem">
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
							<td valign="top" class="td" width="50%">
								<div class="texinitexdiv">
									<p class="texnegbody">
										Comprometido con tu educaci??n superior, CE UNI pone a tu disposici??n una sede cerca de ti, donde podr??s cursar nuestro sistema de capacitaci??n avanzado en un espacio adaptado para tu mayor comodidad, equipado con tecnolog??a de apoyo para proporcionarte el entrenamiento apropiado en las ??reas de instrucci??n exigidas en la PAA y de este modo lograr tu m??ximo aprovechamiento. Todas nuestras sedes cuentan con pantallas y/o proyectores, mismos que ser??n utilizados por tu profesor Master Training, como herramienta del m??todo de entrenamiento ???COACHING??? y as?? lograr un mayor acercamiento e interacci??n con los alumnos. 

									</p>
								</div>

							</td>
							<td valign="top" class="td" width="50%">
								<div class="tetimonisaaseguraingreso" style="background: none;">
									<div class="divinicursodictamen4" style="background: none;">
										<div style="width: 100%; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">

											<div class="testialum">
												<p class="ceistitulocurslandin">TESTIMONIOS DE NUESTROS ALUMNOS</p>
												<div class="owl-carousel owl-theme">
													<div class="item">
														<p class="opniontexlandincur">Excelente servicio, muy capacitado todo el personal excelente trato</p>
														<p class="personatex">-Lizeth Espinoza</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">??Excelente curso! Capacitaci??n 100% profesional. Excelentes maestros y excelente ambiente.</p>
														<p class="personatex">-Isaac Serna Jim??nez</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Muy buen servicio y atenci??n, el contenido de las clases son excelentes</p>
														<p class="personatex">-Joseline Gonz??lez</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Excelente trato, te apoyan en las dudas que tienes, asesor??a personalizada... me gust?? mucho el curso.</p>
														<p class="personatex">-Brendita G??mez</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">ufff los profesores dan muy buen trato y est??n muy capacitados en muy poco tiempo se est?? dando bastante ayuda.</p>
														<p class="personatex">-Karol Garcia</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Antes de entrar al CEU yo no me ve??a en la prepa porque sal?? de secundaria con un promedio de 8 y... Es bastante bajo, pero la forma de ense??ar de los maestros y la confianza que se respira all?? hicieron que a??n as?? saliera en las listas.</p>
														<p class="personatex">-Vanessa Yanzueth</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Me mega encanto, ma??ana hago el examen y me siento demasiado preparada, tienen maestros de primera, ense??a excelentemente bien, si no entiendes algo te lo explican hasta que entiendas al 100% </p>
														<p class="personatex">-Ale Gonzalez Chaho</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Me encant??, los maestros y todo el personal es muy amable y muy capacitado, te ense??an las cosas de una manera muy clara para que lo entiendas bien,el material y todo lo que te dan es muy bueno.</p>
														<p class="personatex">-Vanessa Yanzueth</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Trabajan super bien me encanto me ense??aron cosas que la verdad ni en la secundaria me lo explicaban bien tienen profesores incre??bles y te hacen estar seguro de ti mismo.</p>
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
											dotsEach: true,
											autoplay: true,
											autoplayHoverPause: true,
											autoplayTimeout: 3000,
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

			</td>
			</tr>
			</tbody>
			</table>

			<table class="table" role="table" width="100%" style="border-collapse: collapse;">
				<tbody class="tbody" role="rowgroup">
					<tr class="tr" role="row">
						<td valign="top" class="td" width="33.3%">
							<div class="merginatrib">
							</div>
						</td>
						<td valign="top" class="td" width="33.3%">
							<div class="merginatrib">
								<center>
									<img src="img/logos/auatri.png" class="logatricurso">
									<p class="texnegbody">
										Curso con capacidad limitada para brindar atenci??n personalizada, cupo m??ximo 12 alumnos
									</p>
								</center>
							</div>
						</td>
						<td valign="top" class="td" width="33.3%">
							<div class="merginatrib">
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<br>
			<br>
			<br>
			<!-----------------------------------------------------------------FIN NO TOCAR----aqui va----------------------------------------------------------->
			<div class="contenedor_general-2">

				<div class="contenedor-btn-cambiante">
					<button class="tablink" onclick="openPage('f-h', this, '#b4252a')" id="defaultOpen2">
						<img class="img2" src="img/esli/es1.png">
						FECHAS Y HORARIOS
					</button>
				</div>

				<div class="contenedor-btn-cambiante">
					<button class="tablink" onclick="openPage('t-i', this, '#bb3b3f')">
						<img class="img2" src="img/esli/es2.png">
						TEMAS IMPARTIDOS
					</button>
				</div>

				<div class="contenedor-btn-cambiante">
					<button class="tablink" onclick="openPage('p-r', this, '#9b7200')">
						<img class="img2" src="img/esli/es3.png">
						PROGRAMAS DE REFORZAMIENTO
					</button>
				</div>

				<div class="contenedor-btn-cambiante">
					<button class="tablink" onclick="openPage('m-d', this, '#c0792d')">
						<img class="img2" src="img/esli/es4.png">
						MATERIAL DID??CTICO
					</button>
				</div>

				<div class="contenedor-btn-cambiante">
					<button class="tablink" onclick="openPage('m-t', this, '#cc8e4c')">
						<img class="img2" src="img/esli/es5.png">
						MASTER TRAINING
					</button>
				</div>
			</div>
			<div id="divdescrol1"></div>
			<div id="f-h" class="tabcontent">

				<p class="titulo-tab">

					INTERSEMANAL <br>
					DURACI??N <?php echo $Int_total_de_semanas; ?> SEMANAS

				</p>
				<div class="contenedor-general-tabs">
					<!--row-->

					<div class="contenedor-info-tab">
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								Fecha de inicio:
							</span>
							<?php echo $Int_fecha_de_inicio; ?>
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								Fecha de t??rmino:
							</span>
							<?php echo $Int_fecha_de_termino; ?>
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								Horas por sesi??n:
							</span>
							<?php echo $Int_horas_diarias; ?> Horas
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								Total de semanas:
							</span>
							<?php echo $Int_total_de_semanas; ?> Semanas
						</b>

					</div>

					<div class="contenedor-info-tab">
						<!--column

						<b class="info-intersemanal">
							<span class="bold-tab">
								Matutino:
							</span>
							<?php //echo $Int_horario_matutino; ?>
						</b>-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								Vespertino:
							</span>
							<?php echo $Int_horario_vespertino; ?>
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								Total de horas:
							</span>
							<?php echo $Int_total_de_horas; ?> Horas
						</b>

					</div>

				</div>
			</div>

			<div id="t-i" class="tabcontent">

				<div class="contenedor-general-tabs">
					<!--row-->

					<div class="contenedor-info-tab">
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								Lectura:
							</span>
							Desarrollar??s mayor habilidad verbal, lo que se traduce en un aumento de tu capacidad de lenguaje y vocabulario en contexto, para la comprensi??n e interpretaci??n de lecturas. Aprender??s an??lisis de textos literarios y no literarios. Ser??s capaz de hacer inferencias e interpretar los textos de manera r??pida y eficaz.
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								Redacci??n:
							</span>
							Aprender??s las operaciones ling??isticas que organizan la producci??n coherente y creativa de las oraciones que forman una composici??n bien escrita, como pueden ser: Elisi??n, Adici??n, Generalizaci??n, Integraci??n y Particularizaci??n.
						</b>

					</div>

					<div class="contenedor-info-tab">
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								Matem??ticas:
							</span>
							Conseguir??s incrementar tu agilidad Matem??tica y la comprensi??n total de la misma, mediante la revisi??n puntual y ordenada de los temas y la ejecuci??n de ejercicios que reforzar??n tu habilidad para procesar, analizar y utilizar informaci??n en la soluci??n de problemas de los tem??s que componen a la PAA, como son: Aritm??tica, Algebra, Geometr??a, An??lisis de Datos y Probabilidad.
						</b>

						


					</div>
				</div>
			</div>

			<div id="p-r" class="tabcontent">

				<div class="contenedor-general-tabs">
					<!--row-->

					<div class="contenedor-info-tab">
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								Tutor??as 24/7:
							</span>
							Tendr??s a tu disposici??n tutor??as personalizadas por parte de tus profesores categor??a Master training, a las que tendr??s acceso desde la plataforma virtual, donde estaremos resolviendo todas tus dudas durante tus horas de estudio que no sean dentro del sal??n de clases.
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								Asesor??as personalizadas:
							</span>
							Las asesor??as personalizadas ser??n parte de un programa de reforzamiento de contenidos que ves durante tus clases, estar??n basadas en los resultados de tu evaluaciones. Asimismo, trabajaremos ??nicamente en la soluci??n de ejercicios en los que t?? necesitas un mayor reforzamiento.
						</b>

					</div>

					<div class="contenedor-info-tab">
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								Sesiones grupal:
							</span>
							Participar??s en actividades de competencia grupal, donde llevar??n a cabo una serie de din??micas de interacci??n para reforzar tus habilidades con un m??todo extraordinario.
						</b>

					</div>
				</div>
			</div>

			<div id="m-d" class="tabcontent">
				<div class="contenedor-general-tabs">
					<!--row-->

					<div class="contenedor-info-tab">
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								1 Manual de Lectura y redacci??n:
							</span>
							Contiene teor??a, marcos explicativos, ejemplos y referencias, ello con la finalidad de que comprendas cada uno de los temas. Asimismo, con la finalidad de que tu comprensi??n sea ??ptima hay ejercicios aislados de cada uno de los temas y lecturas con preguntas de tipo examen.
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								1 Manual Matem??tico:
							</span>
							Contiene ejercicios de Matem??ticas con el mismo grado de dificultad que los ejercicios del examen real, mismos con los que podr??s aumentar tu agilidad para procesar, analizar y utilizar la informaci??n en la soluci??n de problemas de aritm??tica, estad??stica y probabilidad, ??lgebra y geometr??a.
						</b>

						

					</div>

					<div class="contenedor-info-tab">
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								1 Manual de ex??menes tem??ticos:
							</span>
							Contiene ex??menes enfocados en cada uno de los temas con los que se compone la PAA con el cual podr??s reforzar exhaustivamente cada uno de los contenidos vistos en el curso.
						</b>

					
						<b class="info-intersemanal">
							<span class="bold-tab">
								<?php echo $Int_cantidad_examenes_simulacro; ?>
								Ex??menes simulacro:
							</span>
							Nuestros ex??menes exclusivos son adaptados a la forma de aplicaci??n de la PAA; contienen la misma cantidad de ejercicios, grado de dificultad similar o superior y tiempos establecidos para cada m??dulo.
						</b>

					</div>
				</div>
			</div>

			<div id="m-t" class="tabcontent">
				<div class="contenedor-general-tabs">
					<!--row-->

					<div class="contenedor-info-tab" style="width: 100% !important;">
						<!--column-->

						<b class="info-intersemanal">
							??Qu?? hace a nuestros profesores entrar en la categor??a de Master Training?
						</b>

						<b class="info-intersemanal">
							En CE UNI creemos firmemente en el conocimiento, experiencia, disciplina e innovaci??n como caracter??sticas fundamentales en nuestros docentes, por esto:
						</b>

						<b class="info-intersemanal">
							??? Nuestros profesores Master Training dominan las ??reas de la PAA (Prueba de Aptitud Acad??mica), ya que son egresados de licenciaturas del ??rea de Ciencias Exactas y Lengua Espa??ola.<br>
							??? Tienen al menos tres a??os de experiencia como docentes.<br>
							??? Cuentan con experiencia real en el examen, ya que son egresados de la Universidad de Guadalajara. <br>
							??? Tienen un promedio mayor al 85% de admitidos en sus cursos. <br>
							??? Cuentan con capacitaci??n constante e innovadora para hacer de sus clases una experiencia did??ctica m??s interactiva y estimulante para el alumno. <br>
							??? Tienen una aprobaci??n del alumnado mayor al 95% .
						</b>

					</div>

				</div>
			</div>
			<script>
				function openPage(pageName, elmnt, color) {
					$('html,body').animate({
        				scrollTop: $("#divdescrol1").offset().top
    				}, 'slow');
					var i, tabcontent, tablinks;
					tabcontent = document.getElementsByClassName("tabcontent");
					for (i = 0; i < tabcontent.length; i++) {
						tabcontent[i].style.display = "none";
					}
					tablinks = document.getElementsByClassName("tablink");
					for (i = 0; i < tablinks.length; i++) {
						tablinks[i].style.backgroundColor = "";
					}
					document.getElementById(pageName).style.display = "block";
					elmnt.style.backgroundColor = color;
				}

				function openPage2(pageName, elmnt, color) {
					$('html,body').animate({
        				scrollTop: $("#divdescrol2").offset().top
    				}, 'slow');
					var i, tabcontent, tablinks;
					tabcontent = document.getElementsByClassName("tabcontent");
					for (i = 0; i < tabcontent.length; i++) {
						tabcontent[i].style.display = "none";
					}
					tablinks = document.getElementsByClassName("tablink2");
					for (i = 0; i < tablinks.length; i++) {
						tablinks[i].style.backgroundColor = "";
					}
					document.getElementById(pageName).style.display = "block";
					elmnt.style.backgroundColor = color;
				}

				// Get the element with id="defaultOpen" and click on it
				$(document).ready(function() {
					if (window.location.search.indexOf('FinesdeSemana') > -1) {
						document.getElementById("defaultOpen").click();
					} else {
						document.getElementById("defaultOpen2").click();
					}
				});
			</script>
			<!-----------------------------------------------------------------FIN NO TOCAR--------------------------------------------------------------->

			<div class="espacioblanccursos"></div>
			<script>
				function atributo1() {
					if (document.getElementById("divinfoatri1").style.display == "block") {
						var w2 = window.innerWidth;
						if (w2 < 940) {
							document.getElementById("divinfoatri1").style.display = "none";
							document.getElementById("flecha1").src = "img/logos/atributos/cemedic/plus.png";
							document.getElementById("tablecursatri1").classList.add("infoatritable");
							document.getElementById("tablecursatri1").classList.remove("infoatritableslect");
						}
					} else {
						document.getElementById("flecha1").src = "img/logos/atributos/cemedic/minus.png";
						document.getElementById("tablecursatri1").classList.remove("infoatritable");
						document.getElementById("tablecursatri1").classList.add("infoatritableslect");
						document.getElementById("divinfoatri1").style.display = "block";
						document.getElementById("tablecursatri2").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri2").classList.add("infoatritable");
						document.getElementById("divinfoatri2").style.display = "none";
						document.getElementById("tablecursatri3").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri3").classList.add("infoatritable");
						document.getElementById("divinfoatri3").style.display = "none";
						document.getElementById("tablecursatri4").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri4").classList.add("infoatritable");
						document.getElementById("divinfoatri4").style.display = "none";
						document.getElementById("tablecursatri5").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri5").classList.add("infoatritable");
						document.getElementById("divinfoatri5").style.display = "none";
					}
				}

				function atributo2() {
					if (document.getElementById("divinfoatri2").style.display == "block") {
						var w2 = window.innerWidth;
						if (w2 < 940) {
							document.getElementById("divinfoatri2").style.display = "none";
							document.getElementById("flecha2").src = "img/logos/atributos/cemedic/plus.png";
							document.getElementById("tablecursatri2").classList.add("infoatritable");
							document.getElementById("tablecursatri2").classList.remove("infoatritableslect");
						}
					} else {
						document.getElementById("flecha2").src = "img/logos/atributos/cemedic/minus.png";
						document.getElementById("tablecursatri2").classList.remove("infoatritable");
						document.getElementById("tablecursatri2").classList.add("infoatritableslect");
						document.getElementById("divinfoatri2").style.display = "block";
						document.getElementById("tablecursatri1").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri1").classList.add("infoatritable");
						document.getElementById("divinfoatri1").style.display = "none";
						document.getElementById("tablecursatri3").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri3").classList.add("infoatritable");
						document.getElementById("divinfoatri3").style.display = "none";
						document.getElementById("tablecursatri4").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri4").classList.add("infoatritable");
						document.getElementById("divinfoatri4").style.display = "none";
						document.getElementById("tablecursatri5").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri5").classList.add("infoatritable");
						document.getElementById("divinfoatri5").style.display = "none";
					}
				}

				function atributo3() {
					if (document.getElementById("divinfoatri3").style.display == "block") {
						var w2 = window.innerWidth;
						if (w2 < 940) {
							document.getElementById("divinfoatri3").style.display = "none";
							document.getElementById("flecha3").src = "img/logos/atributos/cemedic/plus.png";
							document.getElementById("tablecursatri3").classList.add("infoatritable");
							document.getElementById("tablecursatri3").classList.remove("infoatritableslect");
						}
					} else {
						document.getElementById("flecha3").src = "img/logos/atributos/cemedic/minus.png";
						document.getElementById("tablecursatri3").classList.remove("infoatritable");
						document.getElementById("tablecursatri3").classList.add("infoatritableslect");
						document.getElementById("divinfoatri3").style.display = "block";
						document.getElementById("tablecursatri1").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri1").classList.add("infoatritable");
						document.getElementById("divinfoatri1").style.display = "none";
						document.getElementById("tablecursatri2").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri2").classList.add("infoatritable");
						document.getElementById("divinfoatri2").style.display = "none";
						document.getElementById("tablecursatri4").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri4").classList.add("infoatritable");
						document.getElementById("divinfoatri4").style.display = "none";
						document.getElementById("tablecursatri5").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri5").classList.add("infoatritable");
						document.getElementById("divinfoatri5").style.display = "none";
					}
				}

				function atributo4() {
					if (document.getElementById("divinfoatri4").style.display == "block") {
						var w2 = window.innerWidth;
						if (w2 < 940) {
							document.getElementById("divinfoatri4").style.display = "none";
							document.getElementById("flecha4").src = "img/logos/atributos/cemedic/plus.png";
							document.getElementById("tablecursatri4").classList.add("infoatritable");
							document.getElementById("tablecursatri4").classList.remove("infoatritableslect");
						}
					} else {
						document.getElementById("flecha4").src = "img/logos/atributos/cemedic/minus.png";
						document.getElementById("tablecursatri4").classList.remove("infoatritable");
						document.getElementById("tablecursatri4").classList.add("infoatritableslect");
						document.getElementById("divinfoatri4").style.display = "block";
						document.getElementById("tablecursatri1").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri1").classList.add("infoatritable");
						document.getElementById("divinfoatri1").style.display = "none";
						document.getElementById("tablecursatri2").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri2").classList.add("infoatritable");
						document.getElementById("divinfoatri2").style.display = "none";
						document.getElementById("tablecursatri3").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri3").classList.add("infoatritable");
						document.getElementById("divinfoatri3").style.display = "none";
						document.getElementById("tablecursatri5").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri5").classList.add("infoatritable");
						document.getElementById("divinfoatri5").style.display = "none";
					}
				}

				function atributo5() {
					if (document.getElementById("divinfoatri5").style.display == "block") {
						var w2 = window.innerWidth;
						if (w2 < 940) {
							document.getElementById("divinfoatri5").style.display = "none";
							document.getElementById("flecha5").src = "img/logos/atributos/cemedic/plus.png";
							document.getElementById("tablecursatri5").classList.add("infoatritable");
							document.getElementById("tablecursatri5").classList.remove("infoatritableslect");
						}
					} else {
						document.getElementById("flecha5").src = "img/logos/atributos/cemedic/minus.png";
						document.getElementById("tablecursatri5").classList.remove("infoatritable");
						document.getElementById("tablecursatri5").classList.add("infoatritableslect");
						document.getElementById("divinfoatri5").style.display = "block";
						document.getElementById("tablecursatri1").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri1").classList.add("infoatritable");
						document.getElementById("divinfoatri1").style.display = "none";
						document.getElementById("tablecursatri2").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri2").classList.add("infoatritable");
						document.getElementById("divinfoatri2").style.display = "none";
						document.getElementById("tablecursatri3").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri3").classList.add("infoatritable");
						document.getElementById("divinfoatri3").style.display = "none";
						document.getElementById("tablecursatri4").classList.remove("infoatritableslect");
						document.getElementById("tablecursatri4").classList.add("infoatritable");
						document.getElementById("divinfoatri4").style.display = "none";
					}
				}
			</script>

			<?php include("incluciones/dossedescursointer.php"); ?>


			<div class="margipagosdiv">
				<div class="pagosfon">
					<p class="texsistematitulo">SISTEMAS DE PAGO</p>
					<p class="subtexpago">Costo Total $<?php echo number_format($Int_precio_curso); ?> MXN.</p>
					<table class="table" role="table" width="80%" style="border-collapse: collapse;">
						<tbody class="tbody" role="rowgroup">
							<tr class="tr" role="row">
								<td valign="top" class="td" width="33%">
									<div class="paddinpres">
										<div class="cepropago1">
											<div class="titucemedidiv">
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
														Inscripci??n individual
														<br>
														<br>
														<b class="fontgrande">
															<?php echo $descuentos1; ?>%+
															<b class="fontmediangran">
																10%*
															</b>
														</b>
														<br>
														Inscripci??n especial<br>
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
														Fecha l??mite para apartar tu lugar<br>
														<?php echo $fechaprimerpagointer1; ?><br>
														Fecha de liquidaci??n de curso <br>
														<?php echo $fechaultimopagointer1; ?><br><br>
														<center>
															<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
														</center>
													<p style="font-family:GOTHAM-THIN_0;">
														<br>Resumen de inversi??n <br>
														<b style=" font-size:5vh;">$<?php echo number_format($descuentointer1); ?></b>
														<br><br>
													</p>
													<center>
														<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
													</center>
													<diV class="corolobasecepro">
														<br>
														<p style="font-family:GOTHAM-THIN_0;">
															<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos1; ?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
														</p>
														<center>
															<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
														</center>
														<p style="font-family:GOTHAM-THIN_0;">
															<br>3 o m??s personas que <br> se inscriban en grupo
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
													<button type="button" class="btnins" onClick="iniciarcurs('Intersemanal','ExPAA')">Detalles de Inscripci??n</button>
												</div>
											</div>
										</div>
										<center>
											<img onClick="aniiner()" id="antimas" src="img/logos/plus.png" class="masdivindes" />
										</center>
									</div>
								</td>
								<td valign="top" class="td" width="33%">
									<div class="paddinpres">
										<div class="cepropago1">
											<div class="titucemedidiv">
												QUINCENAL
											</div>
											<div class="maegendivpago">
												<div id="mestitulo">
													<br>
													<p class="gotham">
														<b class="fontgrande">
															<?php echo $descuentos2; ?>%
														</b>
														<br>
														Inscripci??n individual
														<br>
														<br>
														<b class="fontgrande">
															<?php echo $descuentos2; ?>%+
															<b class="fontmediangran">
																10%*
															</b>
														</b>
														<br>
														Inscripci??n especial<br>
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
														Fecha l??mite para apartar tu lugar<br>
														<?php echo $fechaprimerpagointer2; ?><br>
														Fecha de liquidaci??n de curso <br>
														<?php echo $fechaultimopagointer2; ?><br><br>
														<center>
															<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
														</center>
													<p style="font-family:GOTHAM-THIN_0;">
														<br>Resumen de inversi??n <br>
														<b style=" font-size:5vh;">$<?php echo number_format($descuentointer2); ?></b>
														<br><br>
													</p>
													<center>
														<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
													</center>
													<diV class="corolobasecepro">
														<br>
														<p style="font-family:GOTHAM-THIN_0;">
															<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos2; ?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
														</p>
														<center>
															<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
														</center>
														<p style="font-family:GOTHAM-THIN_0;">
															<br>3 o m??s personas que <br> se inscriban en grupo
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
													<button type="button" class="btnins" onClick="iniciarcurs('Intersemanal','ExPAA')">Detalles de Inscripci??n</button>
												</div>
											</div>
										</div>
										<center>
											<img onClick="mesner()" id="mesmas" src="img/logos/plus.png" class="masdivindes" />
										</center>
									</div>
								</td>
								<td valign="top" class="td" width="33%">
									<div class="paddinpres">
										<div class="cepropago1">
											<div class="titucemedidiv">
												SEMANAL
											</div>
											<div class="maegendivpago">
												<div id="quintitulo">
													<br>
													<p class="gotham">
														<b class="fontgrande">
															<?php echo $descuentos3; ?>%
														</b>
														<br>
														Inscripci??n individual
														<br>
														<br>
														<b class="fontgrande">
															<?php echo $descuentos3; ?>%+
															<b class="fontmediangran">
																10%*
															</b>
														</b>
														<br>
														Inscripci??n especial<br>
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
														Fecha l??mite para apartar tu lugar<br>
														<?php echo $fechaprimerpagointer3; ?><br>
														Fecha de liquidaci??n de curso <br>
														<?php echo $fechaultimopagointer3; ?><br><br>
														<center>
															<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
														</center>
													<p style="font-family:GOTHAM-THIN_0;">
														<br>Resumen de inversi??n <br>
														<b style=" font-size:5vh;">$<?php echo number_format($descuentointer3); ?></b>
														<br><br>
													</p>
													<center>
														<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
													</center>
													<diV class="corolobasecepro">
														<br>
														<p style="font-family:GOTHAM-THIN_0;">
															<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos3; ?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
														</p>
														<center>
															<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
														</center>
														<p style="font-family:GOTHAM-THIN_0;">
															<br>3 o m??s personas que <br> se inscriban en grupo
															<br> o<br>si tomaste curso en otro instituto<br><br>
														</p>
														<center>
															<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
														</center>
														<br>
														<p style="font-family:GOTHAM-THIN_0;">
															<b>Precio Especial</b><br>
															<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezinter3); ?></b><br><br>
														</p>
													</diV>
													<button type="button" class="btnins" onClick="iniciarcurs('Intersemanal','ExPAA')">Detalles de Inscripci??n</button>
												</div>
											</div>
										</div>
										<center>
											<img onClick="quinner()" id="quinmas" src="img/logos/plus.png" class="masdivindes" />
										</center>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<script>
				function aniiner() {
					var antidiv = document.getElementById("antidivinter");
					var masmenosdiv = document.getElementById("antimas");
					var titutloanti = document.getElementById("antititulo");
					if (antidiv.style.display == "block") {
						antidiv.style.display = "none";
						masmenosdiv.src = "img/logos/plus.png";
						titutloanti.style.display = "block";
					} else {
						titutloanti.style.display = "none";
						antidiv.style.display = "block";
						masmenosdiv.src = "img/logos/minus.png";
					}

				}

				function mesner() {
					var antidiv = document.getElementById("mesdivinter");
					var masmenosdiv = document.getElementById("mesmas");
					var titutloanti = document.getElementById("mestitulo");
					if (antidiv.style.display == "block") {
						antidiv.style.display = "none";
						masmenosdiv.src = "img/logos/plus.png";
						titutloanti.style.display = "block";
					} else {
						titutloanti.style.display = "none";
						antidiv.style.display = "block";
						masmenosdiv.src = "img/logos/minus.png";
					}

				}

				function quinner() {
					var antidiv = document.getElementById("quindivinter");
					var masmenosdiv = document.getElementById("quinmas");
					var titutloanti = document.getElementById("quintitulo");
					if (antidiv.style.display == "block") {
						antidiv.style.display = "none";
						masmenosdiv.src = "img/logos/plus.png";
						titutloanti.style.display = "block";
					} else {
						titutloanti.style.display = "none";
						antidiv.style.display = "block";
						masmenosdiv.src = "img/logos/minus.png";
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
							<td valign="top" class="td" width="50%">
								<div class="texinitexdiv">
									<p class="texnegbody">
									"Curso ideal para aspirantes a carreras Lic. en Negocios internacionales, Lic. en Contabilidad, Lic. en Mercadotecnia, Lic. en Dise??o Industrial, Lic. en Biolog??a, Lic. en Nutrici??n, Lic. en Psicolog??a, Lic. en Qu??mico Farmac??utico Bi??logo y todas aquellas de ALTA DEMANDA. Para tu capacitaci??n, desarrollamos un sistema de entrenamiento avanzado te??rico-pr??ctico con el cual podr??s incrementar tus habilidades de lectura y razonamiento Matem??tico, de forma EXPONENCIAL y contar??s con Examenes Simlacro de prueba con ejercicios de dificultad similar o superior a los que contiene la PAA con los que pondr??s a prueba tu capacitaci??n de manera constante como el universitario que eres. Para asegurarnos de tu buen resultado y brindarte una atenci??n personalizada, nuestros grupos est??n reducidos a m??ximo 12 alumnos." 
									</p>
								</div>

							</td>
							<td valign="top" class="td" width="50%">
								<div class="tetimonisaaseguraingreso" style="background: none;">
									<div class="divinicursodictamen4" style="background: none;">
										<div style="width: 100%; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">

											<div class="testialum">
												<p class="ceistitulocurslandin">TESTIMONIOS DE NUESTROS ALUMNOS</p>
												<div class="owl-carousel owl-theme">
													<div class="item">
														<p class="opniontexlandincur">Excelente servicio, muy capacitado todo el personal excelente trato</p>
														<p class="personatex">-Lizeth Espinoza</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">??Excelente curso! Capacitaci??n 100% profesional. Excelentes maestros y excelente ambiente.</p>
														<p class="personatex">-Isaac Serna Jim??nez</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Muy buen servicio y atenci??n, el contenido de las clases son excelentes</p>
														<p class="personatex">-Joseline Gonz??lez</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Excelente trato, te apoyan en las dudas que tienes, asesor??a personalizada... me gust?? mucho el curso.</p>
														<p class="personatex">-Brendita G??mez</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">ufff los profesores dan muy buen trato y est??n muy capacitados en muy poco tiempo se est?? dando bastante ayuda.</p>
														<p class="personatex">-Karol Garcia</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Antes de entrar al CEU yo no me ve??a en la prepa porque sal?? de secundaria con un promedio de 8 y... Es bastante bajo, pero la forma de ense??ar de los maestros y la confianza que se respira all?? hicieron que a??n as?? saliera en las listas.</p>
														<p class="personatex">-Vanessa Yanzueth</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Me mega encanto, ma??ana hago el examen y me siento demasiado preparada, tienen maestros de primera, ense??a excelentemente bien, si no entiendes algo te lo explican hasta que entiendas al 100% </p>
														<p class="personatex">-Ale Gonzalez Chaho</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Me encant??, los maestros y todo el personal es muy amable y muy capacitado, te ense??an las cosas de una manera muy clara para que lo entiendas bien,el material y todo lo que te dan es muy bueno.</p>
														<p class="personatex">-Vanessa Yanzueth</p>
													</div>
													<div class="item">
														<p class="opniontexlandincur">Trabajan super bien me encanto me ense??aron cosas que la verdad ni en la secundaria me lo explicaban bien tienen profesores incre??bles y te hacen estar seguro de ti mismo.</p>
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
											dotsEach: true,
											autoplay: true,
											autoplayHoverPause: true,
											autoplayTimeout: 3000,
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
									</center>
								</div>
							</td>
							<td valign="top" class="td" width="33%">
								<div class="merginatrib">
									<center>
										<img src="img/logos/auatri.png" class="logatricurso">
										<p class="texnegbody">
											Curso con capacidad limitada para brindar atenci??n personalizada, cupo m??ximo 12 alumnos
										</p>
									</center>
								</div>
							</td>
							<td valign="top" class="td" width="33%">
								<div class="merginatrib">
									<center>
									</center>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<br>
				<br>
				<!-----------------------------------------------------------------FIN NO TOCAR----aqui va----------------------------------------------------------->
				<div class="contenedor_general-2">

					<div class="contenedor-btn-cambiante">
						<button class="tablink2" onclick="openPage2('f-h-2', this, '#b4252a')" id="defaultOpen">
							<img class="img2" src="img/esli/es1.png">
							FECHAS Y HORARIOS
						</button>
					</div>

					<div class="contenedor-btn-cambiante">
						<button class="tablink2" onclick="openPage2('t-i-2', this, '#bb3b3f')">
							<img class="img2" src="img/esli/es2.png">
							TEMAS IMPARTIDOS
						</button>
					</div>

					<div class="contenedor-btn-cambiante">
						<button class="tablink2" onclick="openPage2('p-r-2', this, '#9b7200')">
							<img class="img2" src="img/esli/es3.png">
							PROGRAMAS DE REFORZAMIENTO
						</button>
					</div>

					<div class="contenedor-btn-cambiante">
						<button class="tablink2" onclick="openPage2('m-d-2', this, '#c0792d')">
							<img class="img2" src="img/esli/es4.png">
							MATERIAL DID??CTICO
						</button>
					</div>

					<div class="contenedor-btn-cambiante">
						<button class="tablink2" onclick="openPage2('m-t-2', this, '#cc8e4c')">
							<img class="img2" src="img/esli/es5.png">
							MASTER TRAINING
						</button>
					</div>
				</div>
				<div id="divdescrol2"></div>
				<div id="f-h-2" class="tabcontent">

					<p class="titulo-tab">


						DURACI??N <?php echo $Fines_total_de_semanas; ?>

					</p>
					<div class="contenedor-general-tabs">
						<!--row-->

						<div class="contenedor-info-tab">
							<!--column-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									Fecha de inicio:
								</span>
								<?php echo $Fines_fecha_de_inicio; ?>
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									Fecha de t??rmino:
								</span>
								<?php echo $Fines_fecha_de_termino; ?>
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									Horas por sesi??n:
								</span>
								<?php echo $Fines_horas_diarias; ?> Horas
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									Total de semanas:
								</span>
								<?php echo $Fines_total_de_semanas; ?>
							</b>

						</div>

						<div class="contenedor-info-tab">
							<!--column-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									Matutino:
								</span>
								<?php echo $Fines_horario_matutino; ?>
							</b>

							<!--<b class="info-intersemanal">
								<span class="bold-tab">
									Vespertino:
								</span>
								<?php //echo $Fines_horario_vespertino; 
								?>
							</b>-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									Total de horas:
								</span>
								<?php echo $Fines_total_de_horas; ?> Horas
							</b>

						</div>

					</div>
				</div>

				<div id="t-i-2" class="tabcontent">

					<div class="contenedor-general-tabs">
						<!--row-->

						<div class="contenedor-info-tab">
							<!--column-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									Lectura y redacci??n:
								</span>
								Desarrollar??s mayor habilidad verbal, lo que se traduce en un aumento de tu capacidad de lenguaje para la comprensi??n e interpretaci??n de lecturas. Adem??s, por la naturaleza de la PAA, perfeccionar??s tanto tu razonamiento deductivo como tu capacidad de interpretaci??n seg??n sea el contexto y uso de las palabras.
							</b>

							

						</div>

						<div class="contenedor-info-tab">
							<!--column-->
							<b class="info-intersemanal">
								<span class="bold-tab">
									Matem??ticas:
								</span>
								Conseguir??s incrementar tu agilidad de Matem??ticas, mediante ejercicios que reforzar??n tu habilidad para procesar, analizar y utilizar informaci??n en la soluci??n de problemas de aritm??tica, ??lgebra, geometr??a, y estad??stica y probabilidad.
							</b>
							

						</div>
					</div>
				</div>

				<div id="p-r-2" class="tabcontent">

					<div class="contenedor-general-tabs">
						<!--row-->

						<div class="contenedor-info-tab">
							<!--column-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									Tutor??as 24/7:
								</span>
								Tendr??s a tu disposici??n tutor??as personalizadas por parte de tus profesores categor??a Master training, a las que tendr??s acceso desde la plataforma virtual, donde estaremos resolviendo todas tus dudas durante tus horas de estudio que no sean dentro del sal??n de clases.
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									Asesor??as personalizadas:
								</span>
								Las asesor??as personalizadas ser??n parte de un programa de reforzamiento de contenidos que ves durante tus clases, estar??n basadas en los resultados de tu evaluaciones. Asimismo, trabajaremos ??nicamente en la soluci??n de ejercicios en los que t?? necesitas un mayor reforzamiento.
							</b>

						</div>

						<div class="contenedor-info-tab">
							<!--column-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									Sesiones grupal:
								</span>
								Participar??s en actividades de competencia grupal, donde llevar??n a cabo una serie de din??micas de interacci??n para reforzar tus habilidades con un m??todo extraordinario.
							</b>

						</div>
					</div>
				</div>

				<div id="m-d-2" class="tabcontent">
					<div class="contenedor-general-tabs">
						<!--row-->

						<div class="contenedor-info-tab">
							<!--column-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									1 Manual de Lectura y redacci??n:
								</span>
								Contiene teor??a, marcos explicativos, ejemplos y referencias, ello con la finalidad de que comprendas cada uno de los temas. Asimismo, con la finalidad de que tu comprensi??n sea ??ptima hay ejercicios aislados de cada uno de los temas y lecturas con preguntas de tipo examen.
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									1 Manual Matem??tico:
								</span>
								Contiene ejercicios de Matem??ticas con el mismo grado de dificultad que los ejercicios del examen real, mismos con los que podr??s aumentar tu agilidad para procesar, analizar y utilizar la informaci??n en la soluci??n de problemas de aritm??tica, estad??stica y probabilidad, ??lgebra y geometr??a.
							</b>

						

						</div>

						<div class="contenedor-info-tab">
							<!--column-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									1 Manual de ex??menes tem??ticos:
								</span>
								Contiene ex??menes enfocados en cada uno de los temas con los que se compone la PAA con el cual podr??s reforzar exhaustivamente cada uno de los contenidos vistos en el curso.
							</b>

							

							<b class="info-intersemanal">
								<span class="bold-tab">
									<?php echo $Int_cantidad_examenes_simulacrofines; ?>
									Ex??menes simulacro:
								</span>
								Nuestros ex??menes exclusivos son adaptados a la forma de aplicaci??n de la PAA; contienen la misma cantidad de ejercicios, grado de dificultad similar o superior y tiempos establecidos para cada m??dulo.
							</b>

						</div>
					</div>
				</div>

				<div id="m-t-2" class="tabcontent">
					<div class="contenedor-general-tabs">
						<!--row-->

						<div class="contenedor-info-tab" style="width: 100% !important;">
							<!--column-->

							<b class="info-intersemanal">
								??Qu?? hace a nuestros profesores entrar en la categor??a de Master Training?
							</b>

							<b class="info-intersemanal">
								En CE UNI creemos firmemente en el conocimiento, experiencia, disciplina e innovaci??n como caracter??sticas fundamentales en nuestros docentes, por esto:
							</b>

							<b class="info-intersemanal">
								??? Nuestros profesores Master Training dominan las ??reas de la PAA (Prueba de Aptitud Acad??mica), ya que son egresados de licenciaturas del ??rea de Ciencias Exactas y Lengua Espa??ola.<br>
								??? Tienen al menos tres a??os de experiencia como docentes.<br>
								??? Cuentan con experiencia real en el examen, ya que son egresados de la Universidad de Guadalajara. <br>
								??? Tienen un promedio mayor al 85% de admitidos en sus cursos. <br>
								??? Cuentan con capacitaci??n constante e innovadora para hacer de sus clases una experiencia did??ctica m??s interactiva y estimulante para el alumno. <br>
								??? Tienen una aprobaci??n del alumnado mayor al 95% .
							</b>

						</div>

					</div>
				</div>

				<!-----------------------------------------------------------------FIN NO TOCAR--------------------------------------------------------------->
				<div class="espacioblanccursos"></div>
				<script>
					function atributo1fin() {
						if (document.getElementById("divinfoatri1fin").style.display == "block") {
							var w3 = window.innerWidth;
							if (w3 < 940) {
								document.getElementById("divinfoatri1fin").style.display = "none";
								document.getElementById("flecha1fin").src = "img/logos/atributos/cemedic/plus.png";
								document.getElementById("tablecursatri1fin").classList.add("infoatritable");
								document.getElementById("tablecursatri1fin").classList.remove("infoatritableslect");
							}
						} else {
							document.getElementById("flecha1fin").src = "img/logos/atributos/cemedic/minus.png";
							document.getElementById("tablecursatri1fin").classList.remove("infoatritable");
							document.getElementById("tablecursatri1fin").classList.add("infoatritableslect");
							document.getElementById("divinfoatri1fin").style.display = "block";
							document.getElementById("tablecursatri2fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri2fin").classList.add("infoatritable");
							document.getElementById("divinfoatri2fin").style.display = "none";
							document.getElementById("tablecursatri3fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri3fin").classList.add("infoatritable");
							document.getElementById("divinfoatri3fin").style.display = "none";
							document.getElementById("tablecursatri4fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri4fin").classList.add("infoatritable");
							document.getElementById("divinfoatri4fin").style.display = "none";
							document.getElementById("tablecursatri5fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri5fin").classList.add("infoatritable");
							document.getElementById("divinfoatri5fin").style.display = "none";
						}
					}

					function atributo2fin() {
						if (document.getElementById("divinfoatri2fin").style.display == "block") {
							var w3 = window.innerWidth;
							if (w3 < 940) {
								document.getElementById("divinfoatri2fin").style.display = "none";
								document.getElementById("flecha2fin").src = "img/logos/atributos/cemedic/plus.png";
								document.getElementById("tablecursatri2fin").classList.add("infoatritable");
								document.getElementById("tablecursatri2fin").classList.remove("infoatritableslect");
							}
						} else {
							document.getElementById("flecha2fin").src = "img/logos/atributos/cemedic/minus.png";
							document.getElementById("tablecursatri2fin").classList.remove("infoatritable");
							document.getElementById("tablecursatri2fin").classList.add("infoatritableslect");
							document.getElementById("divinfoatri2fin").style.display = "block";
							document.getElementById("tablecursatri1fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri1fin").classList.add("infoatritable");
							document.getElementById("divinfoatri1fin").style.display = "none";
							document.getElementById("tablecursatri3fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri3fin").classList.add("infoatritable");
							document.getElementById("divinfoatri3fin").style.display = "none";
							document.getElementById("tablecursatri4fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri4fin").classList.add("infoatritable");
							document.getElementById("divinfoatri4fin").style.display = "none";
							document.getElementById("tablecursatri5fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri5fin").classList.add("infoatritable");
							document.getElementById("divinfoatri5fin").style.display = "none";
						}
					}

					function atributo3fin() {
						if (document.getElementById("divinfoatri3fin").style.display == "block") {
							var w2 = window.innerWidth;
							if (w2 < 940) {
								document.getElementById("divinfoatri3fin").style.display = "none";
								document.getElementById("flecha3fin").src = "img/logos/atributos/cemedic/plus.png";
								document.getElementById("tablecursatri3fin").classList.add("infoatritable");
								document.getElementById("tablecursatri3fin").classList.remove("infoatritableslect");
							}
						} else {
							document.getElementById("flecha3fin").src = "img/logos/atributos/cemedic/minus.png";
							document.getElementById("tablecursatri3fin").classList.remove("infoatritable");
							document.getElementById("tablecursatri3fin").classList.add("infoatritableslect");
							document.getElementById("divinfoatri3fin").style.display = "block";
							document.getElementById("tablecursatri1fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri1fin").classList.add("infoatritable");
							document.getElementById("divinfoatri1fin").style.display = "none";
							document.getElementById("tablecursatri2fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri2fin").classList.add("infoatritable");
							document.getElementById("divinfoatri2fin").style.display = "none";
							document.getElementById("tablecursatri4fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri4fin").classList.add("infoatritable");
							document.getElementById("divinfoatri4fin").style.display = "none";
							document.getElementById("tablecursatri5fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri5fin").classList.add("infoatritable");
							document.getElementById("divinfoatri5fin").style.display = "none";
						}
					}

					function atributo4fin() {
						if (document.getElementById("divinfoatri4fin").style.display == "block") {
							var w2 = window.innerWidth;
							if (w2 < 940) {
								document.getElementById("divinfoatri4fin").style.display = "none";
								document.getElementById("flecha4fin").src = "img/logos/atributos/cemedic/plus.png";
								document.getElementById("tablecursatri4fin").classList.add("infoatritable");
								document.getElementById("tablecursatri4fin").classList.remove("infoatritableslect");
							}
						} else {
							document.getElementById("flecha4fin").src = "img/logos/atributos/cemedic/minus.png";
							document.getElementById("tablecursatri4fin").classList.remove("infoatritable");
							document.getElementById("tablecursatri4fin").classList.add("infoatritableslect");
							document.getElementById("divinfoatri4fin").style.display = "block";
							document.getElementById("tablecursatri1fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri1fin").classList.add("infoatritable");
							document.getElementById("divinfoatri1fin").style.display = "none";
							document.getElementById("tablecursatri2fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri2fin").classList.add("infoatritable");
							document.getElementById("divinfoatri2fin").style.display = "none";
							document.getElementById("tablecursatri3fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri3fin").classList.add("infoatritable");
							document.getElementById("divinfoatri3fin").style.display = "none";
							document.getElementById("tablecursatri5fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri5fin").classList.add("infoatritable");
							document.getElementById("divinfoatri5fin").style.display = "none";
						}
					}

					function atributo5fin() {
						if (document.getElementById("divinfoatri5fin").style.display == "block") {
							var w2 = window.innerWidth;
							if (w2 < 940) {
								document.getElementById("divinfoatri5fin").style.display = "none";
								document.getElementById("flecha5fin").src = "img/logos/atributos/cemedic/plus.png";
								document.getElementById("tablecursatri5fin").classList.add("infoatritable");
								document.getElementById("tablecursatri5fin").classList.remove("infoatritableslect");
							}
						} else {
							document.getElementById("flecha5fin").src = "img/logos/atributos/cemedic/minus.png";
							document.getElementById("tablecursatri5fin").classList.remove("infoatritable");
							document.getElementById("tablecursatri5fin").classList.add("infoatritableslect");
							document.getElementById("divinfoatri5fin").style.display = "block";
							document.getElementById("tablecursatri1fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri1fin").classList.add("infoatritable");
							document.getElementById("divinfoatri1fin").style.display = "none";
							document.getElementById("tablecursatri2fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri2fin").classList.add("infoatritable");
							document.getElementById("divinfoatri2fin").style.display = "none";
							document.getElementById("tablecursatri3fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri3fin").classList.add("infoatritable");
							document.getElementById("divinfoatri3fin").style.display = "none";
							document.getElementById("tablecursatri4fin").classList.remove("infoatritableslect");
							document.getElementById("tablecursatri4fin").classList.add("infoatritable");
							document.getElementById("divinfoatri4fin").style.display = "none";
						}
					}
				</script>



				<?php include("incluciones/dossedescursointer.php"); ?>



				<div class="margipagosdiv">
					<div class="pagosfon">
						<p class="texsistematitulo">SISTEMAS DE PAGO</p>
						<p class="subtexpago">Costo Total <?php echo number_format($Fines_precio_curso); ?> MXN.</p>
						<table class="table" role="table" width="80%" style="border-collapse: collapse;">
							<tbody class="tbody" role="rowgroup">
								<tr class="tr" role="row">
									<td valign="top" class="td" width="33%">
										<div class="paddinpres">
											<div class="cepropago1">
												<div class="titucemedidiv">
													ANTICIPADO
												</div>
												<div class="maegendivpago">
													<div id="antititulofin">
														<br>
														<p class="gotham">
															<b class="fontgrande">
																<?php echo $descuentos1; ?>%
															</b>
															<br>
															Inscripci??n individual
															<br>
															<br>
															<b class="fontgrande">
																<?php echo $descuentos1; ?>%+
																<b class="fontmediangran">
																	10%*
																</b>
															</b>
															<br>
															Inscripci??n especial<br>
															10% de descuentos adicional<br>
															a lo ya rebajado
															<br>
														</p>
													</div>
													<div id="antidivinterfin" style="display:none;">
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
															Fecha l??mite para apartar tu lugar<br>
															<?php echo $fechaprimerpagofines1; ?><br>
															Fecha de liquidaci??n de curso <br>
															<?php echo $fechaultimopagofines1; ?><br><br>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
														<p style="font-family:GOTHAM-THIN_0;">
															<br>Resumen de inversi??n <br>
															<b style=" font-size:5vh;">$<?php echo number_format($descuentofines1); ?></b>
															<br><br>
														</p>
														<center>
															<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
														</center>
														<diV class="corolobasecepro">
															<br>
															<p style="font-family:GOTHAM-THIN_0;">
																<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos1; ?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
															</p>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
															<p style="font-family:GOTHAM-THIN_0;">
																<br>3 o m??s personas que <br> se inscriban en grupo
																<br> o<br>si tomaste curso en otro instituto<br><br>
															</p>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
															<br>
															<p style="font-family:GOTHAM-THIN_0;">
																<b>Precio Especial</b><br>
																<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezfines1); ?></b><br><br>
															</p>
														</diV>
														<button type="button" class="btnins" onClick="iniciarcurs('Fines de Semana','ExPAA')">Detalles de Inscripci??n</button>
													</div>
												</div>
											</div>
											<center>
												<img onClick="aniinerfin()" id="antimasfin" src="img/logos/plus.png" class="masdivindes" />
											</center>
										</div>
									</td>
									<td valign="top" class="td" width="33%">
										<div class="paddinpres">
											<div class="cepropago1">
												<div class="titucemedidiv">
													QUINCENAL
												</div>
												<div class="maegendivpago">
													<div id="mestitulofin">
														<br>
														<p class="gotham">
															<b class="fontgrande">
																<?php echo $descuentos2; ?>%
															</b>
															<br>
															Inscripci??n individual
															<br>
															<br>
															<b class="fontgrande">
																<?php echo $descuentos2; ?>%+
																<b class="fontmediangran">
																	10%*
																</b>
															</b>
															<br>
															Inscripci??n especial<br>
															10% de descuentos adicional<br>
															a lo ya rebajado
															<br>
														</p>
													</div>
													<div id="mesdivinterfin" style="display:none;">
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
															Fecha l??mite para apartar tu lugar<br>
															<?php echo $fechaprimerpagofines2; ?><br>
															Fecha de liquidaci??n de curso <br>
															<?php echo $fechaultimopagofines2; ?><br><br>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
														<p style="font-family:GOTHAM-THIN_0;">
															<br>Resumen de inversi??n <br>
															<b style=" font-size:5vh;">$
																<?php echo number_format($descuentofines2); ?></b>
															<br><br>
														</p>
														<center>
															<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
														</center>
														<diV class="corolobasecepro">
															<br>
															<p style="font-family:GOTHAM-THIN_0;">
																<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos2; ?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
															</p>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
															<p style="font-family:GOTHAM-THIN_0;">
																<br>3 o m??s personas que <br> se inscriban en grupo
																<br> o<br>si tomaste curso en otro instituto<br><br>
															</p>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
															<br>
															<p style="font-family:GOTHAM-THIN_0;">
																<b>Precio Especial</b><br>
																<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezfines2); ?></b><br><br>
															</p>
														</diV>
														<button type="button" class="btnins" onClick="iniciarcurs('Fines de Semana','ExPAA')">Detalles de Inscripci??n</button>
													</div>
												</div>
											</div>
											<center>
												<img onClick="mesnerfin()" id="mesmasfin" src="img/logos/plus.png" class="masdivindes" />
											</center>
										</div>
									</td>
									<td valign="top" class="td" width="33%">
										<div class="paddinpres">
											<div class="cepropago1">
												<div class="titucemedidiv">
													SEMANAL
												</div>
												<div class="maegendivpago">
													<div id="quintitulofin">
														<br>
														<p class="gotham">
															<b class="fontgrande">
																<?php echo $descuentos3; ?>%
															</b>
															<br>
															Inscripci??n individual
															<br>
															<br>
															<b class="fontgrande">
																<?php echo $descuentos3; ?>%+
																<b class="fontmediangran">
																	10%*
																</b>
															</b>
															<br>
															Inscripci??n especial<br>
															10% de descuentos adicional<br>
															a lo ya rebajado
															<br>
														</p>
													</div>
													<div id="quindivinterfin" style="display:none;">
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
															Fecha l??mite para apartar tu lugar<br>
															<?php echo $fechaprimerpagofines3; ?><br>
															Fecha de liquidaci??n de curso <br>
															<?php echo $fechaultimopagofines3; ?><br><br>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
														<p style="font-family:GOTHAM-THIN_0;">
															<br>Resumen de inversi??n <br>
															<b style=" font-size:5vh;">$<?php echo number_format($descuentofines3); ?></b>
															<br><br>
														</p>
														<center>
															<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:100%;"></div>
														</center>
														<diV class="corolobasecepro">
															<br>
															<p style="font-family:GOTHAM-THIN_0;">
																<b style=" font-size:6vh; font-weight:bolder; font-family:Gotham-Bold; "><?php echo $descuentos3; ?>%+ <b style=" font-size:3vh; font-weight:bolder; font-family:Gotham-Bold; ">10%*</b></b><br>de descuento<br><br>
															</p>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
															<p style="font-family:GOTHAM-THIN_0;">
																<br>3 o m??s personas que <br> se inscriban en grupo
																<br> o<br>si tomaste curso en otro instituto<br><br>
															</p>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
															<br>
															<p style="font-family:GOTHAM-THIN_0;">
																<b>Precio Especial</b><br>
																<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezfines3); ?></b><br><br>
															</p>
														</diV>
														<button type="button" class="btnins" onClick="iniciarcurs('Fines de Semana','ExPAA')">Detalles de Inscripci??n</button>
													</div>
												</div>
											</div>
											<center>
												<img onClick="quinnerfin()" id="quinmasfin" src="img/logos/plus.png" class="masdivindes" />
											</center>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<script>
					function aniinerfin() {
						var antidiv = document.getElementById("antidivinterfin");
						var masmenosdiv = document.getElementById("antimasfin");
						var titutloanti = document.getElementById("antititulofin");
						if (antidiv.style.display == "block") {
							antidiv.style.display = "none";
							masmenosdiv.src = "img/logos/plus.png";
							titutloanti.style.display = "block";
						} else {
							titutloanti.style.display = "none";
							antidiv.style.display = "block";
							masmenosdiv.src = "img/logos/minus.png";
						}

					}

					function mesnerfin() {
						var antidiv = document.getElementById("mesdivinterfin");
						var masmenosdiv = document.getElementById("mesmasfin");
						var titutloanti = document.getElementById("mestitulofin");
						if (antidiv.style.display == "block") {
							antidiv.style.display = "none";
							masmenosdiv.src = "img/logos/plus.png";
							titutloanti.style.display = "block";
						} else {
							titutloanti.style.display = "none";
							antidiv.style.display = "block";
							masmenosdiv.src = "img/logos/minus.png";
						}

					}

					function quinnerfin() {
						var antidiv = document.getElementById("quindivinterfin");
						var masmenosdiv = document.getElementById("quinmasfin");
						var titutloanti = document.getElementById("quintitulofin");
						if (antidiv.style.display == "block") {
							antidiv.style.display = "none";
							masmenosdiv.src = "img/logos/plus.png";
							titutloanti.style.display = "block";
						} else {
							titutloanti.style.display = "none";
							antidiv.style.display = "block";
							masmenosdiv.src = "img/logos/minus.png";
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




	<?php include("incluciones/pie.php"); ?>
	<?php
	$v1 = $_GET['Curso'];
	if ($v1 == "Intersemana") {
		echo "
	 <script language='javascript'>
	  document.getElementById('lunesaviernes').style.display = 'block';
	 document.getElementById('finesdesemana').style.display = 'none';
	 	document.getElementById('divintersem').classList.remove('intermodcemedic');
		document.getElementById('divintersem').classList.add('selectmedic');
		document.getElementById('divfinessem').classList.remove('selectmedic');
		document.getElementById('divfinessem').classList.add('intermodcemedic');
    </script>
	 ";
	}
	if ($v1 == "FinesdeSemana") {
		echo "
	 <script language='javascript'>
	 document.getElementById('lunesaviernes').style.display = 'none';
	 document.getElementById('finesdesemana').style.display = 'block';
	 document.getElementById('divfinessem').classList.remove('intermodcemedic');
	 document.getElementById('divfinessem').classList.add('selectmedic');
		document.getElementById('divintersem').classList.remove('selectmedic');
		document.getElementById('divintersem').classList.add('intermodcemedic');
    </script>
	 ";
	}

	?>
	<script>
		function interdiv() {
			document.getElementById('lunesaviernes').style.display = 'block';
			document.getElementById('finesdesemana').style.display = 'none';
			document.getElementById('divintersem').classList.remove('intermodcemedic');
			document.getElementById('divintersem').classList.add('selectmedic');
			document.getElementById('divfinessem').classList.remove('selectmedic');
			document.getElementById('divfinessem').classList.add('intermodcemedic');
		}

		function finesdiv() {
			document.getElementById('lunesaviernes').style.display = 'none';
			document.getElementById('finesdesemana').style.display = 'block';
			document.getElementById('divfinessem').classList.remove('intermodcemedic');
			document.getElementById('divfinessem').classList.add('selectmedic');
			document.getElementById('divintersem').classList.remove('selectmedic');
			document.getElementById('divintersem').classList.add('intermodcemedic');
		}
	</script>
</body>

</html>


<!-------------------------------------------------------------------------------------------------------------------->