<img src="img/slider/alumnosbinevenidapc.png" class="desksliderindex">
<img src="img/slider/alumnosbinevenidamov.png" class="movilessliderindex">

<div class="mainparaplataforma">
	<p class="titutlsopraplaafromamain">Antes de inciar</p>
	<center>
		
		<form id="crearproductoadd" enctype="multipart/form-data" action="" method="post">
		
		<p class="textosplataformadatosdsub">
			Antes de iniciar necesitamos que nos brindes unos datos para completar la plataforma y brindarte la mejor información.
		</p>
	
	
	<br><br>
			
		<p class="titulosofertaeducativa2">Subir Foto de Perfil</p>
	<center>
	<input type='file' name="fotodeperfil" id="fotodeperfil" class="custom-file-input">
		
		<?php 
			echo'<input id="idedesuario" name="idedesuario" value="'.$_SESSION["id"].'" type="hidden">'; 
		?>
		
		
		<p class="titulosofertaeducativa2" >Nueva Contraseña</p>
		<input type="text" placeholder="Nueva Contraseña" name="nuevacontrasena" id="nuevacontrasena" class="inputcrearnuevo"/>
		
		<p class="titulosofertaeducativa2" >Nombre Completo</p>
		<input type="text" placeholder="Nombre Completo" name="nombrecompleto" id="nombrecompleto" class="inputcrearnuevo"/>
		
		<p class="titulosofertaeducativa2" >Teléfono de contacto</p>
		<input type="text" placeholder="Teléfono de contacto" name="telefonocontacto" id="telefonocontacto" class="inputcrearnuevo"/>
		
		<p class="titulosofertaeducativa2" >Promedio de preparatoria</p>
		<input type="text" placeholder="Promedio de preparatoria" name="promediodeprepa" id="promediodeprepa" class="inputcrearnuevo"/>
		
		
		
		<p class="titulosofertaeducativa2" >Seleccionar Curso </p>
		
		<select class="inputcrearnuevo" id="selecthorarios" name="selecthorarios">
  			<option value="0" selected>Sin horario</option> 
			<?php 
			
				$link = mysql_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne')or die(' coneccion fallida: ' . mysql_error());
				mysql_select_db('u106265038_ceuni') or die('No se pudo seleccionar la base de datos');
				mysql_query ("SET NAMES 'utf8'");
				$query = "select * from Cursos";
				$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			
				while($row = mysql_fetch_array($result)) {
					
					echo '<option value="'.$row["id"].'" >'.$row["nombre"].'</option> ';
				}
			
			?>
		</select>
		
	<p class="titutlsopraplaafromamain">Elige Carrera y Centro</p>
	<div style="width:100%; text-align:right; padding-top:2%;">
<input id="buscador" class="buscarinput" onKeyUp="buscarfun()" type="text" placeholder="Buscar Carrera">
</div>
<center>
	<div id="preguntasdiv" class="divdepuntajesplatafrioma">
		<?php
$link = mysql_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne')or die(' coneccion fallida: ' . mysql_error());
mysql_select_db('u106265038_ceuni') or die('No se pudo seleccionar la base de datos');
mysql_query ("SET NAMES 'utf8'");
$query = "SELECT * FROM puntajes ";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
echo"
<div>
<div>
<table class='tdtabletit'>
<tr>
<td style='width:25%;padding: 2%;text-align: center;'>
Centro
</td>
<td style='width:75%;padding: 2%;text-align: center;'>
Carrera
</td>
</tr>
</table>
";
while($row = mysql_fetch_array($result)) {
	$id=$row["id"];
echo "
<table  class='tablepuntinfo' id='selectdeinfodiv".$id."'>
	<tr>
		<td class='centrotddiv'>
			<b>".$row["centro"]."</b>
		</td>
		<td class='tdcarrerastd'>
			<b>".$row["carrera"]."</b>
		</td>
		<td class='botonrojseleccionfro' style='width:15%; text-align: center;' onClick='seleccionarclase(".$id.")'>
			Seleccionar
		</td>
	</tr>
</table>
";
} 

