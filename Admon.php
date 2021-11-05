<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/css.css">
<meta name="google-site-verification" content="zPjjaIDIezMTxz1OmfwheDIOZpl00F8X-WtmmGMw_h8" />
<script src="javascript/jquery.js"></script>
<title>CE UNI Panel</title>
</head>

<body style="background: #F1F1F1;">
<div class="divdeloaderpanelcontacto" id="loaderpanel">
	<div class="divmainloader">
		
	</div>
</div>
<div class="maindivplataformacontacto">
	<img src="img/logos/logo.png" class="logoplataformacontacto"><br>
	<div class="divopcionplataformacontacto" onClick="varcontactonuevos()">Ver nuevos contacto</div>
	<div class="divopcionplataformacontacto">Ver contacto ya contactados</div>
	<div class="divopcionplataformacontacto" onClick="vardescartadoscontactos()">Ver contacto descartados</div>
</div>
	
	
<div class="recuadrodeimagence" id="vercontactonuevos">

</div>

	
<script>
	function varcontactonuevos(){
	
		//document.getElementById("cargandocreondoetc").style.display="block";
		$.ajax(
  			'incluciones/vercontactonuevos.php',
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
	}
	
	function contactado(id){
		//document.getElementById("cargandocreondoetc").style.display="block";
		
		$.ajax({ 
	 		url: "incluciones/cambiaracontacto.php",
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
	
	varcontactonuevos();
	
</script>
	
</body>
</html>