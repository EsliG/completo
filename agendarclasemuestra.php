<?php
$tel = $_POST['tel'];
$nombre = $_POST['nombre'];

$mail = "
<html>
	<body>
	<meta charset='utf-8'>
		Nombre: ".$nombre." <br>
		Telefono: ".$tel." <br>
   </body> 
</html>				 
";

$titulo = $nombre." Agendo clase mUestra ";
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: contacto@ceuniversitario.com\r\n";
$bool = mail("contacto@ceuniversitario.com" ,$titulo,$mail,$headers);
if($bool){
	echo"1";
}else{	
	echo"2";
}
?>