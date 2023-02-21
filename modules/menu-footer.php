<?php
    function menu($img){
      include($_SERVER['DOCUMENT_ROOT'].'/libreria/vistas/libreria/modal_cart.php');
      // echo $_SERVER['DOCUMENT_ROOT'].'/libreria/vistas/libreria/modal_cart.php';

      if(isset($_SESSION['carrito'])){
        $carrito_mio = $_SESSION['carrito'];
      }

      if(isset($_SESSION['carrito'])){
        for($i=0; $i <= count($carrito_mio)-1; $i ++){
            if(isset($carrito_mio[$i])){
              if($carrito_mio[$i]!=NULL){ 
                if(!isset($carrito_mio['cantidad'])){$carrito_mio['cantidad'] = '0';}else{ $carrito_mio['cantidad'] = $carrito_mio['cantidad'];}
                $total_cantidad = $carrito_mio['cantidad'];
                $total_cantidad ++ ;
                if(!isset($totalcantidad)){$totalcantidad = '0';}else{ $totalcantidad = $totalcantidad;}
                $totalcantidad += $total_cantidad;
            }
          }
        }
      }

      //declaramos variables
      if(!isset($totalcantidad)){$totalcantidad = '0';}else{ $totalcantidad = $totalcantidad;}

    echo <<<EOT
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top border-bottom border-info p-2">
            <div class="container-fluid">
                <a class="navbar-brand ms-2" href="http://localhost/Libreria/" target="_self"> <img src="$img/img/icono.svg" style="height:35px;" alt="Icono de mariposa" style="width: 100%; min-width: 20%"> </a>
                <a class="navbar-brand" href="http://localhost/Libreria/" style="color: #b97f9f;"> Libreria Papiro ઇઉ </a>
            
                <button class="navbar-toggler" aria-label="Boton del menu desplegable" type="button" data-bs-toggle="collapse" data-bs-target="#menuR"> 
                    <span class="navbar-toggler-icon"> </span>
                </button>
            
                <div class="collapse navbar-collapse justify-content-end" id="menuR">
                    <ul class="navbar-nav me-3">
                        <li class="nav-item"> <a class="nav-link me-2" href="http://localhost/Libreria/"> <i class="bi bi-house-heart me-1"> </i> Inicio </a> </li>
                        <li class="nav-item"> <a class="nav-link me-2" href="http://localhost/Libreria/vistas/libreria/catalogo.php"> <i class="bi bi-journal-richtext me-1"> </i> Catálogo </a> </li>
                        <li class="nav-item"> <a class="nav-link me-2" href="http://localhost/Libreria/vistas/libreria/libreria.php"> <i class="bi bi-building me-1"> </i> Nosotros </a> </li>
                        <li class="nav-item"> <a class="nav-link me-2" href="http://localhost/Libreria/vistas/libreria/foros.php"> <i class="bi bi-textarea-resize me-1"> </i> Foros </a> </li>
        EOT;   

          if(!isset($_SESSION['Status'])){
            echo  '<li class="nav-item"> <a class="nav-link me-2" href="http://localhost/Libreria/vistas/usuario/"> <i class="bi bi-person me-1"> </i> Usuario </a> </li>';
          }else{
            echo '<li class="nav-item"> <a class="nav-link me-2" href="http://localhost/Libreria/vistas/usuario/"> <i class="bi bi-person-circle me-1"></i>'.  $_SESSION['Status'] .'</a> </li>';
          }

        echo <<<EOT
                        <li>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                              <li class="nav-item">
        EOT;
                            echo '<a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="cursor:pointer; background-color: #53213d; border-radius: 15%;"><i class="bi bi-cart"></i> &nbsp;'.$totalcantidad.'</a>';

        echo <<<EOT
                              </li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        EOT;
        
    };

    function footer(){
    echo <<<FOOTER
        <footer class="footer-16371 bg-primary bg-opacity- 75">
            <hr>
              <div class="container pt-3">
                <div class="row justify-content-center">
                  <div class="col-md-9 text-center">
                    <div class="footer-site-logo mb-4">
                      <a href="http://localhost/Libreria/" style="font-family: Hand;">Libreria Papiro </a>
                    </div>
                    <ul class="list-unstyled nav-links mb-3">
                      <li><a href="http://localhost/Libreria/vistas/libreria/catalogo.php">Catálogo</a></li>
                      <li><a href="http://localhost/Libreria/vistas/libreria/libreria.php">Nosotros</a></li>
                      <li><a href="http://localhost/Libreria/vistas/libreria/foros.php">Foros</a></li>
                      <li><a href="http://localhost/Libreria/vistas/usuario/logeado/index.php">Usuario</a></li>
                    </ul>
        
                    <div class="social">
                      <ul class="list-unstyled">
                        <li class="in"><a href="https://instagram.com/" aria-label="Icono de Instagram" target="_blank"><span class="bi bi-instagram" ></span></a></li>
                        <li class="fb"><a href="https://facebook.com/" aria-label="Icono de Facebook" target="_blank"><span class="bi bi-facebook"></span></a></li>
                        <li class="tw"><a href="https://twitter.com/" aria-label="Icono de Twitter" target="_blank"><span class="bi bi-twitter"></span></a></li>
                        <li class="pin"><a href="https://pinterest.com/" aria-label="Icono de Pinterest" target="_blank"><span class="bi bi-pinterest"></span></a></li>
                        <li class="dr"><a href="https://dribbble.com/" aria-label="Icono de Dribbble" target="_blank"><span class="bi bi-dribbble"></span></a></li>
                      </ul>
                    </div>
        
                    <div class="copyright pb-3">
                      <p class="mb-0"><small>&copy; 2022 - Copyright all rights reserved ||<br>
                                                            Julian Lopez - Nikol Ramírez</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
            
        FOOTER;
    };

    function menuAdmin($img){
    echo
      <<< MENUADMIN
        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top border-bottom border-info p-2">
          <div class="container-fluid">
      
            <a class="navbar-brand ms-2" href="http://localhost/Libreria/admin/vistas/inicio.php" target="_self"> <img src="$img/img/icono2.png" alt="Icono de mariposa" style="width: 100%; min-width: 20%"> </a>
            <a class="navbar-brand text-secondary" href="http://localhost/Libreria/admin/vistas/inicio.php"> Libreria Papiro - Administrador ઇઉ </a>
      
              <button class="navbar-toggler"  aria-label="Boton del menu desplegable"  type="button" data-bs-toggle="collapse" data-bs-target="#menuR"> 
                  <span class="navbar-toggler-icon"> </span>
              </button>
      
              <div class="collapse navbar-collapse justify-content-end" id="menuR">
                  <ul class="navbar-nav me-3">
                      <li class="nav-item"> <a class="nav-link me-2" href="http://localhost/Libreria/admin/vistas/usuario/"> <i class="bi bi-person-rolodex me-1"> </i> Usuarios </a> </li>
                      <li class="nav-item"> <a class="nav-link me-2" href="http://localhost/Libreria/admin/vistas/inventario/"> <i class="bi bi-journals me-1"> </i> Inventario </a> </li>
      
                      <li class="nav-item"> <a class="nav-link me-2" href="http://localhost/Libreria/admin/vistas/foro/"> <i class="bi bi-body-text me-1"> </i> Foros </a> </li>
                      <li class="nav-item"> <a class="nav-link me-2" href="http://localhost/Libreria/admin/codigo/controller/logout.php"> <i class="bi bi-door-closed-fill me-1"> </i> Cerrar Sesión </a> </li>
                  </ul>
              </div>
          </div>
        </nav>

      MENUADMIN;
    };
?>