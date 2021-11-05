<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$modalidad = $_POST['modalidad'];
$curso = $_POST['curso'];
$mail = "
<html>
	<body>
	<meta charset='utf-8'>
	<style>
table, th, td {
    border: 6px solid #FFFFFF;
    border-collapse: collapse;
	 background: #f5f5f5;
	 padding:2%;
	 font-size:2.5vh;
}
</style>
<center>
<table style='width:50%;'>
<tr>
<td style='width:30%'>
Nombre:
</td>
<td style='width:70%'>
".$nombre."
</td>
</tr>
<tr>
<td style='width:30%'>
Correo:
</td>
<td style='width:70%'>
".$correo."
</td>
</tr>
<tr>
<td style='width:30%'>
Teléfono:
</td>
<td style='width:70%'>
".$telefono."
</td>
</tr>
<tr>
<td style='width:30%'>
Modalidad:
</td>
<td style='width:70%'>
".$modalidad."
</td>
</tr>
<tr>
<td style='width:30%'>
Curso:
</td>
<td style='width:70%'>
".$curso."
</td>
</tr>
</table>
</center>
	</body> 
</html>				 
";
//Titulo
$titulo = "interesado en Curso CE Universitario";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
//dirección del remitente 
$headers .= "From: ".$correo."\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("miguel.moya_s@utzmg.edu.mx",$titulo,$mail,$headers);
mail("lesly.martinez@cemarketing.mx",$titulo,$mail,$headers);
mail("contacto@ceuniversitario.com",$titulo,$mail,$headers);
if($bool){
	echo"1";
}else{	
	echo"2";
}
?>