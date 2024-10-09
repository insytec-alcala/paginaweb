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

    <header class="bg-white text-white text-center" style="background-image: url('./img/fibraole/alcala_con_letras.jpg');  background-position: center; background-repeat: no-repeat; padding: 5rem 0;">
        <!--Cambio de bg-dark a bg-white y background-size: contain para una imágen de fondo responsiva -->
    </header>
<!--Primera fila de tarjetas -->
    <section class="container my-5 mt-5 mt-md-0 ">
    <div class="row justify-content-center text-center px-3" id="tarjetas">
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <!--Añadir d-flex y justify-content-center hace que la tarjeta se centre dentro del div -->
            <div class="card card-principal border-0 h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text fw-bold ">LA FIBRA QUE MAS SE ADAPTA A TI. EL MEJOR SERVICIO</p>
                    <p class="text-center" style="color: orange; font-weight: bold; font-size: 12px">PROXIMAMENTE:</p>
                    <h1 class="card-title mx-auto">1 GIGA</h1>
                    <a href="#" class="btn btn-primary mx-auto sabermas">Saber más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card card-principal border-0 h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text fw-bold ">SERVICIO DE TV ZAPI +90 CANALES A TU DISPOSICIÓN</p>
                    <p class="text-center" style="color: orange; font-weight: bold; font-size: 12px">POR SOLO:</p>
                    <h3 class="card-title zapi mx-auto">7,99€</h3>
                    <a href="#" class="btn btn-primary mx-auto sabermas">Saber más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card card-principal border-0 h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text fw-bold ">LA FIBRA QUE MAS SE ADAPTA A TI. Oferta de internet</p>
                    <p class="text-center" style="color: orange; font-weight: bold; font-size: 12px">PROXIMAMENTE:</p>
                    <h1 class="card-title mx-auto">1 GIGA</h1>
                    <a href="#" class="btn btn-primary mx-auto sabermas">Saber más</a>
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
        <div class="row justify-content-center text-center">
            <div class="col-md-6 col-lg-5 mb-4 fila2">
                <div class="card card-secundaria  text-center border-0">
                    <div class="card-header custom-header" >
                         <span style="color: orange;">FIBRA DE 300MB</span>
                     </div>
                     <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text">al mes</p>
                    <h5 class="card-title fs-1 fw-bold">10,90€</h5>
                        <p class="card-text">
                            primeros 6 meses, despues 17,90€ <br>
                            +Alta Gratis (iva incluido)
                        </p>
                        <a href="#" class="btn btn-warning fw-bold mt-4 loquiero">¡LO QUIERO!</a>
                    </div>

                </div>
            </div>
            
            <div class="col-md-6 col-lg-5 mb-4 fila2">
                <div class="card card-secundaria text-center  border-0">
                    <div class="card-header custom-header">
                         <span style="color: orange;">FIBRA DE 600MB</span>
                     </div>
                     <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text">al mes</p>
                    <h5 class="card-title fs-1 fw-bold">10,90€</h5>
                        <p class="card-text">
                            primeros 6 meses, despues 19,90€ <br>
                            +Alta Gratis (iva incluido)
                        </p>
                        <a href="#" class="btn btn-warning fw-bold mt-4 loquiero">¡LO QUIERO!</a>
                    </div>

                </div>
            </div>

        </div>
    </section>
<!--Línea discontinua -->
    <p class="mb-3">
        <hr class="discontinua">
    </p>

    <p class="fs-3 text-center fw-bolder">NUESTROS PACKS AHORRO <span class="text-warning">ESTRELLA</span></p>
