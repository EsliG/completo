<?php
$tel = $_POST['tel'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$link = mysqli_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne', 'u106265038_ceuni')or die(' coneccion fallida: ' . mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");

ini_set('date.timezone','America/Mexico_City');
$hoy = date("Y-n-j");
$ahorita = date("H:i:s");
$query = "INSERT INTO comprapaquete(nombre, telefono,correo,fecha,hora) VALUES ('".$nombre."','".$tel."','".$email."','".$hoy."','".$ahorita."')";
mysqli_query($link, $query) or die('Consulta fallida: ' . mysqli_error($link));
mysqli_close($link); 
$mail = "
<html>
	<body>
	<meta charset='utf-8'>
		Nombre: ".$nombre." <br>
		Telefono: ".$tel." <br>
		Email: ".$email." <br>
   </body> 
</html>				 
";
$titulo = $nombre."Interesado en Comprar paquete ";
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ".$email."\r\n";
$bool = mail("contacto@ceuniversitario.com",$titulo,$mail,$headers);

?>