<?php
$link = mysql_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne')or die(' coneccion fallida: ' . mysql_error());
mysql_select_db('u106265038_ceuni') or die('No se pudo seleccionar la base de datos');
mysql_query ("SET NAMES 'utf8'");
$query = "SELECT * FROM mailing";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

while($row = mysql_fetch_array($result)) {
	$email=$row["mail"];
	$mail = '
<html>
	<body>
	<meta charset="utf-8">
	<style>
	@font-face {
	font-family: LATINOTYPE-QUEULATCNDREGULAR;
	src: url(https://www.ceuniversitario.com/tipografia/LATINOTYPE-QUEULATCNDREGULAR.OTF);
}
	.textwhitinfo {
    font-size: 16px;
    color: #000;
    font-family: LATINOTYPE-QUEULATCNDREGULAR;
}
	</style>
		<table style="width:100%; background:#EEEEEE; padding-top: 10px; padding-bottom:10px; padding-left:10% ;padding-right: 10% ;">
			<tr>
				<td style="width:50%;">
					<img src="https://www.ceuniversitario.com/img/logos/logo.png" style="width:60%;">
				</td>
				<td style="width:50%;">
					<a href="tel:3323003952">
						<p class="textwhitinfo" style="text-decoration: none;color: #000;">Tel: (33) 2300 3952</p>
					</a>
					<a href="https://wa.me/5213331380780">
					<p class="textwhitinfo" style="text-decoration: none;color: #000;">WhatsApp: 33 3138 0780</p>
					</a>
				</td>
			</tr>
		</table>
		<div style="width:80%; background:#FFF; padding-top: 10px; padding-bottom:10px; padding-left:10%;padding-right: 10% ;" >
			<p class="textwhitinfo">Sabemos que están interesado en Asegurar tu Ingreso a UdeG
				Te invitamos a que conozcas nuestro sistema único de Capacitación para el examen de admisión, donde desarrollarás las habilidades necesarias para superar con éxito la prueba de admisión.<br>
			</p>
			<p class="textwhitinfo">
				Regístrate de manera gratuita.<br>Publicaremos un examen simulacro gratuito basado en su totalidad en el examen real que presentaras.<br>
			</p>
		</div>
<a href="https://www.ceuniversitario.com/Plataforma">
<img src="https://www.ceuniversitario.com/img/plataformamailing.png" style="width:100%;">
</a>
<div style="width:80%; background:#FFF; padding-top: 10px; padding-bottom:10px; padding-left:10%;padding-right: 10% ;" >
<br>
		</div>
   </body> 
</html>				 
';
$titulo = "Asegura tu ingreso a UdeG";
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: contacto@ceuniversitario.com \r\n";
$bool = mail($email,$titulo,$mail,$headers);	
if($bool){
	echo"enviado <br>";
}else{
	echo"no enviado <br>";
}
}

mysql_close($link); 
?>