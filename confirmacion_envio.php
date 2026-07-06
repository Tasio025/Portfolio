<?php
$pg = "Contactos";
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion envio</title>
     <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script><!--La versión min la usamos xq es la versión comprimida para
    que la página pese menos y así cargue más rápido-->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="contacto" class="d-flex flex-column h-100">
    <?php include_once("menu.php") ?>
    <main class="container text-center">
        <h1>¡Gracias por contactarte!</h1>
        <p>Tu mensaje se ha enviado correctamente. Estaremos en contacto pronto!</p>
        <a href="index.php" class="btn btn-rojo">Volver al inicio</a>
    </main> 
    <footer class="container mt-auto pb-4"> 
        <div class="btn-whatsapp" id="btn-whatsapp">
            BTN
        </div>
        <div class="row">
            <div class="col-3 text-center ">
                <a href="https://github.com/Tasio025" target="_blank" title="github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/tasio-alvarez-80b52b259/" target="_blank" title="linkedin"> <i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://DePcSuite.com">DePc Suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:tasioalvarez11@gmail.com">tasioalvarez11@gmail.com</a>
            </div>
            <div class="col-3">
            </div>
        </div>
    </footer>
</body>
</html>