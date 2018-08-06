<!doctype html>
<html>
<head>
<meta charset="UTF-8"></head>
<?php 
if(isset ($_COOKIE['nombre'])){
echo 'La cookie tiene el valor: '. $_COOKIE['nombre'];
}
else
{
	echo 'La cookie no ha sido guardada';
}
?>