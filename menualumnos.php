<?php
$idiniciosess = $_SESSION["id"];
$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
$query = mysqli_query($link, "select * from usuario where id='" . $idiniciosess . "'");
$num_rows = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);
$nombre;
if ($num_rows > 0) {
	$nombre = $row['nombre'];
	$imgdefondo = "'data:image/jpeg;base64," . base64_encode($row['Fotodeperfil']) . "'";
	$fotdeperfil = '<div class="fotodeperfilcirculo" style="background-image: url(' . $imgdefondo . ');">
				</div>';
	echo "<script>var idalumno = '" . $idiniciosess . "'; var puntajequenecesitoobtener = " . $row['puntajeminimo'] . "; var mipromediodeprepa = " . $row['promedio'] . ";</script>";
}

$consulta = "SELECT * FROM resutadosexamenes where 	idusuiario= '" . $idiniciosess . "'";
$resultado = $link->query($consulta);
$selectdeexaenesrestanttes = '<select id="queexaenes" class="inputtextformacionin"><option value="" selected>Seleccione un Examen</option>';
$varcontable = 11;
$opcion1 = '<option value="1" >Examen 1</option>';
$opcion2 = '<option value="2" >Examen 2</option>';
$opcion3 = '<option value="3" >Examen 3</option>';
$opcion4 = '<option value="4" >Examen 4</option>';
$opcion5 = '<option value="5" >Examen 5</option>';
$opcion6 = '<option value="6" >Examen 6</option>';
$opcion7 = '<option value="7" >Examen 7</option>';
$opcion8 = '<option value="8" >Examen 8</option>';
$opcion9 = '<option value="9" >Examen 9</option>';
$opcion10 = '<option value="10" >Examen 10</option>';
$opcion11 = '<option value="11" >Examen 11</option>';
while ($row = $resultado->fetch_assoc()) {
	$numerodeexamenselect = $row['numerodeexamen'];
	if ($numerodeexamenselect == 1) {
		$opcion1 = '';
	}
	if ($numerodeexamenselect == 2) {
		$opcion2 = '';
	}
	if ($numerodeexamenselect == 3) {
		$opcion3 = '';
	}
	if ($numerodeexamenselect == 4) {
		$opcion4 = '';
	}
	if ($numerodeexamenselect == 5) {
		$opcion5 = '';
	}
	if ($numerodeexamenselect == 6) {
		$opcion6 = '';
	}
	if ($numerodeexamenselect == 7) {
		$opcion7 = '';
	}
	if ($numerodeexamenselect == 8) {
		$opcion8 = '';
	}
	if ($numerodeexamenselect == 9) {
		$opcion9 = '';
	}
	if ($numerodeexamenselect == 10) {
		$opcion10 = '';
	}
	if ($numerodeexamenselect == 11) {
		$opcion11 = '';
	}
}
$opcionesdeselect = $opcion1 . $opcion2 . $opcion3 . $opcion4 . $opcion5 . $opcion6 . $opcion7 . $opcion8 . $opcion9 . $opcion10 . $opcion11;
$selectdeexaenesrestanttes = $selectdeexaenesrestanttes . $opcionesdeselect . '</select>';
mysqli_close($link);
?>

<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>

<div id="menudesk" class="menu">
	<table style="width:100%; border-collapse: collapse; ">
		<tr>
			<td class="tdlogoplateforma">
				<img id="logomenu" class="imglogo" src="img/logos/logoblancolataforma.png">
			</td>
			<td class="tdmenuplateforma" valign="top">
				<table width="100%" style="border-collapse: collapse;">
					<tr>
						<td class="tdmenuprin">
							<ul class="slimmenu" id="mainmenu">

								<!--<li id="md1" onClick="menuformuariodecontacto()">
    			<a id="md1a">CONTACTO</a>
  			</li>
    		<li  id="md2" onClick="videosclickmenu()">
                <a id="md2a">VIDEOLECCIONES</a>
                
            </li>
   			<li  id="md3" onClick="menualumnosexamenes()" >
        		<a id="md3a" >EXAMENES</a>
       			<ul>
					<li>
						<a>Examenes Simulacro</a>
    	         	</li>
    	         	<li>
						<a>Quizes Español</a>
             		</li>
					<li>
						<a>Quizes Matemáticas</a>
             		</li>
        		</ul>
  			</li>
   			<li  id="md4" onClick="claseenlinea()" style="display: none;">
    			<a id="md4a">CLASES ON-LINE</a>
    		</li>-->
								<li id="md5" onClick="menuualumnosclickindex();">
									<a id="md5a">MI PERFIL</a>
								</li>
							</ul>
						</td>
					</tr>
				</table>
			</td>
			<td class="tdfotdeperfil">
				<?php echo $fotdeperfil; ?>
			</td>
		</tr>
	</table>
