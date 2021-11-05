<?php 
	include("BDConecciones.php");
	$idiniciosess = $_POST["idalumno"];


?>
<img src="img/slider/videoleccionesdesk.png" class="desksliderindex">
<img src="img/slider/videoleccionesmov.png" class="movilessliderindex">

<div id="mainlightboxvideos" class="mainlightboxexamen2" style="display: none;">
	<div  class="lightboxcontenidoexamen2">
		<img onclick="cerrarventanadevideo()" Class="imglogoscerrarplataforma" src="img/logos/cerrarsesionmorado.png">
		<div id="insertarviodeospacio"></div>
	</div>
</div>

<div class="mainparaplataforma">

	
	


<?php 

	
	$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
	$consulta3 = "SELECT * FROM videos Where materia='1' ";
	$resultado3 = $link->query($consulta3);
	echo '<p class="titutlsopraplaafromamain">VIDEOLECCIONES ESPAÑOL</p>';
	echo'<ul class="honeycomb" lang="es">';
	


	while($row3 = $resultado3->fetch_assoc()) {
	
	echo '  <li class="honeycomb-cell"  onclick="vervideo('.$row3['src'].')">
    <img class="honeycomb-cell__image" src="img/slider/fondoexamenes.png">
    <div class="honeycomb-cell__title">'.$row3['titulo'].'</div>
  </li>';
	
		
		
//		echo '<div onclick="vervideo('.$row3['src'].')" class="mainvideosclases"> 
//		
//			<div class="titulodevideos">'.$row3['titulo'].'</div>  
//			
//			<div class="botondeverdieoseccion">Ver Video</div>  
//			
//			</div>';
		
	}	
	
	echo'<li class="honeycomb-cell honeycomb__placeholder"></li>
</ul>';
	
		$consulta3 = "SELECT * FROM videos Where materia='2' ";
	$resultado3 = $link->query($consulta3);
	echo '<p class="titutlsopraplaafromamain">VIDEOLECCIONES MATEMÉTICAS</p>';
	echo'<ul class="honeycomb" lang="es">';
	


	while($row3 = $resultado3->fetch_assoc()) {
	
	echo '  <li class="honeycomb-cell"  onclick="vervideo('.$row3['src'].')">
    <img class="honeycomb-cell__image" src="img/slider/fondoexamenes.png">
    <div class="honeycomb-cell__title">'.$row3['titulo'].'</div>
  </li>';
	
		
		
//		echo '<div onclick="vervideo('.$row3['src'].')" class="mainvideosclases"> 
//		
//			<div class="titulodevideos">'.$row3['titulo'].'</div>  
//			
//			<div class="botondeverdieoseccion">Ver Video</div>  
//			
//			</div>';
		
	}	
	
	echo'<li class="honeycomb-cell honeycomb__placeholder"></li>
</ul>';
	

	
	mysqli_close($link);
		?>


</div>