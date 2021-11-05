<?php include("BDConecciones.php"); ?>
<?php

$nombre = $_POST['nompretitulodelproducto'];
$descripciondenuevaproducto = $_POST['descripciondenuevaproducto'];
$categorias = $_POST['categoriaseleccionadanuevoagregar'];
$subcategorias = $_POST['subcategoriaseleccionadanuevoagregar'];

$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);

	if($_FILES["fotodeperfil"]["name"] != ""){
		
		$fp = fopen($_FILES["fotodeperfil"]["tmp_name"],"r");
		$ReadBinary = fread($fp,filesize($_FILES["fotodeperfil"]["tmp_name"]));
		fclose($fp);
		$FileData = addslashes($ReadBinary);
		
		
		
		
$consulta = "INSERT INTO Productos (name , img , descripcion, categoria , subcategoria, fichatecnica , hojaseguridad  ) VALUES ('".$nombre."','".$FileData."','".$descripciondenuevaproducto."','".$categorias."','".$subcategorias."','".$FileDatafichatecnica."','".$FileDatahojaseseguridad."')";
		
$resultado = $link->query($consulta);
		
	}

mysqli_close($link);

?>