<!-- Tercera línea de tarjetas-->
    <section class="container my-5 mt-5 mt-2">
        <div class="row text-center ">
        <div class="col-md-4 mb-4 d-flex justify-content-center">
        <div class="card card-secundaria text-center border-0 h-100 d-flex flex-column">
                    <div class="card-header custom-header">
                         <span style="color: #5961ED">FIBRA DE 300MB</span>
                     </div>
                     <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text mb-2">Móvil 12GB + <br>
                        llamadas ilimitadas</p>
                    <h5 class="card-title fs-1 fw-bold mb-2">17,90€</h5>
                        <p class="card-text mb-2">
                            <span class="fw-bold ">primeros 6 meses, despues 24,90€ <br>
                            +Alta Gratis</span> (iva incluido)
                        </p>
                        <a href="#" class="btn btn-warning fw-bold mt-auto loquiero">¡LO QUIERO!</a>
                        <br>
                        <p class="card-text mt-2">
                            *Consulte disponibilidad geográfica
                            <p>
                    </div>

                </div>
            </div>
            
            <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card card-secundaria text-center border-0 h-100 d-flex flex-column">
                    <div class="card-header custom-header">
                         <span style="color: #5961ED">FIBRA DE 600MB</span>
                     </div>
                     <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text mb-2">Llamadas ilimitadas<br>
                        + 25GB</p>
                    <h5 class="card-title fs-1 fw-bold mb-2">19,90€</h5>
                        <p class="card-text mb-2">
                            <span class="fw-bold ">primeros 6 meses, despues 29,90€ <br>
                            +Alta Gratis</span> (iva incluido)
                        </p>
                        <a href="#" class="btn btn-warning fw-bold mt-auto loquiero">¡LO QUIERO!</a>
                        <br>
                        <p class="card-text mt-2">
                            *Consulte disponibilidad geográfica
                            <p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card card-secundaria text-center border-0 h-100 d-flex flex-column">
                    <div class="card-header custom-header">
                         <span style="color: #5961ED">FIBRA DE 600MB</span>
                     </div>
                     <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-text mb-2">3 Líneas llamadas<br>
                        ilimitadas* con 60 GB<br>
                        para compartir</p>
                    <h5 class="card-title fs-1 fw-bold mb-2">30,90€</h5>
                        <p class="card-text mb-2">
                            <span class="fw-bold ">primeros 6 meses, despues 39,90€ <br>
                            +Alta Gratis</span> (iva incluido)
                        </p>
                        <a href="#" class="btn btn-warning fw-bold mt-auto loquiero">¡LO QUIERO!</a>
                        <br>
                        <p class="card-text mt-2">
                            *Consulte disponibilidad geográfica
                            <p>
                    </div>

                </div>
            </div>

        </div>
    </section>
<!-- Segunda imagen-->
    <header class="bg-white text-white text-center mt-2 mb-4" style="background-image: url('./img/fibraole/alcala.jpg');  background-position: center; background-repeat: no-repeat; padding: 5rem 0;">
        <!--Cambio de bg-dark a bg-white y background-size: contain para una imágen de fondo responsiva -->
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
            <div class="card card-secundaria text-center border-0 h-100 d-flex flex-column">
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
            <div class="card card-secundaria text-center border-0 h-100 d-flex flex-column">
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
    <section class="container my-5">
    <div class="row text-center mt-5">
        <div class="col-12">
            <p class="fw-bold fs-3">ÚLTIMAS NOVEDADES</p>
        </div>
    </div>

    <div class="row gx-lg-5 text-center">
        <!-- Primera noticia -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card border-0 bg-transparent">
                <!-- Imagen destacada -->
                <div class="bg-image hover-overlay ripple mt-2" data-mdb-ripple-color="light">
                    <img src="./img/fibraole/castillo_locubin_con_letras.jpg" class="img-fluid rounded-2" style="width: 300px; height: 250px; object-fit: cover;" />
                </div>

                <!-- Contenido del artículo -->
                <div class="card-body">
                    <h5 class=" fw-bold">¿Cuáles son las ventajas de elegir a Insytec como tu operador de telecomunicaciones?</h5>
                    <p class="card-text">
                        Cuando se trata de elegir un operador de telecomunicaciones, es importante considerar diversas variables que...
                    </p>
                </div>
            </div>
        </div>

        <!-- Segunda noticia -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card border-0 bg-transparent">
                <!-- Imagen destacada -->
                <div class="bg-image hover-overlay ripple mt-2" data-mdb-ripple-color="light">
                    <img src="./img/fibraole/fuensanta_con_letras.jpg" class="img-fluid rounded-2" style="width: 300px; height: 250px; object-fit: cover;" />
                </div>

                <!-- Contenido del artículo -->
                <div class="card-body">
                    <h5 class=" fw-bold">¿Qué es WiMAX y cómo puede mejorar tu conexión a Internet?</h5>
                    <p class="card-text">
                        En la actualidad, estar conectado a internet se ha vuelto una necesidad fundamental en nuestra vida cotidiana.
                    </p>
                </div>
            </div>
        </div>

        <!-- Tercera noticia -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card border-0 bg-transparent">
                <!-- Imagen destacada -->
                <div class="bg-image hover-overlay ripple mt-2" data-mdb-ripple-color="light">
                    <img src="./img/fibraole/fuensanta_con_letras.jpg" class="img-fluid rounded-2" style="width: 300px; height: 250px; object-fit: cover;"/>
                </div>

                <!-- Contenido del artículo -->
                <div class="card-body">
                    <h5 class=" fw-bold">Conectividad sin límites: Descubre las tarifas de móvil ilimitadas de Insytec</h5>
                    <p class="card-text">
                        En la era digital en la que vivimos, estar conectados en todo momento se ha convertido en una necesidad. Nuestros...
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Línea discontinua -->
<p class="mb-3">
        <hr class="discontinua">
    </p>
<!-- footer-->
   <?php include 'footer.php'  ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>