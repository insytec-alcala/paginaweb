<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FibraOlé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/alte-haas-grotesk" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <?php include 'navbar.php' ?>

    <header class="bg-white text-white text-center" style="background-image: url('./img/fibraole/index_principal.jpg');  background-position: center; background-repeat: no-repeat; padding: 5rem 0;">
        <!--Cambio de bg-dark a bg-white y background-size: contain para una imágen de fondo responsiva -->
    </header>
<!--Primera fila de tarjetas -->
    <section class="container-fluid  mt-5 mt-md-0 ">
    <div class="row justify-content-center text-center px-3" id="tarjetas">

    <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-5 d-flex justify-content-center">
    <div class="card tarjeta border-0 h-100">
        <div class="card-body d-flex flex-column justify-content-between">
            <!--mitad superior-->
            <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start mb-1">
                <div class="order-1 order-lg-2 mb-2 mb-lg-0">
                    <img src="./img/fibraole/icono_t_wifi.png" class="icono-tarjeta" alt="icono"> 
                </div>
                <div class="order-2 order-lg-1 flex-grow-1">
                    <p class="parrafo-superior card-text fw-bold text-uppercase text-start">LA FIBRA QUE SE ADAPTA A TI EL MEJOR SERVICIO</p>
                </div>
            </div>

            <!--mitad inferior -->
            <div class="mt-auto text-start">
                <p class="card-text mb-0 mt-1">YA ESTÁ AQUÍ:</p>
                <h1 class="card-title mb-3">1 GIGA</h1>
                <a href="#" class="btn  sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER MÁS!</a>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-5 d-flex justify-content-center">
        <div class="card tarjeta border-0 h-100">
            <div class="card-body d-flex flex-column justify-content-between">
                 <!--mitad superior-->
                 <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start mb-1">
                <div class="order-1 order-lg-2 mb-2 mb-lg-0">
                    <img src="./img/fibraole/icono_t_tv.png" class="icono-tarjeta" alt="icono"> 
                </div>
                <div class="order-2 order-lg-1 flex-grow-1">
                    <p class="parrafo-superior card-text fw-bold text-uppercase text-start">SERVICIO DE TV ZAPI +90 CANALES A TU DISPOSICIÓN</p>
                </div>
            </div>

                <!--mitad inferior -->
                <div class="mt-auto text-start">
                    <p class="card-text mb-0 mt-1">POR SOLO:</p>
                    <h1 class="card-title mb-3">7,99<span class="fs-3 fw-bold text-black d-inline">€/mes</span></h1>
                <a href="#" class="btn  sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER MÁS!</a>
                </div>
             </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-5 d-flex justify-content-center">
        <div class="card tarjeta border-0 h-100">
            <div class="card-body d-flex flex-column justify-content-between">
                 <!--mitad superior-->
                 <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start mb-1">
                <div class="order-1 order-lg-2 mb-2 mb-lg-0">
                    <img src="./img/fibraole/icono_t_tecnico.png" class="icono-tarjeta" alt="icono"> 
                </div>
                <div class="order-2 order-lg-1 flex-grow-1">
                    <p class="parrafo-superior card-text fw-bold text-uppercase text-start">SERVICIO TÉCNICO: SMARTPHONES PORTÁTILES...</p>
                </div>
            </div>

                <!--mitad inferior -->
                <div class="mt-auto text-start">    
                    <h1 class="ct-2 mb-0 mt-1">TALLER PROPIO</h1>
                    <span class="card-text mb-3">SERVICIO TÉCNICO A UN PASO</span>
                <a href="#" class="btn  sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER MÁS!</a>
                </div>
             </div>
        </div>
    </div>

    </div>
</section>
<!--Línea discontinua  -->
    <p class="mb-3">
        <hr class="discontinua">
    </p>

    <p class="fs-3 text-center fw-bolder">OPERADOR DE FIBRA Y MÓVIL EN ALCALÁ LA REAL Y COMARCA</p>
    <p class="fs-3 text-center fw-bolder">DISEÑAMOS TARIFAS PENSADAS PARA TI</p>

