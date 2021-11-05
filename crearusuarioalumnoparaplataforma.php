<?php include("BDConecciones.php"); 
$correonuevousuario = $_POST['correonuevousuario'];
$contrasenatemporal = "12345";

$link = mysql_connect("localhost", $dbuser, $dbpass )or die(' coneccion fallida: ' . mysql_error());
mysql_select_db($dbname) or die('No se pudo seleccionar la base de datos');
mysql_query ("SET NAMES 'utf8'");
$query = "INSERT INTO usuario(usr, pass,tipo,correo,nuevo) VALUES ('".$correonuevousuario."','".$contrasenatemporal."','Alumno','".$correonuevousuario."',false)";
mysql_query($query) or die('Consulta fallida: ' . mysql_error());
mysql_close($link); 

$message = '<html><body><meta charset="utf-8"><center><br><br><br><center>Bienvenido a la plataforma de CE UNI. <br></center>	Tu Usuario es:<b>'.$correonuevousuario.'</b><br>Tu contraseña temporal es:<b>'.$contrasenatemporal.'</b><br>Para poder ingresar en la plataforma necesitaras ingresar a la siguiente url.<br><a href="https://www.ceuniversitario.com/Login">https://www.ceuniversitario.com/Login</a><br>Para poder darte un mejor servicio. Además de esto te pedirán personalizar tu contraseña. <br><br><br><br></center></body></html>';




	include "class.phpmailer.php";
	include "class.smtp.php";
	
	$email_user = "plataforma@ceuniversitario.com";
	$email_password = "@Avila1326";
	$the_subject = "Bienvenido a la plataforma CE UNI";
	$address_to = $correonuevousuario;
	$from_name = "Bienvenido a la plataforma CE UNI";
	$phpmailer = new PHPMailer();
	
	// ---------- datos de la cuenta de Gmail -------------------------------
	$phpmailer->Username = $email_user;
	$phpmailer->Password = $email_password; 
	//-----------------------------------------------------------------------
	// $phpmailer->SMTPDebug = 1;
	$phpmailer->SMTPSecure = 'tls';
	$phpmailer->Host = "smtp.hostinger.mx"; // GMail
	$phpmailer->Port = 587;
	$phpmailer->IsSMTP(); // use SMTP
	$phpmailer->SMTPAuth = true;
	
	$phpmailer->setFrom($phpmailer->Username,$from_name);
	$phpmailer->AddAddress($address_to); // recipients email
	
	$phpmailer->Subject = $the_subject;	
	$phpmailer->Body .= $message;
	$phpmailer->IsHTML(true);

	if(!$phpmailer->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	  } else {
		echo "Usuario Registrado";
	  }
	
?>