echo"</div> </div>";
mysql_free_result($result); 
mysql_close($link); 

?>
	</div>
</center>
		<input id="carreraseleccionada" name="carreraseleccionada" type="hidden">
		
		<div id="faltandatoscrearproductos" style=" padding: 10px; width: 80%; background: #BD0003; color: #fff; font-family: impact; display: none; margin-top: 10px; font-size: 12pt;">Porfavor llenar todos los campos</div>
		
		<button class="botonregos" id="botonparacrearproductos" name="botonparacrearproductos" type="submit">Terminar mi perfil</button>	
		
	</form>
			
<script>
	
	
$(document).ready(function (e) {
	 		var buttonpressedcrearpropiedad ="";
    		$('#botonparacrearproductos').click(function() {
          		buttonpressedcrearpropiedad = $(this).attr('name')
    		});
			$("#crearproductoadd").on('submit',(function(e) {
				e.preventDefault();
				if(buttonpressedcrearpropiedad=="botonparacrearproductos"){
					
					
					document.getElementById("loadermainplatafroma").style.display="block";
					var nombre = document.getElementById("nombrecompleto").value ;
					
					var telefono = document.getElementById("telefonocontacto").value ;
					
					var promedio = document.getElementById("promediodeprepa").value ;
					var horarioid = document.getElementById("selecthorarios").value ;
					
					
					
					
					if(nombre!="" && telefono!="" && promedio!='' && horarioid!=0  && seleccionardeformacion!=0){
						
						document.getElementById("carreraseleccionada").value =seleccionardeformacion ;
						
						     
						
						var formData = new FormData($('#crearproductoadd')[0]); 
						$.ajax({
							url: "incluciones/actualziarperfilformacion.php",
							type: "POST",
							data:  formData,
							contentType: false,
							cache: false,
							processData:false,
							success: function(response){
								document.getElementById("loadermainplatafroma").style.display="none";
								alert("Cerraremos sección te pediremos volver a ingresar con tu nueva contraseña ");
								location.href='incluciones/cerrarsession.php'
		    				},
		  					error: function(){
								
							} 	        
						});
					}else{
						
						document.getElementById("loadermainplatafroma").style.display="none";
						$('#faltandatoscrearproductos').fadeIn('slow');
						$('#faltandatoscrearproductos').delay(4000);
						$('#faltandatoscrearproductos').fadeOut('slow');	
			   }
			
		   }else{
			   
		   }}));
	
});
	
var seleccionardeformacion = 0;	
	
document.getElementById("loadermainplatafroma").style.display="none";
	
function seleccionarclase(idsecciondeclase){
	
	if(seleccionardeformacion==0){
	   		document.getElementById("selectdeinfodiv"+idsecciondeclase).style.background="#B72025";
			document.getElementById("selectdeinfodiv"+idsecciondeclase).style.color="#fff";
		   
		seleccionardeformacion = idsecciondeclase;
		
	   }else{
	   		document.getElementById("selectdeinfodiv"+seleccionardeformacion).style.background="#fff";
			document.getElementById("selectdeinfodiv"+seleccionardeformacion).style.color="#000";
		   
		   	document.getElementById("selectdeinfodiv"+idsecciondeclase).style.background="#B72025";
			document.getElementById("selectdeinfodiv"+idsecciondeclase).style.color="#fff";
		   
		   seleccionardeformacion = idsecciondeclase;
		   
	   }
	
	
}
	
function buscarfun(){
 $.ajax({
        url: "incluciones/buscadocarreraplataforma.php",
        type: "POST",
        data: {texto: $("#buscador").val()},
        success: function(response){
			seleccionardeformacion = 0;
            document.getElementById('preguntasdiv').innerHTML= response;
        }
    });
}
function valida(e){
	
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
	if (tecla==46){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
	
function terminardellerrenarinformacion(){
}
	
</script>
		
		
	</center>
</div>
