<?php include("BDConecciones.php"); ?>
<?php
$usr=$_POST['usr'];
$pass=$_POST['pass'];

$link = mysqli_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne', 'u106265038_ceuni')or die(' coneccion fallida: ' . mysqli_error($link));
mysqli_query ($link, "SET NAMES 'utf8'");
$query = "select *  from usuario where usr='".$usr."' && pass='".$pass."' ";
$result = mysqli_query($link, $query) or die('Consulta fallida: ' . mysqli_error($link));
if($row = mysqli_fetch_array($result)) {
	session_start();
	$_SESSION["autenticado"]= "login";
	$_SESSION["id"]=$row["id"];
	$_SESSION["tipo"]=$row["tipo"];
	$_SESSION["puntajeminimo"]=$row["puntajeminimo"];
	$_SESSION["promedio"]=$row["promedio"];
	
	$_SESSION["nueva"]=$row["nuevo"];
	
	echo"1";
}else{
	echo "2";
}

mysqli_close($link); 
 
?>