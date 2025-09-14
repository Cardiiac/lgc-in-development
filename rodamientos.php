<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rodamientos - LGC Soluciones Industriales</title>
    <link rel="icon" type="image/png" href="image/nuevaprueba.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Pirata+One&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        include_once('./partials/header.php');
    ?>
    
    <!-- Breadcrumb -->
    <div class="breadcrumb-section">
        <div class="container breadcum-estilo">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="productos.php">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rodamientos</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero del producto -->
    <div class="producto-hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="producto-hero-imagen">
                        <img src="image/productos/rodamientos.png" alt="Rodamientos" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="producto-hero-content">
                        <h1 class="producto-titulo">RODAMIENTOS</h1>
                        <p class="producto-subtitulo">Soluciones de alta calidad para aplicaciones industriales</p>
                        <p class="producto-descripcion-hero">
                            Ofrecemos una amplia gama de rodamientos de las mejores marcas para satisfacer 
                            las necesidades de su industria. Contamos con rodamientos de bolas, rodillos, 
                            agujas y especiales para diversas aplicaciones.
                        </p>
                        <div class="producto-acciones">
                            <a href="#contacto" class="btn btn-cotizacion btn-lg">Solicitar Cotización</a>
                            <a href="tel:912920272" class="btn btn-llamar btn-lg">
                                <i class="bi bi-telephone-fill"></i> Llamar Ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Información detallada -->
    <div class="producto-info-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <h4>Especificaciones</h4>
                        <ul>
                            <li><i class="bi bi-check2 p-2"></i>Rodamientos de bolas</li>
                            <li><i class="bi bi-check2 p-2"></i>Rodamientos de rodillos</li>
                            <li><i class="bi bi-check2 p-2"></i>Rodamientos de agujas</li>
                            <li><i class="bi bi-check2 p-2"></i>Rodamientos especiales</li>
                            <li><i class="bi bi-check2 p-2"></i>Diversas medidas disponibles</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h4>Aplicaciones</h4>
                        <ul>
                            <li><i class="bi bi-check2 p-2"></i>Maquinaria industrial</li>
                            <li><i class="bi bi-check2 p-2"></i>Equipos de construcción</li>
                            <li><i class="bi bi-check2 p-2"></i>Sistemas de transmisión</li>
                            <li><i class="bi bi-check2 p-2"></i>Motores eléctricos</li>
                            <li><i class="bi bi-check2 p-2"></i>Equipos agrícolas</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h4>Ventajas</h4>
                        <ul>
                            <li><i class="bi bi-check2 p-2"></i>Alta durabilidad</li>
                            <li><i class="bi bi-check2 p-2"></i>Bajo mantenimiento</li>
                            <li><i class="bi bi-check2 p-2"></i>Excelente rendimiento</li>
                            <li><i class="bi bi-check2 p-2"></i>Marcas reconocidas</li>
                            <li><i class="bi bi-check2 p-2"></i>Garantía de calidad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de contacto -->
    <div class="producto-contacto-section" id="contacto">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2>¿Necesitas más información sobre nuestros rodamientos?</h2>
                    <p>Contáctanos para recibir una cotización personalizada y asesoría técnica especializada</p>
                    <div class="contacto-opciones">
                        <a href="https://wa.me/51912920272" class="btn btn-success btn-lg me-3" target="_blank">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <a href="tel:912920272" class="btn btn-primary btn-lg me-3">
                            <i class="bi bi-telephone-fill"></i> 912920272
                        </a>
                        <a href="contacto.php" class="btn btn-outline-primary btn-lg">
                            <i class="bi bi-envelope-fill"></i> Contacto
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Productos relacionados -->
    <div class="productos-relacionados-section py-5">
        <div class="container">
            <h3 class="text-center mb-5">Productos Relacionados</h3>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <a href="chumaceras.php" class="producto-link">
                        <div class="producto-card">
                            <div class="producto-imagen">
                                <img src="image/productos/chumaceras.png" alt="Chumaceras" class="img-fluid">
                            </div>
                            <div class="producto-info">
                                <div class="producto-badge">CHUMACERAS</div>
                                <p class="producto-descripcion">Ver más información <i class="bi bi-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="retenes.php" class="producto-link">
                        <div class="producto-card">
                            <div class="producto-imagen">
                                <img src="image/productos/retenes.png" alt="Retenes" class="img-fluid">
                            </div>
                            <div class="producto-info">
                                <div class="producto-badge">RETENES</div>
                                <p class="producto-descripcion">Ver más información <i class="bi bi-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="billas-de-acero.php" class="producto-link">
                        <div class="producto-card">
                            <div class="producto-imagen">
                                <img src="image/productos/billasdeacero.png" alt="Billas de Acero" class="img-fluid">
                            </div>
                            <div class="producto-info">
                                <div class="producto-badge">BILLAS DE ACERO</div>
                                <p class="producto-descripcion">Ver más información <i class="bi bi-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once('./partials/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>
</html>