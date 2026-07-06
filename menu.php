<nav class="navbar navbar-expand-md mb-4">
                        <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                              <li class="nav-item">
                                <a class="nav-link " <?php echo ($pg == "Inicio")? "active": ""; ?> href="index.php" type="submit">Inicio</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" <?php echo ($pg == "Sobre-mi")? "active": ""; ?> href="sobre-mi.php">Sobre mi</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" <?php echo ($pg == "Proyectos")? "active": ""; ?> href="proyectos.php">Proyectos</a>
                              </li>
                              <li class="nav-item">
                                <a href="contactos.php" class="nav-link" <?php echo ($pg == "Contactos")? "active": ""; ?> >Contactos</a><!--El profe le agrega "active" la parte
                                del nav-link en la que estamos, en este caso "Contactos"-->
                              </li>
                            </ul>
                            <div class="cv">
                                <a href="" target="_blank">Descargar mi CV <i class="fas fa-download"></i></a>
                            </div>
                          </div>
                        </div>
        </nav>