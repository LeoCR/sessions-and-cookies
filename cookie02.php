<?php 
if(isset($_COOKIE['visita'])){
	echo 'Que alegría verte de nuevo por aquí!!';
	}
	else
	{
		setcookie('visita','ok',time()+31536000);
		echo 'Bienvenido a mí página Web por primera vez';
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