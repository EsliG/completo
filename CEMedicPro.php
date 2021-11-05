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
	$Int_total_de_semanas = "13";
	$Int_fecha_de_inicio = "16 de agosto";
	$Int_fecha_de_termino = "12 de noviembre";
	$Int_horas_diarias = "3";
	$Int_cantidad_examenes_simulacro = "12";
	$Int_total_de_horas = "195";
	$Int_precio_curso = 15600;
	$Int_horario_matutino = "10:00 - 13:00";
	$Int_horario_vespertino = "17:00 - 20:00";

	//---------------------------------------------------------------NO TOCAR-------------------------------------------------------------//
	//primerdeeuntgo
	$fechaprimerpagointer1 = $fechadedescuento;
	$fechaultimopagointer1 = "30 de junio";
	$descuentointer1 = round(sacardescuento($Int_precio_curso, $descuento1));
	$descuentodiezinter1 = round(sacar10mas($descuentointer1));
	//segundodescuento
	$fechaprimerpagointer2 = "01 de julio";
	$fechaultimopagointer2 = "15 de julio";
	$descuentointer2 = round(sacardescuento($Int_precio_curso, $descuento2));
	$descuentodiezinter2 = round(sacar10mas($descuentointer2));
	//stercerdescuento
	$fechaprimerpagointer3 = "16 de julio";
	$fechaultimopagointer3 = "30 de julio";
	$descuentointer3 = round(sacardescuento($Int_precio_curso, $descuento3));
	$descuentodiezinter3 = round(sacar10mas($descuentointer3));
	//fin intersemana variables

	//variables fines de semana
	$Fines_total_de_semanas = "13 SÁBADOS y DOMINGOS";
	$Fines_fecha_de_inicio = "14 de agosto";
	$Fines_fecha_de_termino = "06 de noviembre";
	$Fines_horas_diarias = "5";
	$Int_cantidad_examenes_simulacrofines = "12";
	$Fines_total_de_horas = "130";
	$Fines_precio_curso = 13990;
	$Fines_horario_matutino = ": 09:00 - 14:00";
	$Fines_horario_vespertino = " ";

	//primerdeeuntgo
	$fechaprimerpagofines1 = "01 de junio";
	$fechaultimopagofines1 = "30 de junio";
	$descuentofines1 = round(sacardescuento($Fines_precio_curso, $descuento1));
	$descuentodiezfines1 = round(sacar10mas($descuentofines1));
	//segundodescuento
	$fechaprimerpagofines2 = "01 de julio";
	$fechaultimopagofines2 = "15 de julio";
	$descuentofines2 = round(sacardescuento($Fines_precio_curso, $descuento2));
	$descuentodiezfines2 = round(sacar10mas($descuentofines2));
	//stercerdescuento
	$fechaprimerpagofines3 = "16 de julio";
	$fechaultimopagofines3 = "30 de julio";
	$descuentofines3 = round(sacardescuento($Fines_precio_curso, $descuento3));
	$descuentodiezfines3 = round(sacar10mas($descuentofines3));
	//fin fines de semana variables

	//---------------------------------------------------------------FIN NO TOCAR-------------------------------------------------------------//


	?>

	<div class="divinicurso" style="background-image: url('img/slider/cemedic.jpg');">
		<div style="width: 100%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);">
			<table class="tablecurses" width="60%">
				<tr>
					<td valign="middle" width="100%" style="text-align: center;">
						<img class="logoscursos" src="img/logos/cemedic.png">
						<span class="texttitulocursos">CE Medic Pro</span>
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
					<td onClick="location.href='/CEMedicPro'" width="50%" id="divintersem" class="selectmedic">
						Intersemanal
					</td>
					<td onClick="location.href='CEMedicPro?Curso=FinesdeSemana'" width="50%" class="intermodcemedic" id="divfinessem">
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
										"Curso enfocado para aspirantes a carreras como Médico Cirujano y Partero, Lic. en Diseño, Arte y Tecnologías Interactivas, Lic. en Arquitectura, Ingeniería Biomédica, Lic. en Física, Ingeniería Robótica, Lic. en Cirujano Dentista y todas aquellas que exijan un estimado de 90 puntos o más en tu examen para ASEGURAR TU INGRESO, las cuales suelen ser carreras de alta demanda y con un número mayor de NO ADMITIDOS en comparación con los admitidos.<br>
										Para GARANTIZAR TU ADMISIÓN, desarrollamos un sistema de entrenamiento avanzado teórico-práctico con el cual podrás incrementar tus habilidades de lectura y razonamiento Matemático, de forma EXPONENCIAL y contarás con Examenes Simlacro de prueba con ejercicios de dificultad similar o superior a los que contiene la PAA con los que pondrás a prueba tu capacitación de manera constante como el universitario que eres.<br>
										Para asegurarnos de tu buen resultado y brindarte una atención personalizada, nuestros grupos están reducidos a máximo 15 alumnos."

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
														<p class="opniontexlandincur">Me mega encanto, mañana hago el examen y me siento demasiado preparada, tienen maestros de primera, enseña excelentemente bien, si no entiendes algo te lo explican hasta que entiendas al 100% </p>
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
						<td valign="top" class="td" width="33%">
							<div class="merginatrib">
								<center>
									<img src="img/logos/garaatri.png" class="logatricurso">
									<p class="texnegbody">
										Único curso garantizado, consigue un puntaje extraordinario y logra 90 PUNTOS en tu examen con CE Medic Pro.
									</p>
								</center>
							</div>
						</td>
						<td valign="top" class="td" width="33.3%">
							<div class="merginatrib">
								<center>
									<img src="img/logos/coachingantiestres.png" class="logatricurso">
									<p class="texnegbody">
										Taller de asesoría psicológica y técnicas de relajación, serás capaz de controlar el estrés al momento de presentar el examen de admisión
									</p>
								</center>
							</div>
						</td>
						<td valign="top" class="td" width="33.3%">
							<div class="merginatrib">
								<center>
									<img src="img/logos/auatri.png" class="logatricurso">
									<p class="texnegbody">
										Curso con capacidad limitada para brindar atención personalizada, cupo máximo 12 alumnos
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
						MATERIAL DIDÁCTICO
					</button>
				</div>

				<div class="contenedor-btn-cambiante">
					<button class="tablink" onclick="openPage('m-t', this, '#cc8e4c')">
						<img class="img2" src="img/esli/es5.png">
						MASTER TRAINING
					</button>
				</div>
			</div>

			<div id="f-h" class="tabcontent">

				<p class="titulo-tab">

					INTERSEMANAL <br>
					DURACIÓN <?php echo $Int_total_de_semanas; ?> SEMANAS

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
								Fecha de término:
							</span>
							<?php echo $Int_fecha_de_termino; ?>
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								Horas por sesión:
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
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								Matutino:
							</span>
							<?php echo $Int_horario_matutino; ?>
						</b>

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
							Desarrollarás mayor habilidad verbal, lo que se traduce en un aumento de tu capacidad de lenguaje y vocabulario en contexto, para la comprensión e interpretación de lecturas. Aprenderás análisis de textos literarios y no literarios. Serás capaz de hacer inferencias e interpretar los textos de manera rápida y eficaz.
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								Redacción:
							</span>
							Aprenderás las operaciones lingüisticas que organizan la producción coherente y creativa de las oraciones que forman una composición bien escrita, como pueden ser: Elisión, Adición, Generalización, Integración y Particularización.
						</b>

					</div>

					<div class="contenedor-info-tab">
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								Matemáticas:
							</span>
							Conseguirás incrementar tu agilidad Matemática y la comprensión total de la misma, mediante la revisión puntual y ordenada de los temas y la ejecución de ejercicios que reforzarán tu habilidad para procesar, analizar y utilizar información en la solución de problemas de los temás que componen a la PAA, como son: Aritmética, Algebra, Geometría, Análisis de Datos y Probabilidad.
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								Inglés:
							</span>
							Identificarás tu nivel de competencia lingüística: básico, intermedio y avanzado. Podrás, de este modo, medir tu conocimiento en el uso del idioma, a través de la comprensión de lectura y destrezas de redacción evaluadas indirectamente. En síntesis, una adaptación completa al formato de la sección de inglés de la PAA.
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
								Tutorías 24/7:
							</span>
							Tendrás a tu disposición tutorías personalizadas por parte de tus profesores categoría Master training, a las que tendrás acceso desde la plataforma virtual, donde estaremos resolviendo todas tus dudas durante tus horas de estudio que no sean dentro del salón de clases.
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								Asesorías personalizadas:
							</span>
							Las asesorías personalizadas serán parte de un programa de reforzamiento de contenidos que ves durante tus clases, estarán basadas en los resultados de tu evaluaciones. Asimismo, trabajaremos únicamente en la solución de ejercicios en los que tú necesitas un mayor reforzamiento.
						</b>

					</div>

					<div class="contenedor-info-tab">
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								Sesiones grupal:
							</span>
							Participarás en actividades de competencia grupal, donde llevarán a cabo una serie de dinámicas de interacción para reforzar tus habilidades con un método extraordinario.
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
								1 Manual de Lectura y redacción:
							</span>
							Contiene teoría, marcos explicativos, ejemplos y referencias, ello con la finalidad de que comprendas cada uno de los temas. Asimismo, con la finalidad de que tu comprensión sea óptima hay ejercicios aislados de cada uno de los temas y lecturas con preguntas de tipo examen.
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								1 Manual Matemático:
							</span>
							Contiene ejercicios de Matemáticas con el mismo grado de dificultad que los ejercicios del examen real, mismos con los que podrás aumentar tu agilidad para procesar, analizar y utilizar la información en la solución de problemas de aritmética, estadística y probabilidad, álgebra y geometría.
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								1 Manual Inglés:
							</span>
							Contiene lecciones de los 3 temas que componen el examen, el primero hace énfasis en el uso del idioma, y no en conceptos gramaticales, en el segundo practicarás tu destreza en la comprensión de textos en inglés, y por último harás ejercicios de redacción indirecta para mejorar los textos a través de la selección múltiple.
						</b>

					</div>

					<div class="contenedor-info-tab">
						<!--column-->

						<b class="info-intersemanal">
							<span class="bold-tab">
								1 Manual de exámenes temáticos:
							</span>
							Contiene exámenes enfocados en cada uno de los temas con los que se compone la PAA con el cual podrás reforzar exhaustivamente cada uno de los contenidos vistos en el curso.
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								IQLect:
							</span>
							Contiene ejercicios de acondicionamiento y técnica; de desarrollo de ambientes de aprendizaje y fortalecimiento de localización de información; de memoria, de optimización de tiempos y de la calidad de interpretación de lecturas.
						</b>

						<b class="info-intersemanal">
							<span class="bold-tab">
								<?php echo $Int_cantidad_examenes_simulacro; ?>
								Exámenes simulacro:
							</span>
							Nuestros exámenes exclusivos son adaptados a la forma de aplicación de la PAA; contienen la misma cantidad de ejercicios, grado de dificultad similar o superior y tiempos establecidos para cada módulo.
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
							¿Qué hace a nuestros profesores entrar en la categoría de Master Training?
						</b>

						<b class="info-intersemanal">
							En CE UNI creemos firmemente en el conocimiento, experiencia, disciplina e innovación como características fundamentales en nuestros docentes, por esto:
						</b>

						<b class="info-intersemanal">
							• Nuestros profesores Master Training dominan las áreas de la PAA (Prueba de Aptitud Académica), ya que son egresados de licenciaturas del área de Ciencias Exactas y Lengua Española.<br>
							• Tienen al menos tres años de experiencia como docentes.<br>
							• Cuentan con experiencia real en el examen, ya que son egresados de la Universidad de Guadalajara. <br>
							• Tienen un promedio mayor al 85% de admitidos en sus cursos. <br>
							• Cuentan con capacitación constante e innovadora para hacer de sus clases una experiencia didáctica más interactiva y estimulante para el alumno. <br>
							• Tienen una aprobación del alumnado mayor al 95% .
						</b>

					</div>

				</div>
			</div>
			<script>
				function openPage(pageName, elmnt, color) {
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
														Fecha límite para apartar tu lugar<br>
														<?php echo $fechaprimerpagointer1; ?><br>
														Fecha de liquidación de curso <br>
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
													<diV class="corolobasecepro">
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
											<img onClick="aniiner()" id="antimas" src="img/logos/plus.png" class="masdivindes" />
										</center>
									</div>
								</td>
								<td valign="top" class="td" width="33%">
									<div class="paddinpres">
										<div class="cepropago1">
											<div class="titucemedidiv">
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
														Fecha límite para apartar tu lugar<br>
														<?php echo $fechaprimerpagointer2; ?><br>
														Fecha de liquidación de curso <br>
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
													<diV class="corolobasecepro">
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
											<img onClick="mesner()" id="mesmas" src="img/logos/plus.png" class="masdivindes" />
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
														Fecha límite para apartar tu lugar<br>
														<?php echo $fechaprimerpagointer3; ?><br>
														Fecha de liquidación de curso <br>
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
													<diV class="corolobasecepro">
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
															<b style=" font-size:5vh;">$<?php echo number_format($descuentodiezinter3); ?></b><br><br>
														</p>
													</diV>
													<button type="button" class="btnins" onClick="iniciarcurs('Intersemanal','ExPAA')">Detalles de Inscripción</button>
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
										Curso ideal para aspirantes a la carrera de Médico Cirujano y Partero, al ser la carrera más demandada y con mayor número de NO ADMITIDOS, desarrollamos un sistema de entrenamiento avanzado teórico-práctico con GARANTÍA ABSOLUTA, está diseñado para incrementar las habilidades de lectura y razonamiento Matemático, de forma EXPONENCIAL. Para asegurarnos de tu buen resultado y brindarte una atención personalizada, nuestros grupos están reducidos a máximo 15 alumnos.
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
														<p class="opniontexlandincur">Me mega encanto, mañana hago el examen y me siento demasiado preparada, tienen maestros de primera, enseña excelentemente bien, si no entiendes algo te lo explican hasta que entiendas al 100% </p>
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
									})
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
											Curso con capacidad limitada para brindar atención personalizada, cupo máximo 12 alumnos
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
				<!-----------------------------------------------------------------FIN NO TOCAR----aqui va----------------------------------------------------------->
				<div class="contenedor_general-2">

					<div class="contenedor-btn-cambiante">
						<button class="tablink2" onclick="openPage('f-h-2', this, '#b4252a')" id="defaultOpen">
							<img class="img2" src="img/esli/es1.png">
							FECHAS Y HORARIOS
						</button>
					</div>

					<div class="contenedor-btn-cambiante">
						<button class="tablink2" onclick="openPage('t-i-2', this, '#bb3b3f')">
							<img class="img2" src="img/esli/es2.png">
							TEMAS IMPARTIDOS
						</button>
					</div>

					<div class="contenedor-btn-cambiante">
						<button class="tablink2" onclick="openPage('p-r-2', this, '#9b7200')">
							<img class="img2" src="img/esli/es3.png">
							PROGRAMAS DE REFORZAMIENTO
						</button>
					</div>

					<div class="contenedor-btn-cambiante">
						<button class="tablink2" onclick="openPage('m-d-2', this, '#c0792d')">
							<img class="img2" src="img/esli/es4.png">
							MATERIAL DIDÁCTICO
						</button>
					</div>

					<div class="contenedor-btn-cambiante">
						<button class="tablink2" onclick="openPage('m-t-2', this, '#cc8e4c')">
							<img class="img2" src="img/esli/es5.png">
							MASTER TRAINING
						</button>
					</div>
				</div>

				<div id="f-h-2" class="tabcontent">

					<p class="titulo-tab">


						DURACIÓN <?php echo $Fines_total_de_semanas; ?>

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
									Fecha de término:
								</span>
								<?php echo $Fines_fecha_de_termino; ?>
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									Horas por sesión:
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
									Lectura y redacción:
								</span>
								Desarrollarás mayor habilidad verbal, lo que se traduce en un aumento de tu capacidad de lenguaje para la comprensión e interpretación de lecturas. Además, por la naturaleza de la PAA, perfeccionarás tanto tu razonamiento deductivo como tu capacidad de interpretación según sea el contexto y uso de las palabras.
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									Matemáticas:
								</span>
								Conseguirás incrementar tu agilidad de Matemáticas, mediante ejercicios que reforzarán tu habilidad para procesar, analizar y utilizar información en la solución de problemas de aritmética, álgebra, geometría, y estadística y probabilidad.
							</b>

						</div>

						<div class="contenedor-info-tab">
							<!--column-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									Inglés:
								</span>
								Identificarás tu nivel de competencia lingüística: básico, intermedio y avanzado. Podrás, de este modo, medir tu conocimiento en el uso del idioma, a través de la comprensión de lectura y destrezas de redacción evaluadas indirectamente. En síntesis, una adaptación completa al formato de la sección de inglés de la PAA.
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
									Tutorías 24/7:
								</span>
								Tendrás a tu disposición tutorías personalizadas por parte de tus profesores categoría Master training, a las que tendrás acceso desde la plataforma virtual, donde estaremos resolviendo todas tus dudas durante tus horas de estudio que no sean dentro del salón de clases.
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									Asesorías personalizadas:
								</span>
								Las asesorías personalizadas serán parte de un programa de reforzamiento de contenidos que ves durante tus clases, estarán basadas en los resultados de tu evaluaciones. Asimismo, trabajaremos únicamente en la solución de ejercicios en los que tú necesitas un mayor reforzamiento.
							</b>

						</div>

						<div class="contenedor-info-tab">
							<!--column-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									Sesiones grupal:
								</span>
								Participarás en actividades de competencia grupal, donde llevarán a cabo una serie de dinámicas de interacción para reforzar tus habilidades con un método extraordinario.
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
									1 Manual de Lectura y redacción:
								</span>
								Contiene teoría, marcos explicativos, ejemplos y referencias, ello con la finalidad de que comprendas cada uno de los temas. Asimismo, con la finalidad de que tu comprensión sea óptima hay ejercicios aislados de cada uno de los temas y lecturas con preguntas de tipo examen.
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									1 Manual Matemático:
								</span>
								Contiene ejercicios de Matemáticas con el mismo grado de dificultad que los ejercicios del examen real, mismos con los que podrás aumentar tu agilidad para procesar, analizar y utilizar la información en la solución de problemas de aritmética, estadística y probabilidad, álgebra y geometría.
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									1 Manual Inglés:
								</span>
								Contiene lecciones de los 3 temas que componen el examen, el primero hace énfasis en el uso del idioma, y no en conceptos gramaticales, en el segundo practicarás tu destreza en la comprensión de textos en inglés, y por último harás ejercicios de redacción indirecta para mejorar los textos a través de la selección múltiple.
							</b>

						</div>

						<div class="contenedor-info-tab">
							<!--column-->

							<b class="info-intersemanal">
								<span class="bold-tab">
									1 Manual de exámenes temáticos:
								</span>
								Contiene exámenes enfocados en cada uno de los temas con los que se compone la PAA con el cual podrás reforzar exhaustivamente cada uno de los contenidos vistos en el curso.
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									IQLect:
								</span>
								Contiene ejercicios de acondicionamiento y técnica; de desarrollo de ambientes de aprendizaje y fortalecimiento de localización de información; de memoria, de optimización de tiempos y de la calidad de interpretación de lecturas.
							</b>

							<b class="info-intersemanal">
								<span class="bold-tab">
									<?php echo $Int_cantidad_examenes_simulacrofines; ?>
									Exámenes simulacro:
								</span>
								Nuestros exámenes exclusivos son adaptados a la forma de aplicación de la PAA; contienen la misma cantidad de ejercicios, grado de dificultad similar o superior y tiempos establecidos para cada módulo.
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
								¿Qué hace a nuestros profesores entrar en la categoría de Master Training?
							</b>

							<b class="info-intersemanal">
								En CE UNI creemos firmemente en el conocimiento, experiencia, disciplina e innovación como características fundamentales en nuestros docentes, por esto:
							</b>

							<b class="info-intersemanal">
								• Nuestros profesores Master Training dominan las áreas de la PAA (Prueba de Aptitud Académica), ya que son egresados de licenciaturas del área de Ciencias Exactas y Lengua Española.<br>
								• Tienen al menos tres años de experiencia como docentes.<br>
								• Cuentan con experiencia real en el examen, ya que son egresados de la Universidad de Guadalajara. <br>
								• Tienen un promedio mayor al 85% de admitidos en sus cursos. <br>
								• Cuentan con capacitación constante e innovadora para hacer de sus clases una experiencia didáctica más interactiva y estimulante para el alumno. <br>
								• Tienen una aprobación del alumnado mayor al 95% .
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
															Fecha límite para apartar tu lugar<br>
															<?php echo $fechaprimerpagofines1; ?><br>
															Fecha de liquidación de curso <br>
															<?php echo $fechaultimopagofines1; ?><br><br>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
														<p style="font-family:GOTHAM-THIN_0;">
															<br>Resumen de inversión <br>
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
																<br>3 o más personas que <br> se inscriban en grupo
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
														<button type="button" class="btnins" onClick="iniciarcurs('Fines de Semana','ExPAA')">Detalles de Inscripción</button>
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
															Fecha límite para apartar tu lugar<br>
															<?php echo $fechaprimerpagofines2; ?><br>
															Fecha de liquidación de curso <br>
															<?php echo $fechaultimopagofines2; ?><br><br>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
														<p style="font-family:GOTHAM-THIN_0;">
															<br>Resumen de inversión <br>
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
																<br>3 o más personas que <br> se inscriban en grupo
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
														<button type="button" class="btnins" onClick="iniciarcurs('Fines de Semana','ExPAA')">Detalles de Inscripción</button>
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
															Fecha límite para apartar tu lugar<br>
															<?php echo $fechaprimerpagofines3; ?><br>
															Fecha de liquidación de curso <br>
															<?php echo $fechaultimopagofines3; ?><br><br>
															<center>
																<div style=" padding-top:1%;background:rgba(255,255,255,1.00); height:1px; width:80%;"></div>
															</center>
														<p style="font-family:GOTHAM-THIN_0;">
															<br>Resumen de inversión <br>
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
																<br>3 o más personas que <br> se inscriban en grupo
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
														<button type="button" class="btnins" onClick="iniciarcurs('Fines de Semana','ExPAA')">Detalles de Inscripción</button>
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