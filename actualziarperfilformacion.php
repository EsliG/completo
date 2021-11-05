<?php 
include("BDConecciones.php");

$nombre = $_POST["nombrecompleto"];
$telefono = $_POST["telefonocontacto"];
$promedio = $_POST["promediodeprepa"];
$horarioid = $_POST["selecthorarios"];
$carreraid = $_POST["carreraseleccionada"];
$idedesuario = $_POST["idedesuario"];



$nuevacontrasena = $_POST["nuevacontrasena"];

$centro;
$carrera;
$puntajeminimo;

$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);


	if($_FILES["fotodeperfil"]["name"] != ""){
		
		$fp = fopen($_FILES["fotodeperfil"]["tmp_name"],"r");
		$ReadBinary = fread($fp,filesize($_FILES["fotodeperfil"]["tmp_name"]));
		fclose($fp);
		$FileData = addslashes($ReadBinary);
		
			
		$consulta = "SELECT * FROM puntajes WHERE id= '".$carreraid."' ";
		
		echo $consulta;
		
$resultado = $link->query($consulta);
while($row2 = $resultado->fetch_assoc()) {
			
			$centro = $row2["centro"];
			$carrera = $row2["carrera"];
			$puntajeminimo = $row2["puntajeminimo"];
			
		}
		
$consulta2 = "UPDATE usuario SET  Fotodeperfil='".$FileData."', pass='".$nuevacontrasena."', telefono='".$telefono."', nombre='".$nombre."' , curso='".$horarioid."' , carrera='".$carrera."' , puntajeminimo ='".$puntajeminimo."',  promedio='".$promedio."',  centrodeaspiracion='".$centro."' ,  horariodeclases='".$horarioid."',nuevo=true	  WHERE id='".$idedesuario."'";
		$link->query($consulta2);
		
		echo $consulta2;
		
	}



mysqli_close($link);

?>