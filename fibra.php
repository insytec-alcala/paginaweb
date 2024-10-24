<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FibraOlé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/alte-haas-grotesk" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/fibra.css">
</head>

<body>

    <?php include 'navbar.php' ?>

    <div class="text-center">
        <h1 class="display-5 titulo-grande mt-5">MÁS CERCA, MÁS RÁPIDO, MÁS NUESTRO</h1>
        <p class="lead subtitulo mt-1 fs-2">NUESTRAS TARIFAS DE FIBRA EN CASA</p>
    </div>


    <section class="container my-5">
        <div class="row justify-content-center text-center">

            <div class="col-12 col-md-6 col-xl-6 mb-4 fila2">
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
                            <h1 class="card-title mb-3">19,90<p class="fs-5 fw-bold text-black d-inline">€/mes</p>
                            </h1>
                            <div class="row mt-auto text-start">
                                <div class="col-xl-7 col-lg-12">
                                    <p class="condiciones mt-auto">DURANTE 24 MESES<br>DESPUÉS:24,90€</p>
                                </div>
                                <div class="col-xl-5 col-lg-12">
                                    <a href="#" class="btn btn-primary sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER
                                        MÁS!</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-6 mb-4 fila2">
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
                            <h1 class="card-title mb-3">18,90<p class="fs-5 fw-bold text-black d-inline">€/mes</p>
                            </h1>
                            <div class="row mt-auto text-start">
                                <div class="col-xl-7 col-lg-12">
                                    <p class="condiciones mt-auto">DURANTE 24 MESES<br>DESPUÉS:21,90€</p>
                                </div>
                                <div class="col-xl-5 col-lg-12">
                                    <a href="#" class="btn btn-primary sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER
                                        MÁS!</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
    </section>

    <?php include 'ventajas_genericas.php' ?>

    <section class="container my-5 w-100">
        <div class="container text-center p-5 seccion-tarifas">
            <h1 class="display-5 titulo-tarifas">¿CONOCES NUESTRAS TARIFAS DE 2ª VIVIENDA?</h1>
            <p class="lead subtitulo-tarifas mt-3">
                Disfruta tanto en tu hogar como en tu 2ª vivienda de todos los beneficios de FibraOlé. Te ofrecemos las
                mejores garantías y precios especiales para que disponer de fibra en ambos hogares no suponga un gran
                desembolso de dinero. Consúltanos ahora y te asesoramos de todas las ventajas que tenemos para ti.
            </p>
            <a href="#contacto" class="btn btn-light btn-lg mt-5">CONTÁCTANOS</a>
        </div>
    </section>

    <p class="mb-3 mt-3">
        <hr class="discontinua">
    </p>

    <div class="container text-center py-5 seccion-contratar">
        <h2 class="titulo-contratar">¿Por qué contratar Internet en casa con FibraOlé?</h2>
        <p class=" subtitulo-contratar">
            Elegir FibraOlé significa optar por un servicio local con atención personalizada. Contamos con un equipo
            <strong>100% local</strong> que entiende tus necesidades y una red de fibra propia que asegura una conexión
            rápida y estable.
            Con nosotros, no solo contratas internet; <strong>eliges calidad y compromiso</strong> con los tuyos.
        </p>
    </div>

    <p class="mb-3 mt-3">
        <hr class="discontinua">
    </p>
    <?php include 'tienda.php' ?>



    <?php include 'footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>