</div>
<div class="paramovilesplataforma">
</div>

<script>
	if (screen.width < 940) {
		document.getElementById("logomenu").src = "img/logos/logomov.png";
	}

	var menu = document.getElementById("menudesk");
	$(document).scroll(function() {
		var w5 = window.innerWidth;
		if ($(document).scrollTop() == 0) {
			document.getElementById("menudesk").classList.remove("menuscroll");
			document.getElementById("menudesk").classList.add("menu");
			document.getElementById("logomenu").classList.remove("imglogoscroll");
			document.getElementById("logomenu").classList.add("imglogo");
			document.getElementById("logomenu").src = "img/logos/logoblancolataforma.png";

			if (screen.width < 940) {
				document.getElementById("logomenu").src = "img/logos/logomov.png";
			}
			document.getElementById("mainmenu").style.paddingTop = "35px";

		} else {
			document.getElementById("menudesk").classList.remove("menu");
			document.getElementById("menudesk").classList.add("menuscroll");
			document.getElementById("logomenu").classList.remove("imglogo");
			document.getElementById("logomenu").classList.add("imglogoscroll");
			document.getElementById("logomenu").src = "img/logos/logomov.png";

			document.getElementById("mainmenu").style.paddingTop = "5px";
		}
	});
	$('.slimmenu').slimmenu({
		resizeWidth: '940',
		collapserTitle: '',
		animSpeed: 'medium',
		indentChildren: true,
		childrenIndenter: '&raquo;'
	});
</script>



<div id="inicioalumno" style="display: block;">
</div>

<div id="examnesalumnos" style="display: none;">
</div>

