<?php 
session_start();
$ant=$_SESSION["autenticado"];

if($ant=="login"){
	$idiniciosess=$_SESSION["id"];
	$tipodeusuario=$_SESSION["tipo"];
	
	$nuevo = $_SESSION["nueva"];
?>
<!DOCTYPE html>
<html>
<head>
<?php include("incluciones/linkspanelceuni.php"); ?>
<?php include("incluciones/BDConecciones.php"); ?>
</head>
<body>
<div class="loadermainplatafroma" id="loadermainplatafroma">	
<div class="book">
  <div class="inner">
    <div class="left"></div>
    <div class="middle"></div>
    <div class="right"></div>
  </div>
  <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
</div>
	
<?php
	if($tipodeusuario=="Alumno"){
		
		
		if($nuevo==true){
		
			include("incluciones/menualumnos.php");
		}else{
			include("incluciones/llenadodeinformacion.php");
		}
	}
	if($tipodeusuario=="Admon"){
		include("incluciones/menuadmon.php");
	}
  if($tipodeusuario=="Coordinador"){
		include("incluciones/menucoordinador.php");
	}
?>
	
</body>
</html>
<?php 
}else{
		header('Location: Login ');
		}
?>