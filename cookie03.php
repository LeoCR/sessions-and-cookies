<?php 
$fecha = date("d/m/Y | H:i:s");

setcookie("fecha",$fecha,time()+31536000);

if(isset($_COOKIE['fecha'])){
	echo 'Hola de nuevo,tu última visita fue el '.$_COOKIE['fecha'];
	}
	else
	{
		echo 'Esta es tu primera visita a nuestra página';
	}
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
</body>
</html>