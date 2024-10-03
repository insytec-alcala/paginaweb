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

    <header class="bg-white text-white text-center" style="background-image: url('./img/fibraole/alcala_letras.jpg');  background-position: center; background-repeat: no-repeat; padding: 5rem 0;">
        <!--Cambio de bg-dark a bg-white y background-size: contain para una imágen de fondo responsiva -->
    </header>

    <section class="container my-5 mt-5 mt-md-0 ">
        <div class="row text-center " id="tarjetas">
            <div class="col-md-4 mb-4">
                <div class="card card-principal  border-0">
                    <div class="card-body">
                        <p class="card-text fw-bold fs-5">LA FIBRA QUE MAS SE ADAPTA A TI. EL MEJOR SERVICIO</p>
                        <p class="ms-5" style="color: black; text-align: center; margin-bottom: -30px ; font-weight: bold; font-size: 12px">PROXIMAMENTE:</p>
                        <h1 class="card-title mx-auto">1 GIGA</h1>
                        
                        <a href="#" class="btn btn-primary mx-auto sabermas">Saber más</a>
                    </div>
                </div>
                
            </div>

            <div class="col-md-4 mb-4">
                <div class="card card-principal border-0">
                    <div class="card-body">
                        <p class="card-text fw-bold fs-5">SERVICIO DE TV ZAPI +90 CANALES A TU DISPOSICIÓN</p>
                        <p class="ms-5" style="color: black;  text-align: center; margin-bottom: -30px ; font-weight: bold; font-size: 12px ">POR SOLO:</p>
                        <h3 class="card-title text-start zapi mx-auto">7,99€</h3>
                        
                        <a href="#" class="btn btn-primary mx-auto sabermas" sty>Saber más</a>
                    </div>
                </div>
            </div>
           

            <div class="col-md-4 mb-4">
                <div class="card card-principal border-0">
                    <div class="card-body">
                        <p class="card-text fw-bold fs-5">LA FIBRA QUE MAS SE ADAPTA A TI. Oferta de internet</p>
                        <p class="ms-5" style="color: black;  text-align: left; margin-bottom: -30px ; font-weight: bold; font-size: 12px ">PROXIMAMENTE:</p>
                        <h1 class="card-title">1 GIGA</h1>
                        
                        <a href="#" class="btn btn-primary mx-auto sabermas" sty>Saber más</a>
                    </div>
                </div>
            </div>
           
        </div>
    </section>

    <section class="container my-5">
        <div class="row text-center">
            <div class="col-md-6 mb-4 ">
                <div class="card text-center shadow-sm border-0">
                    <div class="card-header custom-header">
                         <span>FIBRA DE 300MB</span>
                     </div>
                    <div class="card-body">
                    <h5 class="card-title fs-1 fw-bold">10,90€</h5>
                        <p class="card-text">al mes</p>
                        <p class="card-text">
                            primeros 6 meses, despues 17,90€ <br>
                            +Alta Gratis (iva incluido)
                        </p>
                        <a href="#" class="btn btn-warning fw-bold">¡LO QUIERO!</a>
                    </div>

                </div>
            </div>
            
        </div>
    </section>

     
   <?php include 'footer.php'  ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>