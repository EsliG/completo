<?php
$regaspi=$_POST['regaspi'];
$asip="";
$link = mysqli_connect('mysql.hostinger.mx', 'u106265038_ceuni', 'nUjkC3nS0bBq8DHOne', 'u106265038_ceuni')or die(' coneccion fallida: ' . mysqli_error($link));
mysqli_query ($link, "SET NAMES 'utf8'");
$query = "SELECT * FROM dictamen WHERE NumReg= '".$regaspi."' ";
$result = mysqli_query($link, $query) or die('Consulta fallida: ' . mysqli_error($link));
if($row = mysqli_fetch_array($result)){
	$asip=$row["Carrera"];
}else{
	$asip="noadmitido";
}
echo $asip;
mysqli_free_result($result); 
mysqli_close($link); 

?>
