<?php
$codigo=$_POST['codigo'];
$contraseña=$_POST['contraseña'];
$cod=100;
$pass="udg";
if($codigo==$cod && $contraseña==$pass){
echo "BIENVENIDO";
}
else {
echo "ERROR<br/>";
echo "<input type='button' value='Regresar' onClick='history.go(-1);'>";
}
?>