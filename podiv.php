<div id="myModal5" class="modal2" style="z-index:999990085;">
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
<div id="myModalcepro" class="modal" style=" display:block; z-index:999990085;">
  <div class="modal-content" id="promdiv">
  <span class="close" onClick="cerrarceprom()">&times;</span>
    <center>
  <table width="100%">
<tr>
<td id="promoreg" width="100%">
<center>
<form id="form" action="env" method="post" >

<div style="width:100%; ">
<center>
<table id="inicioformulario" width="100%" style=" padding:0%; padding-top:0%; padding-bottom:5%;">
<tr>
<td>

<p class="popreg">
    ¡Regístrate para obtener un descuento especial en tu curso!
</p>
<center>

<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script>
  hbspt.forms.create({
	region: "na1",
	portalId: "6487587",
	formId: "7622a23d-c885-4b45-b727-1d2771d2c491"
});
$(document).ready(function() {
        setTimeout(() => {
            $('#hs-form-iframe-0').contents().find('.hubspot-link__container.sproket').empty();
        }, 2000);

        $('.divespacioparamenublanco').css('height', $('#navbar').outerHeight());
        $('.ancla').css('margin-top', $('#navbar').outerHeight() / -1);
    });
</script>
<!--
<div class="margindivprov">
	<input type="text" id="nombrepromo" name="nombrepromo" placeholder="Nombre Completo*" class="inputprovini"/>
	<br><br>
	<input type="text" onKeyPress="return soloNumeros(event)" id="telpromo"  name="telpromo" placeholder="Teléfono*" class="inputprovini"/>
	<br><br>
	<input type="text"  id="emailpromo" name="emailpromo" width="100%" placeholder="Correo Electrónico*" class="inputprovini"/>
	<br><br>
	<select class="selectsedes" id="sedeopcion">
		<option selected value="Sede no seleccionada">Seleccionar Sede</option>
		<option value="Sede Avila">Sede Avila</option>
		<option value="Sede Olimpica">Sede Olimpica</option>
	</select>
	
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
<button type="button" class="botonregos" onClick="enviarpromocion()" style="font-size:2.5vh; padding-bottom:3%; padding-top:3%; padding-left:2%; text-align:100%; width:60%; padding-right:2%;">
 Registrarse 
</button>
</td>
</tr>
</table>
-->

<script>
function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}
function validar_email( email ) {
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
function enviarpromocion(){
	var sede = document.getElementById("sedeopcion").value;
	var nombre = document.getElementById("nombrepromo").value ;
	var telefono = document.getElementById("telpromo").value ;
	var email = document.getElementById("emailpromo").value ;
	if(nombre!="" && telefono!="" && email!=""){ 
		if(validar_email( email )){	
			$.ajax({ 
	 			url: "incluciones/enviarpromocion.php",
    			type: "POST",
        		data: {nombre:nombre,tel:telefono,email:email,sede:sede},
        		success: function(response){
					//alert(response);
					document.getElementById('myModalcepro').style.display="none";
			    	$('#myModal5').fadeIn('slow');
	 				$('#myModal5').delay(4000);
	 				$('#myModal5').fadeOut('slow');
					gtag('event', 'envio', {'event_category': 'formulario'});
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
</center>
</td>
</tr>
</table>
</center>
</div>

</form>
</center>
</td>
</tr>
</table>
  </center>
</div>
</div>
<script>
function  cerrarceprom(){
	document.getElementById('myModalcepro').style.display="none";
	}		
</script>    
