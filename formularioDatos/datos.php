<?php
$codigo=$_POST['codigo'];
$contraseņa=$_POST['contraseņa'];
$cod=100;
$pass="udg";
if($codigo==$cod && $contraseņa==$pass){
echo "BIENVENIDO";
}
else {
echo "ERROR<br/>";
echo "<input type='button' value='Regresar' onClick='history.go(-1);'>";
}
?>