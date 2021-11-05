<?php 
	$idiniciosess = $_SESSION["id"];
	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$query=mysqli_query($link,"select * from usuario where id='".$idiniciosess."'");
	$num_rows=mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
	$nombre;
	if ($num_rows>0){
		$nombre = $row['nombre'];
		$imgdefondo = "'data:image/jpeg;base64,".base64_encode( $row['Fotodeperfil'] )."'";
		$fotdeperfil = '<div class="fotodeperfilcirculo" style="background-image: url('.$imgdefondo.');">
				</div>';
		echo"<script>var idalumno = '".$idiniciosess ."'</script>";
	}	
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
  			</li>-->
				<li  id="md2" onClick="varcalificacionesadmmon()">
    			<a id="md4a">CALIFICACIONES</a>
    		</li>
   			<!--<li  id="md4" onClick="indexprospectos()">
    			<a id="md4a">PROSPECTOS</a>
    		</li>-->
   			<li  id="md5" onClick="meunindexadmon();">
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
<div class="paramoviles">
</div>

<script>
var menu = document.getElementById("menudesk");
$(document).scroll(function() {
var w5 = window.innerWidth;
	if($(document).scrollTop() == 0){
		document.getElementById("menudesk").classList.remove("menuscroll");
		document.getElementById("menudesk").classList.add("menu");
		document.getElementById("logomenu").classList.remove("imglogoscroll");
		document.getElementById("logomenu").classList.add("imglogo");
		document.getElementById("logomenu").src="img/logos/logoblancolataforma.png";
		
		document.getElementById("mainmenu").style.paddingTop = "35px";
		
	}
	else{
		document.getElementById("menudesk").classList.remove("menu");
		document.getElementById("menudesk").classList.add("menuscroll");
		document.getElementById("logomenu").classList.remove("imglogo");
		document.getElementById("logomenu").classList.add("imglogoscroll");
		document.getElementById("logomenu").src="img/logos/logomov.png";
		
		document.getElementById("mainmenu").style.paddingTop = "5px";
	}
	});
$('.slimmenu').slimmenu(
{
    resizeWidth: '940',
    collapserTitle: '',
    animSpeed:'medium',
    indentChildren: true,
    childrenIndenter: '&raquo;'
});
</script>



<div id="inicioalumno" style="display: block;">
</div>

<div id="examnesalumnos" style="display: none;">
</div>


<div id="oppvercalificacionesalumno" style="display:none;">
	<div>
		<img onclick="cerartabladecalifalumn()" Class="imglogoscerrarplataforma" src="img/logos/cerrarsesionmorado.png">
		<div id="innerdetabladeresultados">

		</div>
	</div>
</div>