<!--Segunda fila de tarjetas -->
<section class="container my-5">
    <div class="row justify-content-center text-center px-3">
        <!-- Primera tarjeta -->
        <div class="col-12 col-md-6 col-xl-4 mb-4 d-flex justify-content-center">
            <div class="card tarjeta border-0 h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <!--mitad superior-->
                    <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start mb-3">
                        <div class="order-1 order-lg-2 mb-2 mb-lg-0">
                            <img src="./img/fibraole/icono_t_wifi.png" class="icono-tarjeta" alt="icono">
                        </div>
                        <div class="order-2 order-lg-1 flex-grow-1">
                            <p class="parrafo-superior card-text fw-bold text-uppercase text-start">FIBRA 1000</p>
                        </div>
                    </div>
                    <!--mitad inferior -->
                    <div class="mt-auto text-start">
                        <h1 class="card-title mb-3">19,90
                            <span class="fs-5 fw-bold text-black d-inline">€/mes</span>
                        </h1>
                        <div class="row mt-auto text-start">
                            <div class="col-xl-7 col-lg-12">
                                <p class="condiciones mt-auto">DURANTE 24 MESES<br>DESPUÉS:24,90€</p>
                            </div>
                            <div class="col-xl-5 col-lg-12">
                                <a href="#" class="btn sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER MÁS!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segunda tarjeta -->
        <div class="col-12 col-md-6 col-xl-4 mb-4 d-flex justify-content-center">
            <div class="card tarjeta border-0 h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <!--mitad superior-->
                    <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start mb-3">
                        <div class="order-1 order-lg-2 mb-2 mb-lg-0">
                            <img src="./img/fibraole/icono_t_wifi.png" class="icono-tarjeta" alt="icono">
                        </div>
                        <div class="order-2 order-lg-1 flex-grow-1">
                            <p class="parrafo-superior card-text fw-bold text-uppercase text-start">FIBRA 600</p>
                        </div>
                    </div>
                    <!--mitad inferior -->
                    <div class="mt-auto text-start">
                        <h1 class="card-title mb-3">18,90
                            <span class="fs-5 fw-bold text-black d-inline">€/mes</span>
                        </h1>
                        <div class="row mt-auto text-start">
                            <div class="col-xl-7 col-lg-12">
                                <p class="condiciones mt-auto">DURANTE 24 MESES<br>DESPUÉS:21,90€</p>
                            </div>
                            <div class="col-xl-5 col-lg-12">
                                <a href="#" class="btn sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER MÁS!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <?php include 'ventajas_genericas.php' ?>
  
<!--Línea discontinua -->
    <p class="mb-3">
        <hr class="discontinua">
    </p>

    <p class="fs-3 text-center fw-bolder">NUESTROS PACKS AHORRO <span class="text-warning">ESTRELLA</span></p>
<!-- Tercera línea de tarjetas-->
<section class="container-fluid  mt-5 mt-md-0 ">
    <div class="row justify-content-center text-center px-3">

    <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-5 d-flex justify-content-center">
    <div class="card tarjeta border-0 h-100">
        <div class="card-body d-flex flex-column justify-content-between">
            <!--mitad superior-->
            <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start mb-1">
                <div class="order-1 order-lg-2 mb-2 mb-lg-0">
                    <img src="./img/fibraole/icono_t_fibra+movil.png" class="icono-tarjeta" alt="icono"> 
                </div>
                <div class="order-2 order-lg-1 flex-grow-1">
                    <p class="parrafo-superior card-text fw-bold text-uppercase text-start">FIBRA 600<br>+MOVIL 120GB</p>
                </div>
            </div>

            <!--mitad inferior -->
            <div class="mt-auto text-start">
                    <h1 class="card-title mb-3">27,90
                        <span class="fs-5 fw-bold text-black d-inline">€/mes</p>
                    </h1>
                <div class="row mt-auto text-start">
                    <div class="col-xl-7 col-lg-12">
                        <span class="condiciones mt-auto">DURANTE 24 MESES<br>DESPUÉS:30,90€<br>
                    <span>*Ver condiciones generales</span>
                    </span>
                        
                    </div>
                    <div class="col-xl-5 col-lg-12">
                        <a href="#" class="btn sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER MÁS!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header class="text-white mt-2 mb-4 d-flex align-items-center justify-content-start custom-header-tv">
    <div class="container h-100 d-flex align-items-center">
        <div class="row w-60 h-100 justify-content-start align-items-center fs-2">
            <div class="col-12 col-md-8 col-lg-6 text-start content-box">
                <i class="bi bi-tv-fill fs-1 mb-3"></i>
                <p class="fs-3 fs-md-1 fw-bold mb-2 text-shadow">DISFRUTA DE MÁS DE 90 CANALES EN TU TELEVISIÓN</p>
                <p class="fs-5 text-shadow">Por tan solo:</p>
                <p class="display-4 display-md-2 fw-bold text-shadow">7,99€ </p>
                <p><span class="fs-6 text-shadow">(iva incluido)</span></p>
                <a href="#" class="btn btn-light btn-md mt-5 w-70 w-md-50 p-3 rounded-pill fw-bold " style="cursor: pointer;">QUIERO SABER MÁS</a>
            </div>
        </div>
    </div>
