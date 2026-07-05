<?php 
$pg = "Proyectos";
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<!--PARA TERMINAR:
1_ AJUSTAR "PROYECTO INTEGRADOR"
2_ AGREGAR CV A "AGREGAR MI CV"
3_ MEJORAR EL TEXTO DE WHATSAPP-->

<body id="proyectos">
    <header class="container">
        <nav>
         <?php include_once("menu.php") ?>
    </header>
    <main class="container">
      <div class="row">
        <div class="col-12 pt-3 pb-5">
          <h1>Proyectos</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p>Los siguientes son algunos de los trabajos que he realizado: </p>
        </div>
      </div>
      <!--Opción 1: -->
      <div class="row">
        <div class="col-12 col-sm-4 p-4"> <!--Este div forma un padding, por eso están los 3 bloques juntos-->
          <div class="row border proyecto pb-5">
            <div class="col-12 p-0">
              <img src="imagenes/Imagenes/abmclientes.png" alt="ABM CLIENTES" class="img-fluid"> 
               <h2>ABM CLIENTES</h2>
                <p class="py-2 px-3">Alta, baja y modificación de un registro...</p>
            </div>
            <div class="col-6">
              <a href="#" class="btn-rojo">Ver online</a>
            </div>
            <div class="col-6 text-center">
              <a href="#" class="link-rojo">Codigo fuente</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 p-4 ">
            <div class="row border proyecto pb-5">
            <div class="col-12 p-0">
              <img src="imagenes/Imagenes/abmventas.png" alt="GESTION DE VENTAS" class="img-fluid"> 
              <h2>SISTEMA GESTIÓN DE VENTAS</h2>
              <p class="py-2 px-3">Sistema de gestión de clientes, productos...</p>
            </div>
            <div class="col-6">
              <a href="#" class="btn-rojo">Ver online</a>
            </div>
            <div class="col-6 text-center">
              <a href="#" class="link-rojo">Codigo fuente</a>
            </div>
          </div>          
        </div>
        <div class="col-12 col-sm-4 p-4 ">
            <div class="row border proyecto pb-5">
            <div class="col-12 p-0">
              <img src="imagenes/Imagenes/proyecto-integrador.png" alt="PROYECTO INTEGRADOR" class="img-fluid"> 
              <h2>PROYECTO INTEGRADOR</h2>
               <p class="py-2 px-3">Proyecto integrador desarrolladdo en PHP, Laravel, Javascript...</p>
            </div>
            <div class="col-6">
              <a href="#" class="btn-rojo">Ver online</a>
            </div>
            <div class="col-6 text-center">
              <a href="#" class="link-rojo">Codigo fuente</a>
            </div>
          </div>
        </div>
      </div>

      <!--Opción 2:-->
     <!-- <div class="row">
        <div class="col-sm-4 col-12 mb-3">
          <div class="proyecto">
            <img src="" alt="">--> <!--Acá va la captura de pantalla de algun proyecto mío-->
          <!--  <h2 class="px-3 py-2">El nombre del proyecto</h2>--> <!--Autofasst x ejemplo-->
            <!--<p class="px-3 py-1">
              La descripción de lo que es el proyecto
            </p>
            <div class="row py-4 pb-3 px-3">
              <div class="col-6">
                <a href="#" class="btn btn-rojo">Ver online</a>
              </div>
              <div class="col-6 text-center">
                <a href="#" class="link-rojo"> Código fuente</a>
              </div>
            </div>
          </div>
        </div>
      </div>-->
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp" id="btn-whatsapp">
          <i class="fa-brands fa-whatsapp"></i>
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