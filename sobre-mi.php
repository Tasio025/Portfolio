<?php 
$pg = "Sobre-mi";
?>

<html lang="es">
  <!--De Tarea: Terminar de armar bien este portfolio para después armar el mío y publicarlo en git
  Faltaría terminar de llenar las secciones de abajo (Formación académica y cursos de desarrollo personal) y arreglar
  algunos detalles, como enderezar el header-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<!--PARA TERMINAR: 
2_ AGREGAR MÁS INFORMACIÓN PERSONAL
3_ AGREGAR HERRAMIENTAS COMO LAS DE NELSON
4_ PONER INFO EN EXPERIENCIA LABORAL
5_ COMPLETAR "FORMACIÓN ACADÉMICA"
6_ COMPLETAR "CURSOS DE DESARROLLO PERSONAL"
7_ MEJORAR EL ESTILO DEL BOTÓN HAMBURGUESA DEL HEADDER DE LA VERSIÓN NOBILE
9_ AJUSTAR BOTÓN DE WHATSAPP-->
<body id="sobre-mi">
<header class="container">
    <?php include_once("menu.php") ?>
    </header>
    <main>
      <section class="container" id="descripcion">
        <div class="row mb-5">
          <div class="col-12 col-sm-7">
            <h1 class="pb-5 pt-3">Sobre mí</h1>
            <p>Apasionado por la tecnología. Soy alumno de Licenciatura en Sistemas
               en la universidad de Morón, y tengo conocimientos como desarrollador web.</p>
               <div class="">
                <a href="contactos.html" class="btn btn-rojo mt-4">Enviar mensaje</a>
               </div>
          </div>
          <div class="col-12 col-sm-5 py-5">
            <img src="imagenes/Imagenes/FotoCv2.jpg" alt="Tasio" class="FotoCv img-fluid rounded-circle w-50">
          </div>
        </div>
      </section>
      <section id="stack-tecnologico">
        <div class="container">
          <div class="row">
            <div class="col-12 py-5">
              <h2> Stack tecnológico</h2>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                <h3>Javascript</h3>
                <img src="ImagenesPortfolio/JS.png" alt="Javascript">
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                <h3>PHP</h3>
                <img src="ImagenesPortfolio/php.svg" alt="PHP">
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                <h3>HTML</h3>
                <img src="ImagenesPortfolio/HTML5.png" alt="HTML">
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                <h3>CSS</h3>
                <img src="ImagenesPortfolio/CSS.png" alt="CSS">
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                <h3>Laravel</h3>
                <img src="ImagenesPortfolio/Laravel.png" alt="Laravel">
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                <h3>Bootstrap</h3>
                <img src="ImagenesPortfolio/Bootstrap.png" alt="Bootstrap">
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                <h3>C++</h3>
                <img src="ImagenesPortfolio/CppLogo.png" alt="C++">
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                8
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                9
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                10
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                11
              </div>
            </div>
            <div class="col-sm-2 col-6">
              <div class="tecnologia mb-4 pb-3">
                12
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="experiencia">
      <div class="container">
        <div class="row">
          <div class="col-12 py-5">
            <h2><i class="fa-solid fa-briefcase"></i> Experiencia laboral</h2>
          </div>
        </div>

        <!-- Tarjeta 1 -->
        <div class="d-flex align-items-center shadow bg-white rounded p-3 mb-4">
          <div class="flex-shrink-0 d-none d-sm-flex me-4 p-3">
            <img src="ImagenesPortfolio/DePCLogo.jpg" alt="DePc" class="img-fluid baw" style="width: 100px;" title="DePcLogo">
          </div>
          <div class="flex-grow-1">
            <h3>Director founder</h3>
            <h4>DePCSuite SA</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis eum provident quo, quis quidem voluptas. Recusandae nulla sequi commodi maxime accusamus, iste ea reprehenderit enim neque? Explicabo nulla dolore alias.</p>
          </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="d-flex align-items-center shadow bg-white rounded p-3 mb-4">
          <div class="flex-shrink-0 d-none d-sm-flex me-4 p-3">
            <img src="ImagenesPortfolio/DePCLogo.jpg" alt="DePc" class="img-fluid baw" style="width: 100px;" title="DePcLogo">
          </div>
          <div class="flex-grow-1">
            <h3>Desarrollador Senior Full Stack</h3>
            <h4>Universidad de Buenos Aires</h4>
            <h5>Ago 2015 - Ene 2020</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          </div>
        </div>

      </div>
    </section>
      <!--Formación académica-->
      <section id="formacion">
        <div class="container">
          <!--Título principal-->
          <div class="row">
            <div class="col 12 py-5">
              <h2><i class="fa-solid fa-book"></i> Formación académica</h2>
            </div>
          </div>
          <!--Bachillerato-->
          <div class="row shadow bg-white rounded p-3 mb-4">
            <div class="col-12">
              <h3><i class="fa-solid da-graduation-cap"></i> Bachiller en economía y administración</h3>
              <h4> Escuela Cristiana Evangélica Argentina (ECEA Ituzaingó)</h4>
              <h5>2009 - 2018</h5>
              <h4>Colegio San Vicente Pompeya Pallotti (Castelar)</h4>
              <h5>2019 - 2020</h5>
            </div>
          </div>
          <!--UNLAM-->
            <div class="row shadow bg-white rounded p-3 mb-4 align-items-center">
              <div class="col-2 col-md-1 text-center">
                <img src="ImagenesPortfolio/UNLAMLogo.png" alt="UNLAM" class="img-fluid" style="max-width: 60px;">
              </div>
              <div class="col-10 col-md-11">
                <h3><i class="fa-solid fa-chalkboard-user"></i>Universidad Nacional de la Matanza</h3>
                <h4>Tecnicatura en Desarrollo Web</h4>
                <h5>2023 - 2024</h5>
              </div>
            </div>
            <!--Universidad de Morón-->
            <div class="row shadow bg-white rounded p-3 mb-4 align-items-center">
              <div class="col-2 col-md-1 text-center">
                <img src="ImagenesPortfolio/UMLogo.png" alt="UM" class="img-fluid" style="max-width: 60px ;">
              </div>
              <div class="col-10 col-md-11">
                <h3><i class="fa-solid fa-chalkboard-user"></i>Universidad de Morón</h3>
                <h4>Licenciatura en sistemas</h4>
                <h5>2024 - Actualidad</h5>
              </div>
            </div>
        </div>
        <!--class="row shadow bg-white rounded p-3 mb-4 align-items-center" crea una caja con sombra y bordes redondeados donde
        se guarda la información-->
      </section>
      <section id="cursos">
        <div class="container">
          <div class="row">
            <div class="col-12 py-5">
              <h2><i class="fa-solid fa-square-pen"></i>  Cursos de desarrollo personal</h2>
            </div>
          </div>
          <div class="row shadow bg-white rounded p-3 mb-4 align-items-center">
           <div class="col-10 col-md-11">
            <h3><i class="fa-solid fa-chalkboard-user"></i>Programa fomentar empleo</h3>
            <h4>Desarrollador Web Full Stack</h4>
            <h5>2024</h5>
          </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp" id="btn-whatsapp">
          <i class="fa-brands fa-whatsapp"></i>
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