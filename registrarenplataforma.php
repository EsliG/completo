<?php
$pass = $_POST['pass'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$preparatoria = $_POST['preparatoria'];




$link = mysql_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne')or die(' coneccion fallida: ' . mysql_error());
mysql_select_db('u106265038_ceuni') or die('No se pudo seleccionar la base de datos');
mysql_query ("SET NAMES 'utf8'");
$query = "INSERT INTO plataforma  (nom, cor,pas ,pre ) VALUES ('".$nombre."','".$email."','".$pass."','".$preparatoria."')";
mysql_query($query) or die('Consulta fallida: ' . mysql_error());
mysql_close($link); 



$mail = "
<html>
	<body>
	<meta charset='utf-8'>
		Nombre: ".$nombre." <br>
		Email: ".$email." <br>
		Preparatoria: ".$preparatoria."<br>
   </body> 
</html>				 
";

//Titulo
$titulo = $nombre." Registro en Plataforma ";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
//dirección del remitente 
$headers .= "From: ".$email."\r\n";
//Enviamos el mensaje a tu_dirección_email
$bool = mail("contacto@ceuniversitario.com" ,$titulo,$mail,$headers);
if($bool){
	echo"1";
}else{	
	echo"2";
}
?>