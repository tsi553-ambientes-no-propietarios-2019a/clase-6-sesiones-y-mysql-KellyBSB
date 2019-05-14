<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

session_start();

echo 'Datos de la sesssion'.'<br>';
		print_r("$_SESSION[nombre]");
		echo '<br>';
		print("Bienbend@ $_SESSION[nombre]");

?>

	<div><a href="Cerrar.php">Cerrar sesión</a></div>

</body>
</html>

