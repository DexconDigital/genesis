<?php require 'variables/variables.php';
$page = 'detalle_inm' ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Detalle | Inmmueble</title>
</head>

<body>
    <div class="container-fluit-body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section class="margen_detalle_inm">
            <div class="container" style="margin-top: 40px;">
                <div class="col-md-12 row">
                    <div class="col-md-8">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/no_image.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/no_image.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/no_image.png" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left nex_slide "></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right nex_slide "></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div id="referencia_inmueble" class="col-md-12 mt-3  ">
                            <h4 class="property-single-detail-title"><strong>Descripción</strong></h4>
                            <p style="text-align: justify;">Texto</p>
                        </div>
                        <div class="col-md-12" style="margin-bottom: 12px;">
                            <h4 class="property-single-detail-title"><strong>Caracteristicas Internas</strong></h4>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <h4 class="property-single-detail-title"><strong>Caracteristicas Externas</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <h4 class="property-single-detail-title"><strong>Características alrededores</strong></h4>
                        </div>
                        <div class="col-md-12">
                            <!-- Video -->
                        </div>
                        <div class="col-md-12  p-0">
                            <div class="row">
                                <div style="width: 100%;">

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6105356778453!2d-74.06044668555337!3d4.663327743279707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a5edbe0bf49%3A0x936d31bf17fc020e!2sCl.+77+%2314-19%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1566400574822!5m2!1ses-419!2sco" width="" height="600" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <div class="search-box daily-email bg2 text-center">
                                <h5 class="titulo_similares" class="mb-0">Propiedades similares</h5>
                            </div>
                            <div class="lista_similares">
                                <ul class="marge_list_simi">
                                    <li class="li_similares">
                                        <div class="single-field">
                                            <div class="input-box">
                                                <input type="text" class="form-control" placeholder="Ciudad">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li_similares">
                                        <div class="single-field">
                                            <div class="input-box">
                                                <input type="text" class="form-control" placeholder="Tipo de inmueble">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li_similares">
                                        <div class="single-field">
                                            <div class="input-box">
                                                <input type="text" class="form-control" placeholder="Tipo de gestión">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cont_Boton_similares">
                                            <button style="padding: 4px;" type="button" class="btn btn-lg boton_similares">Buscar</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="search-box daily-email bg2 text-center">
                            <div>
                                <h5 class="titulo_similares" class="mb-0">Contacto con el asesor</h5>
                            </div>

                            <div class="contenedor_contact mt-3">
                                <figure class="cont_img">
                                    <img class="estulo_img_cont" src="images/no_image.png" alt="">
                                </figure>
                                <ul class="icon_cont">
                                    <li><i class="fa fa-map-marker"></i> Nombre</li>
                                    <li><i class="fa fa-phone"></i> Teléfono</li>
                                    <li><a><i class="fa fa-envelope"></i> Correo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
        </section>

        <section id="footer">
            <?php include 'layout/footer.php' ?>
        </section>

    </div>





    <?php include('layout/archivosfooter.php'); ?>



</body>

</html>