<!doctype html>
<html>
<head>
<meta charset="UTF-8"><?php 
$persona = array("Pedro","Pérez","26","Madrid","abcde");
setcookie("micookie[nombre]",$persona[0],time()+3600);
setcookie("micookie[apellido]",$persona[1],time()+3600);
setcookie("micookie[edad]",$persona[2],time()+3600);
setcookie("micookie[ciudad]",$persona[3],time()+3600);
setcookie("micookie[password]",$persona[4],time()+3600);

echo "<br> El Nombre es ".$_COOKIE['micookie']['nombre'];
echo "<br> El Apellido es ".$_COOKIE['micookie']['apellido'];
echo "<br> La Edad es ".$_COOKIE['micookie']['edad'];
echo "<br> La Ciudad es ".$_COOKIE['micookie']['ciudad'];
echo "<br> La Clave es ".$_COOKIE['micookie']['password'];
?>