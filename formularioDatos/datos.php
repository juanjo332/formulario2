<?php
$codigo=$_POST['codigo'];
$contrase�a=$_POST['contrase�a'];
$cod=100;
$pass="udg";
if($codigo==$cod && $contrase�a==$pass){
echo "BIENVENIDO";
}
else {
echo "ERROR<br/>";
echo "<input type='button' value='Regresar' onClick='history.go(-1);'>";
}
?>