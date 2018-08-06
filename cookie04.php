<?php 
if(isset($_COOKIE['contador'])){
	setcookie('contador',$_COOKIE['contador']+1,time()+365*24*60*60);
	echo 'Número de visitas: '.$_COOKIE['contador'];
}
else{
	setcookie('contador',1,time()+365*24*60*60);
	echo "Bienvenido por primera vez a nuestro sitio";
}
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Cookie Contador</title>
</head>

<body>
</body>
</html>