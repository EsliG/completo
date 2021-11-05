<?php
$email = $_POST['correoelectronico'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$mail = "
<html>
	<body>
	<meta charset='utf-8'>
		Nombre: ".$nombre." <br>
		Email: ".$email." <br>
		Mensaje: ".$mensaje."
		<center>
		</center>
   </body> 
</html>				 
";
$titulo = $nombre."Contacto de Platafroma";
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ".$email."\r\n";
$bool =mail("contacto@ceuniversitario.com" ,$titulo,$mail,$headers);
if($bool){
	echo"1";
}else{	
	echo"2";
}
?>