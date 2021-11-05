<?php include("conecxionabasededatos.php"); ?>
<?php

$id = $_POST['id'];
$esceuladeinteres = $_POST['esceuladeinteres'];
$curso = $_POST['curso'];
$idalumno = $_POST['idalumno'];

mysql_query ("SET NAMES 'utf8'");
ini_set('date.timezone','America/Mexico_City');
$hoy = date("Y-n-j");
$ahorita = date("H:i:s");


$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);

$consulta = "UPDATE interesados Set contactado = true ,  	idquiencontacto ='".$idalumno."' , fechadeultimocontacto = '".$hoy."'  ,  	cursodeinteres  ='".$curso."' , escuela ='".$esceuladeinteres."'  where id='".$id."' ";

echo $consulta ; 

$resultado = $link->query($consulta);

mysqli_close($link);

?>