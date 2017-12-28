<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/LocalBusiness" lang="es">
    <head>
        <?php include 'head.html' ?>
    <?php include 'includes/menu.php' ?>

    <body>
        <div class="up-margin">    
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                    <li data-target="#carousel-example-2" data-slide-to="3"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="view hm-black-light">
                            <img itemprop="image" class="d-block w-100" src="img/carruzel/ServiciosSaint.png" alt="imagen de servicios saint">
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive x">Sistemas Saint</h3>
                            <p><a class="x" href="software.php"> Conoce los servicios que ofrecemos.</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view view hm-black-light">
                            <img itemprop="image" class="d-block w-100" src="img/carruzel/Computers-Keyboards-l.jpg" alt="imagen de teclado">
                            <div class="mask"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Soluciones Xemir</h3>
                            <p>Nos especializamos como técnicos de impresoras fiscales, cajas registradoras y balanzas, siendo distribuidor de "The Factory HKA" somos soluciones integrales para su empresa </p>
                        </div>
                    </div>
                    
                        <!--Mask color
                    <div class="carousel-item">
                        <div class="view view hm-black-light">
                            <img class="d-block w-100" src="img/carruzel/Computers-Keyboards-l.jpg" alt="Second slide">
                            <div class="mask"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">>Aplicaciones de Terceros:</h3>
                            <h3 class="h3-responsive"><a href="http://fullvisor.com/">FullVisor</a></h3>
                            <h3 class="h3-responsive"><a href="">Hybrid</a></h3>
                        </div>
                    </div>-->
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view hm-black-slight">
                            <img itemprop="image" class="d-block w-100" src="img/carruzel/mld.png" alt="imagen de logos multiservicios ld y algunos servicios">
                        </div>
                        <div class="carousel-caption">
                            <a href="http://mld.com.ve"><h3 class="h3-responsive">Multiservicios LD</h3></a>
                            <a href="http://mld.com.ve"><p>Empresa dedicada a Ventas de Equipos Multifuncionales,Servicios Técnicos, Outsourcing de impresión, Outsoursing de servicios técnicos, Centro de copiado</p></a>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                    <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <article class="carousel-inner">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <section class="col-md-4">
                            <div class="card">
                                <img itemprop="image" class="img-fluid" src="img/servicios/venta-soporte.jpg" alt="imagen representa ventas">
                                <div class="card-body">
                                    <h4 class="card-title">Venta y Servicios Técnicos de Equipos</h4>
                                    <p class="card-text">Poseemos alta experiencia en diversas ventas, y contamos con un equipo capacitado para los servicios ténicos</p>
                                    <a class="btn btn-blue-grey btn-rounded" id="claro" data-toggle="modal" data-target="#modal">Leer más</a>
                                </div>
                            </div>
                        </section>

                        <section class="col-md-4 clearfix d-none d-md-block">
                            <div class="card">
                                <img itemprop="logo" class="img-fluid" src="img/servicios/logsaint.jpg" alt="imagen del logo saint">
                                <div class="card-body">
                                    <h4 class="card-title">Adiestramiento Sistemas Saint</h4>
                                    <p class="card-text">somos canal integrador de Saint, contando con personal experimentado.</p>
                                    <a class="btn btn-blue-grey btn-rounded" id="claro1" data-toggle="modal" data-target="#modal1">Leer más</a>
                                </div>
                            </div>
                        </section>

                        <section class="col-md-4 clearfix d-none d-md-block">
                            <div class="card">
                                <img itemprop="image" class="img-fluid" src="img/servicios/tfhka.png" alt="imagen de the factory hka">
                                <div class="card-body">
                                    <h4 class="card-title">Integración de Sistemas Fiscales</h4>
                                    <p class="card-text">Somos distribuidores de "The Factory HKA", y conocemos que equipos fiscales necesita su negocio.</p>
                                    <a class="btn btn-blue-grey btn-rounded" id="claro2" data-toggle="modal" data-target="#modal2">Leer más</a>
                                </div>
                            </div>
                        </section>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                        <section class="col-md-4">
                            <div class="card">
                                <img itemprop="image" class="img-fluid" src="img/servicios/grafico.jpg" alt="imagen de diseño gráfico">
                                <div class="card-body">
                                    <h4 class="card-title">Diseño Gráfico y Tarjetas de Presentación</h4>
                                    <p class="card-text">Tenemos la mejor imprenta digital con equipos de última generación para ofrecerles:</p>
                                    <a class="btn btn-blue-grey btn-rounded" id="claro3" data-toggle="modal" data-target="#modal3">Leer Más</a>
                                </div>
                            </div>
                        </section>
                            
                        <section class="col-md-4">
                            <div class="card">
                                <img itemprop="image" class="img-fluid" src="img/servicios/alquiler-large.jpg" alt="imagen de alquiler">
                                <div class="card-body">
                                    <h4 class="card-title">Alquiler de Equipos Multifuncionales</h4>
                                    <a class="btn btn-blue-grey btn-rounded" id="claro4" data-toggle="modal" data-target="#modal4">Leer Más</a>
                                </div>
                            </div>
                        </section>

                        <section class="col-md-4 clearfix d-none d-md-block">
                            <div class="card">
                                <img itemprop="image" class="img-fluid" src="img/servicios/planos.jpg" alt="imagen representa impresión de planos">
                                <div class="card-body">
                                    <h4 class="card-title">Ploteo e Impresión de Planos</h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--/.Second slide-->

                    <!--/.three slide-->
                    <div class="carousel-item">
                        <section class="col-md-4 clearfix d-none d-md-block">
                            <div class="card">
                                <img itemprop="image" class="img-fluid" src="img/servicios/volantes.jpg" alt="imagen de volantes">
                                <div class="card-body">
                                    <h4 class="card-title">Imprenta Digital, Impresión de Volantes, Triptico y Manuales</h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </section>
                    </div>
                </article>
                <!--/.three slide-->
                <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
            <?php include 'includes/modalesIndex.html' ?>
            <?php include 'includes/footer.php'; ?>
            <script type="text/javascript" src="js/compiled.min.js"></script>
        </div>
    </body>
</html>