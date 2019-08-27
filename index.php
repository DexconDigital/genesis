<?php require 'variables/variables.php';
$page = 'Inicio'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>
</head>

<body>
    <div class="container-fluid body">

        <section id="menu ">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="hero" class="margen_slider">
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
                            <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="carousel-caption wow fadeInUp" data-wow-delay="0.6s" style="top:183px;">
                            <h1 id="style_slide_uno" class="h3-responsive"><?php echo $frases_slide_principal[0] ?></h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
                            <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="carousel-caption wow fadeInLeft" data-wow-delay="0.6s" style="top:183px;">
                            <h1 id="style_slide_dos" class="h3-responsive"><?php echo $frases_slide_principal[1] ?></h1>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
                            <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="carousel-caption wow fadeInDown" data-wow-delay="0.6s" style="top:183px;">
                            <h1 id="style_slide_tres" class="h3-responsive"><?php echo $frases_slide_principal[2] ?></h1>

                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left nex_slide "></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right nex_slide "></i></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->

        </section>

        <section id="buscador">
            <div class="container" style="margin-top: 34px;">
                <div class=" row col-12">
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Código"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Ciudad"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Barrio"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Tipo de Gestión"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Tipo de Inmueble"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Precio Mínimo"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Precio Máximo"></div>
                    <div class="col-3 margen_busca"><button style="background-color:#99cf16;  padding: 6px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button></div>
                </div>
            </div>
        </section>


        <section id=" Propiedades destacadas">
            <div class="container ">
                <div class=" mt-5" style="margin-bottom: 3%;">
                    <h1 class="text-center gruesor_letra espacio_propi">Propiedades Destacadas</h1>
                    <div class="linea_decora"></div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item margen_targe">
                            <div class="col-md-12 row" style="margin-bottom: 40px;">
                                <div class="col-md-7 row ">
                                    <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                    <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                </div>
                                <div class="col-md-5 ">
                                    <div class="col-12 ">
                                        <h5> <strong>Tipo de Gestion</strong></h5>
                                    </div>
                                    <div class="row     p-2">
                                        <div class="col-md-12">
                                            <li class="fas fa-map-marker-alt mr-2 mb-2 "> Ubicación:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-chart-area mr-2 mb-2 "> Área:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bath  mr-2 mb-2 "> Baños:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bed  mr-2 mb-2 "> Alcobas:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bed  mr-2 mb-2 "> Codigo:</li>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="style_span_precio">$Precio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 row ">
                                <div class="col-md-7 row ">
                                    <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                    <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                </div>
                                <div class="col-md-5 ">
                                    <div class="col-12 ">
                                        <h5> <strong>Tipo de Gestion</strong></h5>
                                    </div>
                                    <div class="col-md-12    p-2">
                                        <div class="col-md-12">
                                            <li class="fas fa-map-marker-alt mr-2 mb-2 "> Ubicación:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-chart-area mr-2 mb-2 "> Área:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bath  mr-2 mb-2 "> Baños:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bed  mr-2 mb-2 "> Alcobas:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bed  mr-2 mb-2 "> Codigo:</li>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="style_span_precio">$Precio</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item ">
                            <div class="item margen_targe">
                                <div class="col-md-12 row" style="margin-bottom: 40px;">
                                    <div class="col-md-7 row ">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>

                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="col-12 ">
                                            <h5> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="row     p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 "> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 "> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 "> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="style_span_precio">$Precio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 row ">
                                    <div class="col-md-7 row ">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="col-12 ">
                                            <h5> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="col-md-12    p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 "> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 "> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 "> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="style_span_precio">$Precio</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item margen_targe">
                                <div class="col-md-12 row" style="margin-bottom: 40px;">
                                    <div class="col-md-7 row ">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="col-12 ">
                                            <h5> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="row     p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 "> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 "> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 "> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="style_span_precio">$Precio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 row ">
                                    <div class="col-md-7 row ">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="col-12 ">
                                            <h5> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="col-md-12    p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 "> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 "> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 "> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="style_span_precio">$Precio</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item margen_targe">
                                <div class="col-md-12 row" style="margin-bottom: 40px;">
                                    <div class="col-md-7 row ">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="col-12 ">
                                            <h5> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="row     p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 "> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 "> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 "> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="style_span_precio">$Precio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 row ">
                                    <div class="col-md-7 row ">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="col-12 ">
                                            <h5> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="col-md-12    p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 "> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 "> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 "> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 "> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="style_span_precio">$Precio</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section id="bienvenidos">
            <div class="col-md-12 mt-3">
                <div class="col-12">
                    <h1 class="text-center gruesor_letra "><?php echo $frase_home['titulo'] ?></h1>
                    <div class="linea_decora text-center"></div>
                </div>
                <div class="container" style="text-align: justify; margin-top: 39px;">
                    <p><?php echo $frase_home['parrafos'][0] ?><?php echo $frase_home['parrafos'][1] ?></p>
                </div>
                <div class="col-md-9 img_bienvenidos">
                    <?php $r = $frase_home;
                    echo '
               <img src="' . $r['imagen'] . '" class="w-100" alt="">'; ?>
                </div>
            </div>
        </section>

        <section id="servicios">
            <div class="container" style="margin-bottom: 33px;">
                <div class="d-flex justify-content-between col-md-12 row ">
                    <div class="col-md-4 row ">
                        <div class="col-md-3">
                            <i class="fas fa-tags color_venta"></i>
                        </div>
                        <div class="col-md-9">
                            <div>
                                <h4><strong><?php echo $texto_servicios['ventas']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p>Nuestra experiencia en la venta de inmuebles nos permite brindar un servicio de alta calidad... <a style="color: #77c720;" href="servicios.php#"> Ver más</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 row ">
                        <div class="col-md-3">
                            <i class="fas fa-sign color_venta"></i>
                        </div>
                        <div class="col-md-9">
                            <div>
                                <h4><strong><?php echo $texto_servicios['arriendos']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p>La vivienda es una necesidad básica humana, por eso al serlo se convierte en un elemento... <a style="color: #77c720;" href="servicios.php#ventas"> Ver más</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 row ">
                        <div class="col-md-3">
                            <i class="fas fa-balance-scale color_venta"></i>
                        </div>
                        <div class="col-md-9">
                            <div>
                                <h4><strong><?php echo $texto_servicios['avaluos']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p>Saber el valor correcto de un inmueble es importante tanto para el comprador como para...<a style="color: #77c720;" href="servicios.php#avaluos"> Ver más</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="estadisticas">
            <div class="banner_estadi ">
                <div class="container  contenedor_banner">

                    <div class="row d-flex justify-content-between" style="padding: 73px;">
                        <div class="col-3 text-center color_estadis" style="">
                            <div>
                                <i class="far fa-address-card color_icono_banner"></i>
                                <h1>100</h1>
                                <h5 class="color_result"><?php echo $texto_contador_estadisticas['parrafos'][0] ?></h5>
                            </div>
                        </div>
                        <div class="col-3 text-center color_estadis" style="">
                            <div>
                                <i class="far fa-address-card color_icono_banner"></i>
                                <h1>100</h1>
                                <h5 class="color_result"><?php echo $texto_contador_estadisticas['parrafos'][1] ?></h5>
                            </div>
                        </div>
                        <div class="col-3 text-center color_estadis" style="">
                            <div>
                                <i class="far fa-address-card color_icono_banner"></i>
                                <h1>100</h1>
                                <h5 class="color_result"><?php echo $texto_contador_estadisticas['parrafos'][2] ?></h5>
                            </div>
                        </div>
                        <div class="col-3 text-center color_estadis" style="">
                            <div>
                                <i class="far fa-address-card color_icono_banner"></i>
                                <h1>100</h1>
                                <h5 class="color_result"><?php echo $texto_contador_estadisticas['parrafos'][3] ?></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="aliados">
            <div class="col-md-12">
                <div class="col-12">
                    <h1 class="text-center mt-5 gruesor_letra">Nuestros Aliados</h1>
                    <div class="linea_decora"></div>
                </div>
            </div>
