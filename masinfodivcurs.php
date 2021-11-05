<script>
	var curso;
	var modal;
	function iniciarcurs(modalidad,cursos){
		//curso = cursos;
		//modal = modalidad;
		//document.getElementById("masinfordivdis").style.display="block";
		hrefwhatsapp1();
	}
	function cerrarprominsis(){
		document.getElementById("masinfordivdis").style.display="none";
	}
	function validar_email( email ) {
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
	function enviarcorreocurs(){
		var nombrecorusinfo = document.getElementById("nombrecurinfo").value;
		var teelecursinfo = document.getElementById("telecurinfo").value;
		var correoinfocurs = document.getElementById("correoinfocurs").value;
		var email_prueba = document.getElementById("correoinfocurs").value;
		if(nombrecorusinfo!="" && teelecursinfo!="" && correoinfocurs!=""){
			$.ajax({ 
	  		url: "contactoenviacursos.php",
        	type: "POST",
        	data: {nombre:$("#nombrecorusinfo").val() ,telefono: $("#teelecursinfo").val(),correo: $("#correoinfocurs").val(),modalidad: $("#modal").val(),curso: $("#curso").val()},
        	success: function(response){
			    $('#correctenvia').fadeIn('slow');
	 			$('#correctenvia').delay(4000);
	 			$('#correctenvia').fadeOut('slow');
				document.getElementById("masinfordivdis").style.display="none";
        			}
    			});
		}
		else{
			$('#error1').fadeIn('slow');
	 $('#error1').delay(3000);
	 $('#error1').fadeOut('slow');
		}
		
		
	}
</script>
<div id="correctenvia" class="modal" style="z-index:101; display: none;">
	<div class="modal-content"  style="background: #EEEEEE;">
		<center>
    <p class="coreeee">
Gracias por contactarnos, te enviaremos vía WhatsApp un mensaje para proporcionarte el código de descuento y resolver total las dudas que tengas. 
</p>
    </center>
	</div>
</div>
<div id="masinfordivdis" class="modal" style="z-index:99; display: none;">
	<div class="modal-content" style="background: #EEEEEE;">
  		<span class="close" onClick="cerrarprominsis()">&times;</span>
  		<center>
		  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script>
  hbspt.forms.create({
	region: "na1",
	portalId: "6487587",
	formId: "7622a23d-c885-4b45-b727-1d2771d2c491"
});
</script>

<!--
  			<div>
  			<input type="text" id="nombrecurinfo" name="nombrecurinfo" class="inpucondiv" placeholder="Nombre Completo*"/>
  			<input type="text" id="telecurinfo" name="telecurinfo" class="inpucondiv" placeholder="Teléfono*"/>
  			<input type="text" id="correoinfocurs" name="correoinfocurs" class="inpucondiv" placeholder="Correo Electrónico*"/>
  			<button type="button" class="botonregos" onClick="enviarcorreocurs()">
  			CONTINUAR
  			</button><br>
  			<b id="error1" class="error">
llene todos los datos 
</b><br>
<b id="error2" class="error">
Correo electrónico invalido
</b><br>
  			</div>
			  -->
   		</center>
	</div>
</div>