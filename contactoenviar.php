<?php include("BDConecciones.php"); 
$tel = $_POST['tel'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$sede = $_POST['sede'];




$link = mysql_connect("localhost", $dbuser, $dbpass )or die(' coneccion fallida: ' . mysql_error());
mysql_select_db($dbname) or die('No se pudo seleccionar la base de datos');
mysql_query ("SET NAMES 'utf8'");



$query3 = "SELECT * FROM interesados where telefono='".$tel."'  ";
$result3 = mysql_query($query3) or die('Consulta fallida: ' . mysql_error());

if($row3 = mysql_fetch_array($result3)) {
	
}else{
ini_set('date.timezone','America/Mexico_City');
$hoy = date("Y-n-j");
$ahorita = date("H:i:s");


$query = "SELECT * FROM contadoradmon where id='1' ";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
$paraadminadmon;
if($row2 = mysql_fetch_array($result)) {
	
	$paradmon= $row2['contador'];
	
	if($paradmon<=3){
		

			
			$paradmon++;
			$paraadminadmon=$paradmon;
		
		
		$consulta = "UPDATE contadoradmon Set contador = '".$paradmon."' where id='1' ";
		mysql_query($consulta) or die('Consulta fallida: ' . mysql_error());

		
	}else{
		$paradmon=1;
		$paraadminadmon=$paradmon;
		$consulta = "UPDATE contadoradmon Set contador = '".$paradmon."' where id='1' ";
		mysql_query($consulta) or die('Consulta fallida: ' . mysql_error());
	}
	
}

echo $paraadminadmon;


$query = "INSERT INTO interesados(nomcom, telefono,correo,fecha,hora,idquiencontacto) VALUES ('".$nombre."','".$tel."','".$email."','".$hoy."','".$ahorita."','".$paraadminadmon."')";
mysql_query($query) or die('Consulta fallida: ' . mysql_error());


mysql_close($link); 





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
if($bool){
	echo"1";
}else{	
	echo"2";
}
	

	
}
	
?>