</header>


<!--Cuarta fila de tarjetas-->

<section class="container my-5 mt-5 ">
    <div class="row text-center justify-content-center">
        <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
            <div class="d-flex align-items-center mb-4">
                <img src="./img/fibraole/icono_movil01.png" class="logo" alt="Icono" class="me-2">
                <span class="text-uppercase fw-bold">TARIFAS DE MÓVIL</span>
            </div>
            <!-- Tarjeta 1 -->
            <div class="card card-secundaria cuartafila text-center border-0 h-100 d-flex flex-column">
                <div class="card-header sinlinea">
                    <span style="color: #5961ED">COMPARTIDA FAMILIAR 1</span>
                </div>
                <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text mb-2">
                        Hasta 3 líneas móviles <br>
                        con llamadas ilimitadas <br>
                        +60 GB para compartir* <br>
                        <small class="text-muted">Sin permanencia</small>
                    </p>
                    <h5 class="card-title fs-5 fw-bold mx-auto">Por tan solo:<br></h5>
                    <h5 class="card-title fs-1 fw-bold mb-2">20,90€<br></h5>
                    <p class="card-text mb-2">
                        <span><span class="fw-bold">al mes</span> (IVA incluido)</span>
                    </p>
                    <a href="#" class="btn btn-warning fw-bold mt-auto loquiero">¡LO QUIERO!</a>
                </div>
            </div>
        </div>

        
     
        <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
        <div class="d-flex align-items-center mb-4">
                <img src="./img/fibraole/icono_fijo.png" class="logo" alt="Icono" class="me-2">
                <span class="text-uppercase fw-bold">TARIFAS DE FIJO</span>
            </div>
    <!-- Tarjeta 2 -->
            <div class="card card-secundaria cuartafila text-center border-0 h-100 d-flex flex-column">
                <div class="card-header sinlinea">
                    <span style="color: #5961ED">TARIFA FIJO</span>
                </div>
                <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text mb-2">
                        Fijo sobre una conexión <br>
                        1000 min a fijo + <br>
                        100 min a móvil <br>
                        <small class="text-muted">Sin permanencia</small>
                    </p>
                    <h5 class="card-title fs-5 fw-bold mx-auto">Por tan solo:<br></h5>
                    <h5 class="card-title fs-1 fw-bold mb-2">7,90€<br></h5>
                    <p class="card-text mb-2">
                        <span><span class="fw-bold">al mes</span> (IVA incluido)</span>
                    </p>
                    <a href="#" class="btn btn-warning fw-bold mt-auto loquiero">¡LO QUIERO!</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center mt-3">
        <div class="col-12">
            <p class="fw-bold fs-6">*Línea con triple cobertura (Yoigo, Orange y Movistar)</p>
        </div>
    </div>
</section>
<!--Línea discontinua -->
<p class="mb-3">
        <hr class="discontinua">
    </p>
   
    <?php include 'tienda.php' ?>

<!-- footer-->
   <?php include 'footer.php'  ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>