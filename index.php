<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LGC - Soluciones industriales</title>
    <link rel="icon" type="image/png" href="image/nuevaprueba.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Pirata+One&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/504f1c1c87.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        include_once('./partials/header.php');
    ?> 
    <div class="hero-section text-center">
        <div class="row contenido-principal estilos-hero">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center col-hero1">
                <h1 class="text-start h1-titulo">Componentes industriales que impulsan tu producción</h1>
                <br>
                <p class="text-start p-titulo">Descubre todos los productos que tenemos para ti</p>
                <a href="sobrenosotros.php" class="ancla-hero text-start">VER MAS<i class="fa-solid fa-arrow-right ancla-icono"></i></a>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center col-hero2">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner carrusel-hero">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="image/muelle.jpg" class="imghero" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="image/rodamientos.jpg" class="imghero" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="image/torres.jpg" class="imghero" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="bi bi-caret-left-fill" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="bi bi-caret-right-fill" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </div>
        <div>
            
        </div>
    
    </div>
    
    <!-- Sección de características -->
    <div class="caracteristicas-section">
        <div class="row align-items-center">
                <!-- Columna de imágenes -->
                <div class="col-12 col-lg-6">
                    <div class="imagenes-flotantes">
                        <div class="imagen-principal">
                            <img src="image/tiposderodamientos.png" class="img-fluid rounded shadow" alt="Rodamientos industriales">
                        </div>
                        <div class="imagen-secundaria-1">
                            <img src="image/poleas2.png" class="img-fluid rounded shadow" alt="Poleas industriales">
                        </div>
                        <div class="imagen-secundaria-2">
                            <img src="image/motorsitos.png" class="img-fluid rounded shadow" alt="Motores industriales">
                        </div>
                    </div>
                </div>
                <!-- Columna de texto -->
                <div class="col-12 col-lg-6 ps-lg-5 mt-4 mt-lg-0">
                    <h2 class="display-5 fw-bold text-dark mb-3">Variedad, calidad y disponibilidad inmediata</h2>
                    <p class="lead text-muted">Confianza y seguridad es lo que necesitas</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de servicios -->
    <div class="servicios-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 mb-4">
                    <div class="servicio-card text-center">
                        <div class="servicio-icon">
                            <i class="bi bi-shop"></i>
                        </div>
                        <h5 class="servicio-titulo">TIENDA FÍSICA</h5>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="servicio-card text-center">
                        <div class="servicio-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h5 class="servicio-titulo">DELIVERY A LIMA Y PROVINCIA</h5>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="servicio-card text-center">
                        <div class="servicio-icon">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <h5 class="servicio-titulo">AL POR MAYOR Y MENOR</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de comunicación -->
    <div class="comunicacion-section">
        <div class="container">
            <div class="comunicacion-header">
                <h2 class="text-center mb-5">DISPONIBILIDAD PARA ATENDERTE POR CUALQUIER MEDIO</h2>
            </div>
            <div class="comunicacion-content">
                <div class="comunicacion-lado comunicacion-azul">
                    <div class="comunicacion-texto">
                        <h3>¡COMUNÍCATE CON<br>UN ASESOR YA!</h3>
                        <div class="comunicacion-boton">
                            <i class="bi bi-telephone-fill"></i>
                            <span>912920272</span>
                        </div>
                    </div>
                </div>
                <div class="comunicacion-mobile">
                    <img src="image/iphone.png" alt="Teléfono móvil" class="mobile-image">
                </div>
                <div class="comunicacion-lado comunicacion-verde">
                    <div class="comunicacion-texto">
                        <h3>¡CHATEA CON UN<br>VENDEDOR AHORA!</h3>
                        <div class="comunicacion-boton">
                            <i class="bi bi-whatsapp"></i>
                            <span>WHATSAPP</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include_once('./partials/footer.php');
    ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>