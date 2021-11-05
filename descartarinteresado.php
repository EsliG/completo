<?php include("conecxionabasededatos.php"); ?>
<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);

$consulta = "UPDATE interesados Set descardado = true where id='".$id."' ";

$resultado = $link->query($consulta);

mysqli_close($link);

?>