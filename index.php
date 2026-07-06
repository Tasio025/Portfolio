<?php 
$pg = "inicio";
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/js/bootstrap.bundle.min.js">
    <script rel="stylesheet" src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">

<!--PARA TERMINAR: 
1_ CAMBIAR DE COLOR LAS LETRAS DE LA PRESENTACIÓN (DEAJO DEL COETE)
2_ AJUSTAR EL BOTÓN "ONOCÉ MIS PROYECTOS"
3_ AGREGAR EL HEADER EN EL BOTÓN HAMBURGUESA DE LA VERSIÓN MOBILE
4_ MEJORAR LA RESPONSIVIDAD DE LA VERSIÓN MOBILE
5_ MEJORAR EL BOTÓN DE WHATSAPP-->

</head>
<body id="Inicio">
    <header class="container">
       <?php include_once("menu.php") ?> <!--Esta función va a incluir todo lo que haya en el archivo de menu.php y lo va a pasar
       a esta parte del código-->
    </header>
    <main class="container">
      <div class="row">
        <div class="col-12 mx-auto text-center cohete">
          <a href="proyectos.html"><img src="imagenes/Imagenes/cohete.svg" alt=""></a>
        </div>
        <div class="col-12 col-sm-6 col offset-sm-3 text-center ">
          <div class="my-4"><p class="px-5 py-2">Bienvenido a mi sitio web sobre desarrollo de sistemas</p></div>
          <!--CAMBIAR DE COLOR LAS LETRAS DE ESTE TEXTO-->
        </div>
         <div class="col-12 text-center my-3">
          <a href="proyectos.php" class="btn shadow">Conocé mis proyectos</a>
        </div>
      </div>
    </main>
    <footer class="container mt-auto pb-4">
       <div class="btn-whatsapp" id="btn-whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
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
                <a href="mailto: tasioalvarez11@gmail.com">tasioalvarez11@gmail.com</a>
            </div>
            <div class="col-3">
                
            </div>
        </div>
    </footer>
    
</body>
</html>