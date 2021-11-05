<?php include("BDConecciones.php"); 
session_start();
$iddeusuario = $_SESSION["id"];
$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);

$iddeusuario = $_POST['iddeusuario'];
$queexaenes = $_POST['queexaenes'];

$preg_esp = $_POST['preg_esp'];
$preg_mat = $_POST['preg_mat'];

$pun_esp = $_POST['pun_esp'];
$pun_mat = $_POST['pun_mat'];

$cal_esp = $_POST['cal_esp'];
$cal_mat = $_POST['cal_mat'];

$calificacionfinal = $_POST['calificacionfinal'];


		//$consultaselect = "SELECT id FROM resutadosexamenes WHERE idexamen ='".$idexamen."' AND  idusuiario = '".$iddeusuario."' ";
		//$resultadoselect = $link->query($consultaselect);
		
	//if($row2 = $resultadoselect->fetch_assoc()) {
		
	//	$consulta = "UPDATE resutadosexamenes Set ultimoresultado = '".$calificacionfinal."' where idexamen='".$idexamen."' ";	
	//	$resultado = $link->query($consulta);
		
	//}else{
	
		$consulta = "INSERT INTO resutadosexamenes 
		(tipo, 
		numerodeexamen , 	
		idusuiario , 
		primerresultado ,
		ultimoresultado,
		preg_esp,
		preg_mat,
		pun_esp,
		pun_mat,
		cal_esp,
		cal_mat) 
		VALUES (
			'simulacro',
			'".$queexaenes."',
			'".$iddeusuario."',
			'".$calificacionfinal."',
			'".$calificacionfinal."',
			'".$preg_esp."',
			'".$preg_mat."',
			'".$pun_esp."',
			'".$pun_mat."',
			'".$cal_esp."' ,
			'".$cal_mat."')";
		$resultado = $link->query($consulta);
		echo($consulta);
	//}

mysqli_close($link);
?>