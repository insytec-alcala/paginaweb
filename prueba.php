<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FibraOlé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/alte-haas-grotesk" rel="stylesheet">

</head>
<body>
    <?php include 'navbar.php' ?>

    <section class="container my-5 mt-5 mt-md-0 ">
    <div class="row justify-content-center text-center px-3" id="tarjetas">

    <div class="col-12 col-md-6 col-xl-4 mb-5 d-flex justify-content-center">
    <div class="card tarjeta border-0 h-100">
        <div class="card-body d-flex flex-column justify-content-between">
            <!--mitad superior-->
            <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start mb-3">
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
                <a href="#" class="btn btn-primary sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER MÁS!</a>
            </div>
        </div>
    </div>
</div>

    <div class="col-12 col-md-6 col-xl-4 mb-5 d-flex justify-content-center">
        <div class="card tarjeta border-0 h-100">
            <div class="card-body d-flex flex-column justify-content-between">
                 <!--mitad superior-->
                 <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start mb-3">
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
                    <h1 class="card-title mb-3">7,99<p class="fs-3 fw-bold text-black d-inline">€/mes</p></h1>
                <a href="#" class="btn btn-primary sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER MÁS!</a>
                </div>
             </div>
        </div>
    </div>

         <div class="col-12 col-md-6 col-xl-4 mb-5 d-flex justify-content-center">
        <div class="card tarjeta border-0 h-100">
            <div class="card-body d-flex flex-column justify-content-between">
                 <!--mitad superior-->
                 <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start mb-3">
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
                    <p class="card-text mb-3">SERVICIO TÉCNICO A UN PASO</p>
                <a href="#" class="btn btn-primary sabermas mb-3 mb-md-0 mt-2 mt-lg-0">¡SABER MÁS!</a>
                </div>
             </div>
        </div>
    </div>

    </div>
</section>
<!-- footer-->
   <?php include 'footer.php'  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>