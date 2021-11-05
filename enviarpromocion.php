<?php include("BDConecciones.php"); 
$tel = $_POST['tel'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$sede = $_POST['sede'];




$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname )or die(' coneccion fallida: ' . mysqli_error($link));
mysqli_query ($link, "SET NAMES 'utf8'");



//$query3 = "SELECT * FROM interesados where telefono='".$tel."'  ";
//$result3 = mysql_query($query3) or die('Consulta fallida: ' . mysql_error());
//
//if($row3 = mysql_fetch_array($result3)) {
//	
//}else{
//
//}

ini_set('date.timezone','America/Mexico_City');

$hoy = date("Y-n-j");
$ahorita = date("H:i:s");



$paraadminadmon = "0";


$query = "INSERT INTO interesados(nomcom, telefono,correo,fecha,hora,idquiencontacto) VALUES ('".$nombre."','".$tel."','".$email."','".$hoy."','".$ahorita."','".$paraadminadmon."')";
mysqli_query($link, $query) or die('Consulta fallida: ' . mysqli_error($link));








$mail = "
<html>
	<body>
	<meta charset='utf-8'>
		Nombre: ".$nombre." <br>
		Telefono: ".$tel." <br>
		Email: ".$email." <br>
		Sede: ".$sede." <br>
   </body> 
</html>				 
";

//Titulo
$titulo = $nombre."Interesado en Promocion";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
//dirección del remitente 
$headers .= "From: ".$email."\r\n";
//Enviamos el mensaje a tu_dirección_email
$bool = mail("contacto@ceuniversitario.com" ,$titulo,$mail,$headers);
mail("ceuniversitario@gmail.com" ,$titulo,$mail,$headers);

	

mysqli_close($link); 

	?>
