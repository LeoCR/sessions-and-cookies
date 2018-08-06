<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>
<?php 
session_start();
if(isset($_SESSION['verificado'])){
	echo "Esta es tu pagina verificada";
}else
{
	header("Location: session_usuario_password.php?error=fuera");
}
?>