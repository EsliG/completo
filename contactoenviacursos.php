<script>
function validar_email( email ) {
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
function enviarcontacto(){
	var nombre= document.getElementById("nombre").value;
	var correo= document.getElementById("correo").value;
	var telefono= document.getElementById("telefono").value;
	
	if(nombre!="" && correo !="" && telefono!=""){
		if(validar_email( correo ) ){
			$.ajax({ 
        		url: "incluciones/contactoenviar.php",
        		type: "POST",
        		data: {nombre:nombre,correo:correo,telefono:telefono},
        		success: function(response){
        			if (response == "1"){
     					$('#enviadodiv').fadeIn('slow');
	 					$('#enviadodiv').delay(3000);
	 					$('#enviadodiv').fadeOut('slow');
				}
				else{
						$('#erroralenviar').fadeIn('slow');
	 					$('#erroralenviar').delay(3000);
	 					$('#erroralenviar').fadeOut('slow');}
       			}
			});
		}  
		else{   
    		$('#errorcorreo').fadeIn('slow');
	 		$('#errorcorreo').delay(3000);
	 		$('#errorcorreo').fadeOut('slow');
		}
	}
	else{
		$('#errodatosfaltantes').fadeIn('slow');
		$('#errodatosfaltantes').delay(3000);
	 	$('#errodatosfaltantes').fadeOut('slow');
	}
}
</script>