<script>
function cerartabladecalifalumn(){
		document.getElementById("oppvercalificacionesalumno").style.display="none";
		//menualumnosexamenes();
	}

	function meunindexadmon(){
		
		document.getElementById("loadermainplatafroma").style.display="block";
				$.ajax({ 
	 			url: "incluciones/indexadmon.php",
    			type: "POST",
        		data: {idalumno:idalumno},
        		success: function(response){
					
					document.getElementById("loadermainplatafroma").style.display="none";
					document.getElementById("inicioalumno").innerHTML= response;
					document.getElementById("inicioalumno").style.display="block";
					document.getElementById("examnesalumnos").style.display="none";
					
					$("html, body").animate({ scrollTop: 0 }, "slow");
					
				},error: function(xhr, status, error) {
  							
							document.getElementById("loadermainplatafroma").style.display="none";
						}
			});
	}
	meunindexadmon();
	
	function menuformuariodecontacto(){
		document.getElementById("loadermainplatafroma").style.display="block";
				$.ajax({ 
	 			url: "incluciones/indexdecontactoalumno.php",
    			type: "POST",
        		data: {idalumno:idalumno},
        		success: function(response){
					
					document.getElementById("loadermainplatafroma").style.display="none";
					document.getElementById("examnesalumnos").innerHTML= response;
					document.getElementById("examnesalumnos").style.display="block";
					document.getElementById("inicioalumno").style.display="none";
					
					$("html, body").animate({ scrollTop: 0 }, "slow");
					
				},error: function(xhr, status, error) {
  							
							document.getElementById("loadermainplatafroma").style.display="none";
						}
			});
	}
	
	function indexprospectos(){
		document.getElementById("loadermainplatafroma").style.display="block";
				$.ajax({ 
	 			url: "incluciones/admoncontactos.php",
    			type: "POST",
        		data: {idalumno:idalumno},
        		success: function(response){
					
					document.getElementById("loadermainplatafroma").style.display="none";
					document.getElementById("examnesalumnos").innerHTML= response;
					varcontactonuevos();
					document.getElementById("examnesalumnos").style.display="block";
					document.getElementById("inicioalumno").style.display="none";
					
					$("html, body").animate({ scrollTop: 0 }, "slow");
					
				},error: function(xhr, status, error) {
  							
							document.getElementById("loadermainplatafroma").style.display="none";
						}
			});
	}
	
	function varcalificacionesadmmon(){
		document.getElementById("loadermainplatafroma").style.display="block";
				$.ajax({ 
	 			url: "incluciones/indexvercalificaciones.php",
    			type: "POST",
        		data: {},
        		success: function(response){
					document.getElementById("loadermainplatafroma").style.display="none";
					document.getElementById("examnesalumnos").innerHTML= response;
					document.getElementById("examnesalumnos").style.display="block";
					document.getElementById("inicioalumno").style.display="none";

					var table = $('#tablacalificacionesalumn').DataTable();
    $('#opcionesdecursos').change(function () {
        table.column(3).search(this.value).draw();
        console.log(this.value)
    });			
					$("html, body").animate({ scrollTop: 0 }, "slow");
					
				},error: function(xhr, status, error) {
					alert( status);	
							document.getElementById("loadermainplatafroma").style.display="none";
						}
			});
	}

	function varcontactonuevos(){
	

			
		$.ajax({ 
	 		url: "incluciones/vercontactonuevos.php",
    		type: "POST",
        	data: {idalumno:idalumno},
        	success: function(response){
				

				document.getElementById("vercontactonuevos").innerHTML = response;
				
			},error: function() {
		   		
				
        		alert('Error de carga');
				
      		}
		});	
			
	}
	
	function contactoscontactados(){
	
		//document.getElementById("cargandocreondoetc").style.display="block";
		$.ajax(
  			'incluciones/contactoscontactados.php',
			{
				success: function(data) {
					//document.getElementById("cargandocreondoetc").style.display="none";
					document.getElementById("vercontactonuevos").innerHTML = data;
      			},
				error: function() {
		   			//document.getElementById("cargandocreondoetc").style.display="none";
        			alert('Error de carga');
      			}
   			}
		);
	}
	
	
	
	
	function vardescartadoscontactos(){
	
		//document.getElementById("cargandocreondoetc").style.display="block";
		$.ajax(
  			'incluciones/vercontactosdestacados.php',
			{
				success: function(data) {
					//document.getElementById("cargandocreondoetc").style.display="none";
					document.getElementById("vercontactonuevos").innerHTML = data;
      			},
				error: function() {
		   			//document.getElementById("cargandocreondoetc").style.display="none";
        			alert('Error de carga');
      			}
   			}
		);
		
		
		$.ajax({ 
	 		url: "incluciones/cambiaracontacto.php",
    		type: "POST",
        	data: {id:id,esceuladeinteres:esceuladeinteres,curso:curso,idalumno:idalumno},
        	success: function(response){
				
				
				
				document.getElementById("cursointeres"+id).value = "";
				document.getElementById("escuela"+id).value="";
				
				document.getElementById("admonindexformacion").style.display="none";
				alert("Muchas Gracias :3");
				
				varcontactonuevos();
				
			},error: function() {
		   		
				
        		alert('Error de carga');
				
      		}
		});	
		
	}
	
	function contactado(id){
		//document.getElementById("cargandocreondoetc").style.display="block";
		document.getElementById("admonindexformacion").innerHTML='<div class="divparaponerinfocontacto"><p class="titulosofertaeducativa2" >Escuela de proveniencia </p><input type="text" placeholder="" id="escuela'+id+'" class="inputprovini"/><br><p class="titulosofertaeducativa2" >Curso de interés</p><input type="text" placeholder="" id="cursointeres'+id+'" class="inputprovini"/><br><br><center><div class="botonregos" onClick="conatctarformacionadmoninfoparametro('+id+')">Enviar</div></center></div>';
		
		document.getElementById("admonindexformacion").style.display="block";
	
	}
	
	function conatctarformacionadmoninfoparametro(id){
		
		
		
		var esceuladeinteres = document.getElementById("escuela"+id).value;
		var curso = document.getElementById("cursointeres"+id).value;

		
			$.ajax({ 
	 		url: "incluciones/cambiaracontacto.php",
    		type: "POST",
        	data: {id:id,esceuladeinteres:esceuladeinteres,curso:curso,idalumno:idalumno},
        	success: function(response){
				
				
				
				document.getElementById("cursointeres"+id).value = "";
				document.getElementById("escuela"+id).value="";
				
				document.getElementById("admonindexformacion").style.display="none";
				alert("Muchas Gracias :3");
				
				varcontactonuevos();
				
			},error: function() {
		   		
				
        		alert('Error de carga');
				
      		}
		});	
	}
	
	function descartar(id){
		//document.getElementById("cargandocreondoetc").style.display="block";
		
		$.ajax({ 
	 		url: "incluciones/descartarinteresado.php",
    		type: "POST",
        	data: {id:id},
        	success: function(response){
				
				varcontactonuevos();
				//document.getElementById("cargandocreondoetc").style.display="none";
				
			},error: function() {
		   		
				//document.getElementById("cargandocreondoetc").style.display="none";
        		alert('Error de carga');
				
      		}
		});	
	}
	
	function evniarparacrearusuario(){
		//document.getElementById("cargandocreondoetc").style.display="block";
		var correonuevousuario = document.getElementById("correonuevousuario").value ;	
		var cursonuevousuario = document.getElementById("cursoneuvousuario").value ;	
		
		if(correonuevousuario!=""){
		$.ajax({ 
	 		url: "incluciones/crearusuarioalumnoparaplataforma.php",
    		type: "POST",
        	data: {correonuevousuario:correonuevousuario,cursonuevousuario:cursonuevousuario},
        	success: function(response){
				
				alert(response+"Usuario creado");
				
			},error: function() {
		   		
				//document.getElementById("cargandocreondoetc").style.display="none";
        		alert('Error de carga');
				
      		}
		});	
		}else{
						$('#faltandatoscrearproductos').fadeIn('slow');
						$('#faltandatoscrearproductos').delay(4000);
						$('#faltandatoscrearproductos').fadeOut('slow');	
			   }	
			
	}
	

	
	

	function vercalalummno(idusuario){
		document.getElementById("loadermainplatafroma").style.display="block";
				$.ajax({ 
	 			url: "incluciones/varcalificaciondealumnocoor.php",
    			type: "POST",
        		data: {idusuario:idusuario},
        		success: function(response){
					
					document.getElementById("oppvercalificacionesalumno").style.display="block";
					document.getElementById("innerdetabladeresultados").innerHTML= response;

					//$('#listaddecalificacionesdealumnos').DataTable();

					document.getElementById("loadermainplatafroma").style.display="none";
					
					$("html, body").animate({ scrollTop: 0 }, "slow");
					
				},error: function(xhr, status, error) {
					alert( status);	
							document.getElementById("loadermainplatafroma").style.display="none";
						}
			});
	}


</script>

<div class="botonparacerrarsecion" onClick="location.href='incluciones/cerrarsession.php'">CERRAR SESIÓN</div>

<?php include("incluciones/footerplatafroma.php"); ?>

