<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>KIDZ</title>
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" sizes="any">
    <link rel="stylesheet" type="text/css" href="./assets/css/bundle.min.css">
</head>

<body data-page="#page-index">
    <!--header-->
    <?php include 'header.php'; ?>
    <!--Fin header-->
    <!--Bloque banner principal servicio-->
    <section class="block-banner-internal-services type-icon-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-text d-flex flex-column justify-content-center align-items-center">
                        <h1>Psicología</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque banner principal servicio-->
    <!--Bloque informacion principal-->
    <section class="block-services-main">
        <div class="container">
            <div class="row mb-4 mt-n5">
                <div class="col-12 col-lg-6 text-center text-lg-right">
                    <a href="psicologia-individuales.php" target="_self" class="btn btn-primary mb-3">Individuales</a>
                </div>
                <div class="col-12 col-lg-6 text-center text-lg-left">
                    <a href="psicologia-grupales.php" target="_self" class="btn btn-primary mb-3 active">Grupales</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="container-slider mb-5 mb-lg-0">
                        <div class="btn-slider-services btn-next">
                            <i class="lni lni-chevron-right"></i>
                        </div>
                        <div class="btn-slider-services btn-prev">
                            <i class="lni lni-chevron-left"></i>
                        </div>
                        <div id="swiper-services-main" class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image: url('./assets/img/img-psicologia-grupal-1.jpg');"></div>
                                <div class="swiper-slide" style="background-image: url('./assets/img/img-psicologia-grupal-2.jpg');"></div>
                                <div class="swiper-slide" style="background-image: url('./assets/img/img-psicologia-grupal-3.jpg');"></div>
                                <div class="swiper-slide" style="background-image: url('./assets/img/img-psicologia-grupal-4.jpg');"></div>
                                <div class="swiper-slide" style="background-image: url('./assets/img/img-psicologia-grupal-5.jpg');"></div>
                            </div>
                        </div>
                        <div id="swiper-services-thumbs" class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image: url('./assets/img/img-psicologia-grupal-1.jpg');"></div>
                                <div class="swiper-slide" style="background-image: url('./assets/img/img-psicologia-grupal-2.jpg');"></div>
                                <div class="swiper-slide" style="background-image: url('./assets/img/img-psicologia-grupal-3.jpg');"></div>
                                <div class="swiper-slide" style="background-image: url('./assets/img/img-psicologia-grupal-4.jpg');"></div>
                                <div class="swiper-slide" style="background-image: url('./assets/img/img-psicologia-grupal-5.jpg');"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <p>La psicoterapia ayuda a los niños y adolescentes que experimentan dificultades con sus emociones o comportamiento. Los objetivos para la terapia pueden ser específicos (cambios en el comportamiento, la mejora de las relaciones con los amigos o la familia), o más generales (menos ansiedad y mayor autoestima).</p>
                    <p class="mt-4 mb-4"><b>• Talleres en habilidades sociales:</b></p>
                    <p>Los talleres están orientados a crear estrategias que permitan enseñar elementos positivos a los niños, que sirvan para su desarrollo personal y familiar. Estos talleres son lúdicos y terapéuticos sobre las emociones, los pensamientos y los comportamientos para la formación de habilidades emocionales y sociales.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>Otros Servicios</h3>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque informacion principal-->
    <!--Bloque servicios-->
    <section class="block-services-list justify-content-center mb-0 mb-lg-5">
        <a href="neuropsicologia-evaluacion-psicoeducativa.php" target="_self">
            <div class="card">
                <h5 class="card-header type-icon-1">Neuropsicología - Evaluación Psicoeducativa</h5>
            </div>
        </a>
        <a href="terapia-de-lenguaje-fonoaudiologia.php" target="_self">
            <div class="card">
                <h5 class="card-header type-icon-3 pb-5 pb-lg-0">Terapia de Lenguaje - Fonoaudiología</h5>
            </div>
        </a>
        <a href="terapia-ocupacional.php" target="_self">
            <div class="card">
                <h5 class="card-header type-icon-4 pb-5 pb-lg-0">Terapia Ocupacional</h5>
            </div>
        </a>
        <a href="nivelaciones-academicas-psicopedagogia.php" target="_self">
            <div class="card">
                <h5 class="card-header type-icon-5">Nivelaciones Académicas - Psicopedagogía</h5>
            </div>
        </a>
    </section>
    <!--Fin bloque servicios-->
    <!--Bloque reserva tu cita-->
    <?php include 'block-book-appointment.php'; ?>
    <!--Fin bloque reserva tu cita-->
    <!--Bloque quienes somos-->
    <?php include 'block-about-us.php'; ?>
    <!--Fin bloque quienes somos-->
    <!--footer-->
    <?php include 'footer.php'; ?>
    <!--Fin footer-->
    <script type="text/javascript" src="./assets/js/bundle.min.js"></script>
</body>

</html>