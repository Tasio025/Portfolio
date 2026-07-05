<?php 
$pg = "Contactos";

if($_POST){ //Si es post recupero todos los datos que estan en las variables
$nombre = $_POST["txtNombre"];
$correo = $_POST["txtCorreo"];
$tel = $_POST["txtTel"];
$mensaje = $_POST["txtMensaje"];

//Varios destinatarios          A partir de aca tengo que investigar bien como armar esta parte de las cabeceras
$para = "tasioalvarez11@gmail.com"; //mi mail
$titulo = "Recibiste un mensaje desde tu web"; 

//Mensaje
$cuerpo = "
Nombre: $nombre <br>
Correo: $correo <br>
Telefono: $tel <br>
Mensaje: $mensaje
";  //Esto es basicamente lo que se va a enviar

//Para enviar un correo html, debe establecerse la cabecera Content-type
$cabeceras = "MIME-Version: 1.0" . "\r\n";//Cabeceras
$cabeceras .= "Content-type: text/html; charset=UTF-8" . "\r\n"; //Aca tengo que poner la cabecera 2, todavia no se para que son pero tengo que ver el video de nelson

//Cabeceras adicionales
$cabeceras .= "To: tasioalvarez11@gmail.com";  //Cabecera adicional
$cabeceras .= "From: info@(nombre de mi dominio)";

//Enviarlo
mail($para, $titulo, $cuerpo, $cabeceras);
header("Location: confirmacion_envio.php");
}
?>

<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script><!--La versión min la usamos xq es la versión comprimida para
    que la página pese menos y así cargue más rápido-->
    <link rel="stylesheet" href="css/estilos.css">
</head>

<!--PARA TERMINAR: 
1_ AGREGAR CV A "DESCARGAR MI CV"
2_ MEJORAR BOTÓN DE WHATSAPP-->
<body id="contacto" class="d-flex flex-column h-100">
    <?php include_once("menu.php") ?>
    <main class="container"> <!--Ahora empezamos a dibujar las filas y columnas-->
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1> <!--Acá la primera fila-->
            </div>
            <div class="row">
                <div class="col-12 col-sm-6"><!--Acá 2 filas de 6-->
                    <p>Te invito a que me contactes por whatsapp</p>
                </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="post"><!--Acá ene ste formulario dibujaremos los controles-->
                        <div class="pb-3" class="form-control">
                            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre">
                        </div>
                        <div class="pb-3" class="form-control">
                            <input type="text" name="txtCorreo" id="txtCorreo" placeholder="Correo">
                        </div>
                        <div class="pb-3" class="form-control">
                            <input type="text" name="txtTel" id="txtTel" placeholder="Teléfono/Whatsapp">
                        </div>
                        <div class="pb-3" class="form-control">
                            <textarea type="text" name="txtMensaje" id="txtMensaje" style="width: 608px; height: 71px;" placeholder="Escriba su mensaje aquí..."></textarea>

                        </div>
                        <div class="">
                            <button type="submit" class="btn" id="btnEnviar" name="btnEnviar">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp" id="btn-whatsapp">
            BTN
        </div>
        <div class="row">
            <div class="col-3 text-center ">
                <a href="https://github.com" target="_blank" title="github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin (Terminar de poner el link de mi linkedin)" target="_blank" title="linkediin"> <i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://DePcSuite.com"></a> DePc Suite
            </div>
            <div class="col-3">
                <a href="mailto: tasioalvarez11@gmail.com">tasioalvarez11@gmail.com</a>
            </div>
            <div class="col-3">
                
            </div>
        </div>
    </footer>
</body>
</html>