<script>
	function menuualumnosclickindex() {

		document.getElementById("loadermainplatafroma").style.display = "block";
		$.ajax({
			url: "incluciones/indexalumnos.php",
			type: "POST",
			data: {
				idalumno: idalumno
			},
			success: function(response) {
				var table = $('#tablacalificacionesalumn').DataTable();
				$('.customRadioButton').change(function() {
					table.column(3).search(this.value).draw();
					console.log(this.value)
				});

				document.getElementById("loadermainplatafroma").style.display = "none";
				document.getElementById("inicioalumno").innerHTML = response;
				if (screen.width < 940) {
					document.getElementById("mainmenu").style.display = "none";
				}


				document.getElementById("inicioalumno").style.display = "block";
				document.getElementById("examnesalumnos").style.display = "none";

				$("html, body").animate({
					scrollTop: 0
				}, "slow");

			},
			error: function(xhr, status, error) {

				document.getElementById("loadermainplatafroma").style.display = "none";
			}
		});
	}
	menuualumnosclickindex();

	function menualumnosexamenes() {
		document.getElementById("loadermainplatafroma").style.display = "block";
		$.ajax({
			url: "incluciones/indexexamenesalumnos.php",
			type: "POST",
			data: {
				idalumno: idalumno
			},
			success: function(response) {

				document.getElementById("loadermainplatafroma").style.display = "none";
				if (screen.width < 940) {
					document.getElementById("mainmenu").style.display = "none";
				}
				document.getElementById("examnesalumnos").innerHTML = response;
				document.getElementById("examnesalumnos").style.display = "block";
				document.getElementById("inicioalumno").style.display = "none";

				$("html, body").animate({
					scrollTop: 0
				}, "slow");

			},
			error: function(xhr, status, error) {

				document.getElementById("loadermainplatafroma").style.display = "none";
			}
		});
	}

	function claseenlinea() {
		document.getElementById("loadermainplatafroma").style.display = "block";
		$.ajax({
			url: "incluciones/indextomarclases.php",
			type: "POST",
			data: {
				idalumno: idalumno
			},
			success: function(response) {
				if (screen.width < 940) {
					document.getElementById("mainmenu").style.display = "none";
				}
				document.getElementById("loadermainplatafroma").style.display = "none";
				document.getElementById("examnesalumnos").innerHTML = response;
				document.getElementById("examnesalumnos").style.display = "block";
				document.getElementById("inicioalumno").style.display = "none";

				$("html, body").animate({
					scrollTop: 0
				}, "slow");

			},
			error: function(xhr, status, error) {

				document.getElementById("loadermainplatafroma").style.display = "none";
			}
		});
	}

	function videosclickmenu() {
		document.getElementById("loadermainplatafroma").style.display = "block";
		$.ajax({
			url: "incluciones/indexvideosalumnos.php",
			type: "POST",
			data: {
				idalumno: idalumno
			},
			success: function(response) {
				if (screen.width < 940) {
					document.getElementById("mainmenu").style.display = "none";
				}
				document.getElementById("loadermainplatafroma").style.display = "none";
				document.getElementById("examnesalumnos").innerHTML = response;
				document.getElementById("examnesalumnos").style.display = "block";
				document.getElementById("inicioalumno").style.display = "none";

				$("html, body").animate({
					scrollTop: 0
				}, "slow");

			},
			error: function(xhr, status, error) {

				document.getElementById("loadermainplatafroma").style.display = "none";
			}
		});
	}

	function menuformuariodecontacto() {
		document.getElementById("loadermainplatafroma").style.display = "block";
		$.ajax({
			url: "incluciones/indexdecontactoalumno.php",
			type: "POST",
			data: {
				idalumno: idalumno
			},
			success: function(response) {
				if (screen.width < 940) {
					document.getElementById("mainmenu").style.display = "none";
				}
				document.getElementById("loadermainplatafroma").style.display = "none";
				document.getElementById("examnesalumnos").innerHTML = response;
				document.getElementById("examnesalumnos").style.display = "block";
				document.getElementById("inicioalumno").style.display = "none";

				$("html, body").animate({
					scrollTop: 0
				}, "slow");

			},
			error: function(xhr, status, error) {

				document.getElementById("loadermainplatafroma").style.display = "none";
			}
		});
	}


	function emopezarquiz(id) {


		var descripcionparaimprimir = document.getElementById("descripcion" + id).innerHTML;

		document.getElementById("contenidoplightbox").innerHTML = '<img onclick="cerrarplataformasimulacro()" Class="imglogoscerrarplataforma" src="img/logos/cerrarsesionmorado.png"><p class="titulosofertaeducativa2">Antes de iniciar</p><br><br><p class="textoparaavisosfromacionplata" >' + descripcionparaimprimir + '<p/><br><br><center><div class="botonregos" onClick="iniciarquiz(' + id + ')">Iniciar</div></center>';

		document.getElementById("lightboxintrucciones").style.display = "block";

	}

	function iniciarquiz(idquiz) {

		document.getElementById("loadermainplatafroma").style.display = "block";
		$.ajax({
			url: "incluciones/empezarquiz.php",
			type: "POST",
			data: {
				idquiz: idquiz
			},
			success: function(response) {

				document.getElementById("lightboxintrucciones2").style.display = "block";

				document.getElementById("lightboxintrucciones").style.display = "none";
				document.getElementById("loadermainplatafroma").style.display = "none";

				document.getElementById("contenidoplightbox2").innerHTML = response;


			},
			error: function(xhr, status, error) {

				document.getElementById("loadermainplatafroma").style.display = "none";
			}
		});
	}

	function terminarquiz() {

		document.getElementById("loadermainplatafroma").style.display = "block";

		var pregunta = document.getElementById("numerodepregntas").value;
		var i;
		var correctas = 0;
		var incorrecta = 0;

		for (i = 1; i < pregunta; i++) {
			var respueta = document.getElementById('respuesta' + i + '').value;
			var repuestadelalumno = $('input[name=pregunta' + i + ']:checked').val();

			if (respueta == repuestadelalumno) {
				correctas++;
			} else {
				incorrecta++;
			}

		}
		var resultado = (correctas * 100) / pregunta;
		var numerodepreguitnasfinal = pregunta - 1;

		document.getElementById("loadermainplatafroma").style.display = "none";
		document.getElementById("lightboxintrucciones2").style.display = "none";


		document.getElementById("contenidoplightbox").innerHTML = '<p class="titulosofertaeducativa2"> Estos son tus productos </p> <p class="resultados" > De las ' + numerodepreguitnasfinal + ' Preguntas <br> Tus resultados fueron:</p><br><p class="resultadostestosquiz"> Preguntas Correctas <br><span class="respuestascorrectastitulosapn">' + correctas + '</span></p><br><p class="resultadostestosquiz"> Preguntas Incorrectas<br><span class="respuestasincorrectastitulosapn">' + incorrecta + '</span></p> <p class="resultadotextofinal">Tus resultados fueron <br><span class="resultadofinalquizz">' + resultado.toFixed(2) + '/100</span></p>   <br><br><br> <center><div class="botonregos" onClick="finalquizultima()">Listo</div></center>';

		document.getElementById("lightboxintrucciones").style.display = "block";

	}

	function finalquizultima() {
		location.reload();
		document.getElementById("lightboxintrucciones").style.display = "none";
	}

	function primerempezarexamen(id) {

		var descargarpdfpara = "https://ceuniversitario.com/HOJA CONTESTACIÓN 2020-A FINAL.pdf";

		document.getElementById("contenidoplightbox").innerHTML = '<img onclick="cerrarplataformasimulacro()" Class="imglogoscerrarplataforma" src="img/logos/cerrarsesionmorado.png"><p class="titulosofertaeducativa2">Antes de iniciar</p><br><br><p class="textoparaavisosfromacionplata" > Estos exámenes son en formato especial, idéntico al que te presentaras para ingresar a la UdeG. Para ellos te explicamos de manera rápida como seria la aplicación. si haces clic en el menú de abajo se te desplegara en una ventana el examen a modelo de documento online, solo para realizar su lectura en línea. Esto te permitirá consultar el examen, pero no descargar, y para poder contestarlo como en el examen oficial, te proporcionamos nuestro documento “Hoja de Contestación” que puedes descargar en la parte inferior y posteriormente imprimir. Este documento te servirá para poder escribir tus repuestas de manera a como seria el día de tu examen, te pedimos usar este documento he ir rellenando tus repuestas correctas. Aunado a esto una vez iniciado tu examen se te proporcionara el tiempo total de lo que dura el examen, dentro del mismo te podemos los tiempos correspondientes de cada sección. Para poder terminar el examen se podrá realizar con el botón de finalizar examen o si tu tiempo se termina. Terminando el examen se te habilitara para consultara las respuestas correctas, donde tendrás que verificar sus respuestas.  Y donde mismo se te pedirán los datos de las respuestas correctas por sección para poder darte tus resultados.<br>Es importante disponer de tiempo ya que, una vez iniciado el examen, no se podrá detener la aplicación.</p><br><br><center><a href="' + descargarpdfpara + '" download class="botonregos">Descargar Hoja de Contestación</a><br><br><br><br><div class="botonregos" onClick="inicioprimeraparte(' + id + ')">Iniciar</div></center>';

		document.getElementById("lightboxintrucciones").style.display = "block";
	}

	function cerrarplataformasimulacro() {
		location.reload();
		document.getElementById("lightboxintrucciones").style.display = "none";
		document.getElementById("lightboxintrucciones2").style.display = "none";
		//menualumnosexamenes();
	}

	function cerrarventanadevideo() {
		document.getElementById("insertarviodeospacio").innerHTML = '';
		document.getElementById("mainlightboxvideos").style.display = "none";
	}

	function vervideo(srcvideo) {

		document.getElementById("insertarviodeospacio").innerHTML = '<br><br><br><br><iframe src="https://player.vimeo.com/video/' + srcvideo + '" width="90%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>';
		document.getElementById("mainlightboxvideos").style.display = "block";
	}


	function terminarInt_cantidad_examenes_simulacro(id) {
		var hojadecontestacion = document.getElementById("idhojadecontestacion" + id).innerHTML;


		document.getElementById("loadermainplatafroma").style.display = "block";
		document.getElementById("lightboxintrucciones2").style.display = "block";
		document.getElementById("lightboxintrucciones").style.display = "none";

		document.getElementById("contenidoplightbox2").innerHTML = '<div class="recayudrodetimer"></div><div class="contenedosexamenplataformaonline"><iframe width="100%" src="https://drive.google.com/file/d/' + hojadecontestacion + '/preview" class="espaciodeexamen" frameborder="0"></iframe></div><br><br><div class="botonregos" onClick="iracalificarexamen(' + id + ')">Ir al calificador</div>';

		document.getElementById("loadermainplatafroma").style.display = "none";
	}

	function iracalificarexamen(id) {



		document.getElementById("lightboxintrucciones").style.display = "block";

		document.getElementById("contenidoplightbox").innerHTML = '<img onclick="cerrarplataformasimulacro()" Class="imglogoscerrarplataforma" src="img/logos/cerrarsesionmorado.png"><p class="titulosofertaeducativa2">Califica tu examen</p><center><div style="width: 100%"><p class="textoscaolicadorformacion">Numero del Examen</p><?echo $selectdeexaenesrestanttes;?><p class="textoscaolicadorformacion">Preguntas correctas de la primera seccion</p><input type="number" max="45" id="correctasprimerseccion" class="inputtextformacionin"/><p class="textoscaolicadorformacion" >Preguntas correctas de la segunda seccion</p><input  type="number" max="25" id="correctassegundaseccion" class="inputtextformacionin"/><p class="textoscaolicadorformacion" >Preguntas correctas de la tercera seccion</p><input  type="number" max="55" type="text" id="correctasterceraseccion" class="inputtextformacionin"/><br><br><center><div class="botonregos" onClick="calificarmiexamen(' + id + ')">Calificar mi Examen</div></center><br><br><br><br><br><br></div></center>';
	}

	function calificarmiexamen(iddeusuario) {

		var correctasprimeraseccion = document.getElementById("correctasprimerseccion").value;
		var correctassegundaseccion = document.getElementById("correctassegundaseccion").value;
		var correctasterceraseccion = document.getElementById("correctasterceraseccion").value;





		var queexaenes = document.getElementById("queexaenes").value;

		var secciondeespañol = parseInt(correctasprimeraseccion) + parseInt(correctassegundaseccion);

		var secciondematematicas = correctasterceraseccion;


		var calificacionespañol = (secciondeespañol * 100) / (25 + 45);
		var calificacionmate = (secciondematematicas * 100) / 55;

		var puntajeesp = ((secciondeespañol * 600) / (25 + 45)) + 200;

		var puntajeespparte1 = ((parseInt(correctasprimeraseccion) * 600) / (45)) + 200;
		var puntajeespparte2 = ((parseInt(correctassegundaseccion) * 600) / (25)) + 200;


		var puntajemate = ((secciondematematicas * 600) / (55)) + 200;

		var calificacionfinal = ((calificacionespañol + calificacionmate) * 100 / 200);


		var preg_esp = secciondeespañol;
		var preg_mat = secciondematematicas;

		var pun_esp = puntajeesp;
		var pun_mat = puntajemate;

		var cal_esp = calificacionespañol;
		var cal_mat = calificacionmate;

		var siingresdoonodivdecalificador;

		puntajeparaobtenidototal = calificacionfinal + mipromediodeprepa;

		if (puntajeparaobtenidototal >= puntajequenecesitoobtener) {
			var diferenciapuntaj = puntajeparaobtenidototal - puntajequenecesitoobtener;
			var siingresdoonodivdecalificador = '<p class="txt-results">Puntaje Final</p> <span  class="submaincalexampla">' + puntajeparaobtenidototal.toFixed(2) + '</span>  <p class="txt-results"> SITUACIÓN </p> <b class="esli2"> Admitido</b>  <br><br><div class="contenedor-esli"> <p class="txt-results">Diferencia</p> <span  class="submaincalexampla">+' + diferenciapuntaj.toFixed(2) + '</span> <p class="esli3">puntos</p></div>';
		} else {
			var diferenciapuntaj = puntajequenecesitoobtener - puntajeparaobtenidototal;
			var siingresdoonodivdecalificador = '<p class="txt-results">Puntaje Final</p>   <span  class="submaincalexampla">' + puntajeparaobtenidototal.toFixed(2) + '</span>  <p class="txt-results"> SITUACIÓN </p> <b class="esli2"> No Admitido</b> <br><br><div class="contenedor-esli"> <p class="txt-results">Diferencia</p>  <span  class="submaincalexampla">-' + diferenciapuntaj.toFixed(2) + '</span> <p class="esli3">puntos</p></div>';
		}


		if (queexaenes != "" && correctasprimeraseccion != "" && correctassegundaseccion != "" && correctasterceraseccion != "") {
			document.getElementById("loadermainplatafroma").style.display = "block";
			$.ajax({
				url: "incluciones/calificador.php",
				type: "POST",
				data: {
					iddeusuario: iddeusuario,
					queexaenes: queexaenes,
					preg_esp: preg_esp,
					puntajeespparte1: puntajeespparte1,
					puntajeespparte2: puntajeespparte2,
					preg_mat: preg_mat,
					pun_esp: pun_esp,
					pun_mat: pun_mat,
					cal_esp: cal_esp,
					cal_mat: cal_mat,
					calificacionfinal: calificacionfinal
				},
				success: function(response) {
					document.getElementById("lightboxintrucciones").style.display = "block";

					document.getElementById("contenidoplightbox").innerHTML = '<p class="titulosofertaeducativa2">Tus resultados</p> <center><div class="recuadrocalificacionmain"><p class="txt-results">Lectura</p><span  class="submaincalexampla">' + puntajeespparte1.toFixed(2) + '/ 800</div><div class="recuadrocalificacionmain"><p class="txt-results">Redacción</p><span  class="submaincalexampla">' + puntajeespparte2.toFixed(2) + '/ 800 </span> </div><div class="recuadrocalificacionmain"><p class="txt-results">Matemáticas</p><span  class="submaincalexampla">' + puntajemate.toFixed(2) + '/ 800 </span> </div><div class="recuadrocalificacionmain"><p class="txt-results">Puntaje de examen</p><span  class="submaincalexampla">' + calificacionfinal.toFixed(2) + '/100</span>' + siingresdoonodivdecalificador + '</div><div class="botonregos" onClick="cerrarplataformasimulacro()">Listo</div></center>';
					document.getElementById("loadermainplatafroma").style.display = "none";


				},
				error: function(xhr, status, error) {
					alert(error);
					document.getElementById("loadermainplatafroma").style.display = "none";
				}
			});

		} else {
			alert("Faltan Datos");
		}





	}


	function avisohojadecontestracion(id) {

		document.getElementById("loadermainplatafroma").style.display = "block";

		document.getElementById("lightboxintrucciones").style.display = "block";

		document.getElementById("contenidoplightbox").innerHTML = '<p class="titulosofertaeducativa2">Se acabo el tiempo</p><br><br><p class="textoparaavisosfromacionplata">A continuación, vamos a presentarte la hoja de respuesta correctas, te pedimos que por favor verifiques tus repuestas junto con las del documento y cuentes por sección las preguntas que tienes correctas. </p><br><br><br><div class="botonregos" onClick="terminarInt_cantidad_examenes_simulacro(' + id + ')">Iniciar</div></center>';

		document.getElementById("loadermainplatafroma").style.display = "none";
	}


	function inicioprimeraparte(idquiz) {

		var direcciondeexamen = document.getElementById("parte1" + idquiz).innerHTML;
		var varnombredeInt_cantidad_examenes_simulacro = document.getElementById("nombresimulacro" + idquiz).innerHTML;

		document.getElementById("loadermainplatafroma").style.display = "block";
		document.getElementById("lightboxintrucciones2").style.display = "block";
		document.getElementById("lightboxintrucciones").style.display = "none";

		document.getElementById("contenidoplightbox2").innerHTML = '<div class="recuadrodetimer">Te quedan <span id="time"></span> minutos</div><br><br><br><br><div class="recayudrodetimer"></div><div class="contenedosexamenplataformaonline"><iframe width="100%" src="https://drive.google.com/file/d/' + direcciondeexamen + '/preview" class="espaciodeexamen" frameborder="0"></iframe></div><br><br><div class="botonregos" onClick="segundaparte(' + idquiz + ')">Terminar Primera Parte </div>';


		var time = 60 * 45,
			r = document.getElementById('time'),
			tmp = time;
		var w = setInterval(function() {

			var c = tmp--,
				m = (c / 60) >> 0,
				s = (c - m * 60) + '';
			r.textContent = '' + m + ':' + (s.length > 1 ? '' : '0') + s;
			if (tmp == 0) {
				clearInterval(w);
				segundaparte(idquiz);
			}
		}, 1000);


		document.getElementById("loadermainplatafroma").style.display = "none";

	}

	function segundaparte(idquiz) {

		var direcciondeexamen = document.getElementById("parte2" + idquiz).innerHTML;
		var varnombredeInt_cantidad_examenes_simulacro = document.getElementById("nombresimulacro" + idquiz).innerHTML;

		document.getElementById("loadermainplatafroma").style.display = "block";
		document.getElementById("lightboxintrucciones2").style.display = "block";
		document.getElementById("lightboxintrucciones").style.display = "none";

		document.getElementById("contenidoplightbox2").innerHTML = '<div class="recuadrodetimer">Te quedan <span id="time"></span> minutos</div><br><br><br><br><div class="recayudrodetimer"></div><div class="contenedosexamenplataformaonline"><iframe width="100%" src="https://drive.google.com/file/d/' + direcciondeexamen + '/preview" class="espaciodeexamen" frameborder="0"></iframe></div><br><br><div class="botonregos" onClick="terceraparte(' + idquiz + ')">Terminar Segunda Parte</div>';


		var time = 60 * 25,
			r = document.getElementById('time'),
			tmp = time;
		var w = setInterval(function() {

			var c = tmp--,
				m = (c / 60) >> 0,
				s = (c - m * 60) + '';
			r.textContent = '' + m + ':' + (s.length > 1 ? '' : '0') + s;
			if (tmp == 0) {
				clearInterval(w);
				terceraparte(idquiz);
			}
		}, 1000);


		document.getElementById("loadermainplatafroma").style.display = "none";

	}

	function terceraparte(idquiz) {

		var direcciondeexamen = document.getElementById("parte3" + idquiz).innerHTML;
		var varnombredeInt_cantidad_examenes_simulacro = document.getElementById("nombresimulacro" + idquiz).innerHTML;

		document.getElementById("loadermainplatafroma").style.display = "block";
		document.getElementById("lightboxintrucciones2").style.display = "block";
		document.getElementById("lightboxintrucciones").style.display = "none";

		document.getElementById("contenidoplightbox2").innerHTML = '<div class="recuadrodetimer">Te quedan <span id="time"></span> minutos</div><br><br><br><br><div class="recayudrodetimer"></div><div class="contenedosexamenplataformaonline"><iframe width="100%" src="https://drive.google.com/file/d/' + direcciondeexamen + '/preview" class="espaciodeexamen" frameborder="0"></iframe></div><br><br><div class="botonregos" onClick="avisohojadecontestracion(' + idquiz + ')">Terminar Examen</div>';


		var time = 60 * 55,
			r = document.getElementById('time'),
			tmp = time;
		var w = setInterval(function() {

			var c = tmp--,
				m = (c / 60) >> 0,
				s = (c - m * 60) + '';
			r.textContent = '' + m + ':' + (s.length > 1 ? '' : '0') + s;
			if (tmp == 0) {
				clearInterval(w);
				avisohojadecontestracion(idquiz);
			}
		}, 1000);


		document.getElementById("loadermainplatafroma").style.display = "none";

	}

	function iniciarrealsimulacropdf(idquiz) {

		var direcciondeexamen = document.getElementById("iddeexamen" + idquiz).innerHTML;
		var varnombredeInt_cantidad_examenes_simulacro = document.getElementById("nombresimulacro" + idquiz).innerHTML;





		document.getElementById("loadermainplatafroma").style.display = "block";
		document.getElementById("lightboxintrucciones2").style.display = "block";
		document.getElementById("lightboxintrucciones").style.display = "none";

		document.getElementById("contenidoplightbox2").innerHTML = '<div class="recuadrodetimer">Te quedan <span id="time"></span> minutos</div><br><br><br><br><div class="recayudrodetimer"></div><div class="contenedosexamenplataformaonline"><iframe width="100%" src="https://drive.google.com/file/d/' + direcciondeexamen + '/preview" class="espaciodeexamen" frameborder="0"></iframe></div><br><br><div class="botonregos" onClick="avisohojadecontestracion(' + idquiz + ')">Terminar Examen</div>';


		var time = 60 * 120,
			r = document.getElementById('time'),
			tmp = time;
		var w = setInterval(function() {

			var c = tmp--,
				m = (c / 60) >> 0,
				s = (c - m * 60) + '';
			r.textContent = '' + m + ':' + (s.length > 1 ? '' : '0') + s;
			if (tmp == 0) {
				clearInterval(w);
				avisohojadecontestracion(idquiz);
			}
		}, 1000);


		document.getElementById("loadermainplatafroma").style.display = "none";

	}


	function solucionardisplay(idquiz) {

		var direcciondeexamen = document.getElementById("solucionario" + idquiz).innerHTML;



		document.getElementById("loadermainplatafroma").style.display = "block";
		document.getElementById("lightboxintrucciones2").style.display = "block";
		document.getElementById("lightboxintrucciones").style.display = "none";

		document.getElementById("contenidoplightbox2").innerHTML = '<img onclick="cerrarplataformasimulacro()" Class="imglogoscerrarplataforma" src="img/logos/cerrarsesionmorado.png"><div class="contenedosexamenplataformaonline"><iframe width="100%" src="https://drive.google.com/file/d/' + direcciondeexamen + '/preview" class="espaciodeexamen" frameborder="0"></iframe></div>';



		document.getElementById("loadermainplatafroma").style.display = "none";

	}

	function siacetadoprom() {
		var nombre = document.getElementById("nombrepromo").value;
		var mensaje = document.getElementById("mensaje").value;
		if (nombre != "" && mensaje != "") {
			$.ajax({
				url: "incluciones/contactoplatqforma.php",
				type: "POST",
				data: {
					nombre: nombre,
					correoelectronico: correoelectronico,
					mensaje: mensaje
				},
				success: function(response) {
					$('#myModal5').fadeIn('slow');
					$('#myModal5').delay(4000);
					$('#myModal5').fadeOut('slow');
				}
			});
		} else {
			$('#error2').fadeIn('slow');
			$('#error2').delay(3000);
			$('#error2').fadeOut('slow');
		}
	}




</script>

<div class="botonparacerrarsecion" onClick="location.href='incluciones/cerrarsession.php'">CERRAR SESIÓN</div>

<?php include("incluciones/footerplatafroma.php"); ?>