<div class="col-md-12">
    <div class="col-md-8 text-center container_libert">
    <img style="height: 100%; object-fit: contain;" src="images/LOGO SIMI.png" alt="">
    </div>

    <div class="col-md-8 text-center container_libert">
    <img style="height: 100%; object-fit: none;" src="images/LOGO EL LIBERTADOR.png" alt="">
    </div>

    </div>
</div>
        </section>

        <section id="noticias">
            <div class="container mt-5">
                <div class="col-12">
                    <h1 class="text-center mt-5 gruesor_letra">Últimas Noticias</h1>
                    <div class="linea_decora"></div>
                </div>
                <div class="col-md-12 row mt-5">
                    <div class="col-md-4">
                        <div class="card" style="border-color: white;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body espacio_tageta mt-4">
                                <h4 class="card-title"><strong>Titulo Noticia</strong></h4>
                                <p>23 Agosto 2019 / Admin</p>
                                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-6" name=""><span style="color:white">ver más</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="border-color: white;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body espacio_tageta mt-4">
                                <h4 class="card-title"><strong>Titulo Noticia</strong></h4>
                                <p>23 Agosto 2019 / Admin</p>
                                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-6" name=""><span style="color:white">ver más</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="border-color: white;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body espacio_tageta mt-4">
                                <h4 class="card-title"><strong>Titulo Noticia</strong></h4>
                                <p>23 Agosto 2019 / Admin</p>
                                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-6" name=""><span style="color:white">ver más</span></button>
                            </div>
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