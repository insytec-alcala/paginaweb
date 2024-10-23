<link rel="stylesheet" href="styles/navbar.css">
<nav class="navbar navbar-expand-md navbar-light bg-light py-3 sticky-top">
  <div class="container-fluid d-flex align-items-center justify-content-between flex-nowrap">
    <!-- Logo -->
    <a class="navbar-brand ms-5 me-5 flex-shrink-0" href="#">
      <img src="./img/fibraole/logo_cabecera.png" alt="Logo" class="img-fluid" style="max-height: 40px;">
    </a>

  
    <!-- Botón hamburguesa (mantiene su alineación a la derecha) -->
    <button class="navbar-toggler  ms-auto me-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>


  <!--offcanvas-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
    <a class="navbar-brand ms-2" href="#">
          <img src="./img/fibraole/logo_cabecera.png" alt="Logo" class="img-fluid" style="max-height: 40px;">
        </a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   
    </div>
    <div class="offcanvas-body justify-content-md-end justify-content-xl-start row flex-xl-nowrap">
      <!-- Menú de navegación -->
          <ul class="navbar-nav ms-0 d-md-flex justify-content-start flex-wrap">
            <li class="nav-item d-flex align-items-center  xl-me-0 col">
              <a class="nav-link fw-bold text-dark text-nowrap" href="Fibra.php">
                <img class="logo-nav" src="img/fibraole/icono_wifi.png"> Fibra
              </a>
            </li>
            <li class="nav-item d-flex align-items-center  xl-me-0 col">
              <a class="nav-link fw-bold text-dark text-nowrap" href="packahorro.php">
                <img class="logo-nav " src="img/fibraole/icono_fibra+movil.png"> Fibra+Móvil
              </a>
            </li>
            <li class="nav-item d-flex align-items-center  xl-me-0 col">
              <a class="nav-link fw-bold text-dark text-nowrap" href="Fibra.php">
                <img class="logo-nav " src="img/fibraole/icono_wimax.png"> WIMAX
              </a>
            </li>
            <li class="nav-item d-flex align-items-center  xl-me-0 col">
              <a class="nav-link fw-bold text-dark text-nowrap" href="telefoniatv.php">
                <img class="logo-nav " src="img/fibraole/icono_movil_03.png"> Telefonía
              </a>
            </li>
            <li class="nav-item d-flex align-items-center  xl-me-0 col">
              <a class="nav-link fw-bold text-dark text-nowrap" href="telefoniatv.php">
                <img class="logo-nav " src="img/fibraole/icono_tv.png"> TV
              </a>
            </li>
            <li class="nav-item d-flex align-items-center  xl-me-0 col">
              <a class="nav-link fw-bold text-dark text-nowrap" href="serviciotecnico.php">
                <img class="logo-nav " src="img/fibraole/icono_tecnico.png"> Servicio Técnico
              </a>
            </li>
    </ul>
          <div class="llama-offcanvas mt-4 text-end">
        <span class="fw-bold fs-4 text-warning">Llama gratis:<br>
         694 498 620</span>
          </div>
      <span class="fw-bold llama-izquierda fs-5 text-warning d-none d-flex-wrap d-xl-inline-block me-xl-3 ms-xl-auto">Llama gratis: 694 498 620</span>

    </div>
  </div>
  </div>
</nav>