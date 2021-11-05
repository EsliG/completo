<?php
$dbuser="u106265038_ceuni";
$dbpass="nUjkC3nS0bBq8DHOne";
$dbname="u106265038_ceuni";

$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);
$consulta="SELECT DISTINCT telefono FROM interesados";
$resultado = $link->query($consulta);
$contado=0;
while($row = $resultado->fetch_assoc()) {
		
	
$consulta2="SELECT * FROM interesados where telefono ='".$row['telefono']."'  ";
$resultado2 = $link->query($consulta2);
	

	
	
while($row2 = $resultado2->fetch_assoc()) {

	
	if($contado==0){
		echo "no eliminado ".$row2['id']." contador".$contado."  <br>";
		$contado++;
	}else{
		$consulta2="DELETE FROM `interesados` WHERE id='".$row2['id']."'  ";
		$link->query($consulta2);
		echo "elimnado ".$row2['id']."   contador".$contado."  <br> ";
	}
	
}
	
	echo "------------ <br>";	
$contado=0;		
}
mysqli_close($link);		
	
?>