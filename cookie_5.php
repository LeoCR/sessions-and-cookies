<?php 
if(isset($_POST['color'])){
	$color=$_POST['color'];
	setcookie('color',$color,time()+800000000);
}
else
{
	if(isset($_COOKIE['color'])){
		$color = $_COOKIE['color'];
	}else{
		$color = 'white';
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Escoje un Color</title>
</head>
<body <?php echo "style='background-color:$color'";?>>
<form method="post" action="cookie_5.php">
<label for="color">Escoge tu color de fondo</label>
<select name="color">
<option value="red">Rojo</option>
<option value="blue">Azul</option>
<option value="green">Verde</option>
<option value="yellow">Amarillo</option>
<option value="silver">Gris</option>
<option value="black">Negro</option>
</select>
<input type="submit" value="Cambiar Color"/>
</form>
</body>
</html>