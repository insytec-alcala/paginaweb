<nav class="navbar navbar-expand-lg navbar-light bg-light py-5">
  <div class="container-fluid d-flex align-items-center">
    <!-- Englobando todo en un container se alinea el navbar con el logo y el llama gratis -->
    <div class="d-flex align-items-center flex-grow-1">
    <a class="navbar-brand ms-5" href="#">
  <img src="./img/fibraole/logo_cabecera.png" alt="Logo" class="img-fluid" style="max-height: 40px;">
</a>
      
      <!-- Frase "Llama gratis" visible solo en pantallas pequeñas -->
      <span class="fw-bold me-3 llama-izquierda fs-5 text-warning ms-auto d-lg-none">Llama gratis: 123-456-789</span>
      
      <!--Botón hamburguesa -->
      <button class="navbar-toggler ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <!--offcanvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <!-- Menú de navegación -->
        <ul class="navbar-nav mx-auto justify-content-between">
          <li class="nav-item px-5 mx-2">
            <a class="nav-link fw-bold fs-5 text-dark" href="Fibra.php">Fibra</a>
          </li>
          <li class="nav-item px-5 mx-2">
            <a class="nav-link fw-bold fs-5 text-dark" href="packahorro.php">Packs Ahorro</a>
          </li>
          <li class="nav-item px-5 mx-2">
            <a class="nav-link fw-bold fs-5 text-dark" href="telefoniatv.php">Telefonía+TV</a>
          </li>
          <li class="nav-item px-5 mx-2">
            <a class="nav-link fw-bold fs-5 text-dark" href="serviciotecnico.php">Servicio Técnico</a>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Frase "Llama gratis" visible en pantallas grandes -->
    <span class="fw-bold me-3 llama-derecha fs-5 text-warning d-none d-lg-inline-block">Llama gratis: 123-456-789</span>
  </div>
</nav>

