<!doctype html>
<html>
<head>
<meta charset="UTF-8"></head>
<?php 
$nombre = $_POST['nombre'];

setcookie('nombre',$nombre, time()+4800);
?><?php 
if(isset ($_COOKIE['nombre'])){
echo 'La cookie tiene el valor: '. $_COOKIE['nombre'];
echo '<br><a href="cookie1d.php">Salir del Sistema</a>';
}
else
{
	echo 'La cookie no ha sido guardada';
}
?>
