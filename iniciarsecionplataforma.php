<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];


$link = mysql_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne')or die(' coneccion fallida: ' . mysql_error());
mysql_select_db('u106265038_ceuni') or die('No se pudo seleccionar la base de datos');
mysql_query ("SET NAMES 'utf8'");
$query = "SELECT * FROM plataforma where cor='".$usuario."' && pas='".$password."' ";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
if($row = mysql_fetch_array($result)) {
	echo $row["nom"].'<div id="nombredeusuario" style="display:none;">'.$row["nom"].'</div> <div id="telefonousuario" style="display:none;">'.$row["pas"].'</div>';
}else{
	echo "noregistrado";
}

mysql_close($link); 

?>