<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Usuario y Password</title>
</head>
<body>
<?php 
if($_GET[error]=="si"){
	echo "Tu usuario y/o contraseña no son correctos.Intentalo de nuevo.";
}elseif($_GET[error]=="fuera"){
	echo "No puedes entrar directamente en esta página";
}
?>
	<form action="validar_usuario.php" method="post">
    	<label for="nombre">Nombre de Usuario</label>
    	<input type="text" name="nombre" placeholder="Escriba aquí su nombre"/>
		<label for="pass">Nombre de Usuario</label>
    	<input type="password" name="pass" placeholder="Escriba aquí su Contraseña"/>
    	<br><br>
        <input type="submit" value="Entrar"/>
    </form>
</body>
</html>