<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>
<?php 
$usuariook = 'pedro';
$passok = 'abcd';

if($_POST['nombre']==$usuariook && $_POST['pass']==$passok){
	session_start();
	$_SESSION['verificado'] = "si";
	echo "Tienes acceso a la página privada";
	echo '<a href="contenido_privado.php">Ir a contenido Privado</a>';
}
else
{
	header("Location: session_usuario_password.php?error=si");
}
?>