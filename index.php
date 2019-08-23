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

        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="hero">
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
            <div class="container border border-secondary">
                <div class="border border-secondary mt-5">
                    <h1 class="text-center"> Propiedades destacadas</h1>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item margen_targe">
                            <div class="col-md-12 row" style="margin-bottom: 40px;">
                                <div class="col-md-7 row border border-secondary">
                                    <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                    <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                    <span class="style_span_precio">Precio:</span>
                                </div>
                                <div class="col-md-5 border border-secondary">
                                    <div class="col-12 border border-secondary">
                                        <h5 class="text-center"> <strong>Tipo de Gestion</strong></h5>
                                    </div>
                                    <div class="row   border border-secondary  p-2">
                                        <div class="col-md-12">
                                            <li class="fas fa-map-marker-alt mr-2 mb-2 border border-secondary"> Ubicación:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-chart-area mr-2 mb-2 border border-secondary"> Área:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bath  mr-2 mb-2 border border-secondary"> Baños:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Alcobas:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Codigo:</li>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 row ">
                                <div class="col-md-7 row border border-secondary">
                                    <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                    <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                    <span class="style_span_precio">Precio:</span>
                                </div>
                                <div class="col-md-5 border border-secondary">
                                    <div class="col-12 border border-secondary">
                                        <h5 class="text-center"> <strong>Tipo de Gestion</strong></h5>
                                    </div>
                                    <div class="col-md-12  border border-secondary  p-2">
                                        <div class="col-md-12">
                                            <li class="fas fa-map-marker-alt mr-2 mb-2 border border-secondary"> Ubicación:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-chart-area mr-2 mb-2 border border-secondary"> Área:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bath  mr-2 mb-2 border border-secondary"> Baños:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Alcobas:</li>
                                        </div>
                                        <div class="col-md-12">
                                            <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Codigo:</li>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item border border-secondary">
                            <div class="item margen_targe">
                                <div class="col-md-12 row" style="margin-bottom: 40px;">
                                    <div class="col-md-7 row border border-secondary">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                        <span class="style_span_precio">Precio:</span>
                                    </div>
                                    <div class="col-md-5 border border-secondary">
                                        <div class="col-12 border border-secondary">
                                            <h5 class="text-center"> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="row   border border-secondary  p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 border border-secondary"> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 border border-secondary"> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 border border-secondary"> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 row ">
                                    <div class="col-md-7 row border border-secondary">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                        <span class="style_span_precio">Precio:</span>
                                    </div>
                                    <div class="col-md-5 border border-secondary">
                                        <div class="col-12 border border-secondary">
                                            <h5 class="text-center"> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="col-md-12  border border-secondary  p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 border border-secondary"> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 border border-secondary"> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 border border-secondary"> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item margen_targe">
                                <div class="col-md-12 row" style="margin-bottom: 40px;">
                                    <div class="col-md-7 row border border-secondary">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                        <span class="style_span_precio">Precio:</span>
                                    </div>
                                    <div class="col-md-5 border border-secondary">
                                        <div class="col-12 border border-secondary">
                                            <h5 class="text-center"> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="row   border border-secondary  p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 border border-secondary"> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 border border-secondary"> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 border border-secondary"> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 row ">
                                    <div class="col-md-7 row border border-secondary">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                        <span class="style_span_precio">Precio:</span>
                                    </div>
                                    <div class="col-md-5 border border-secondary">
                                        <div class="col-12 border border-secondary">
                                            <h5 class="text-center"> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="col-md-12  border border-secondary  p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 border border-secondary"> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 border border-secondary"> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 border border-secondary"> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item margen_targe">
                                <div class="col-md-12 row" style="margin-bottom: 40px;">
                                    <div class="col-md-7 row border border-secondary">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                        <span class="style_span_precio">Precio:</span>
                                    </div>
                                    <div class="col-md-5 border border-secondary">
                                        <div class="col-12 border border-secondary">
                                            <h5 class="text-center"> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="row   border border-secondary  p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 border border-secondary"> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 border border-secondary"> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 border border-secondary"> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 row ">
                                    <div class="col-md-7 row border border-secondary">
                                        <img style="object-fit: cover;width: 100%;height: 100%;" src="images/no_image.png" alt="">
                                        <span class="style_span_tipo_inmueble">Tipo de inmueble</span>
                                        <span class="style_span_precio">Precio:</span>
                                    </div>
                                    <div class="col-md-5 border border-secondary">
                                        <div class="col-12 border border-secondary">
                                            <h5 class="text-center"> <strong>Tipo de Gestion</strong></h5>
                                        </div>
                                        <div class="col-md-12  border border-secondary  p-2">
                                            <div class="col-md-12">
                                                <li class="fas fa-map-marker-alt mr-2 mb-2 border border-secondary"> Ubicación:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-chart-area mr-2 mb-2 border border-secondary"> Área:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bath  mr-2 mb-2 border border-secondary"> Baños:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Alcobas:</li>
                                            </div>
                                            <div class="col-md-12">
                                                <li class="fas fa-bed  mr-2 mb-2 border border-secondary"> Codigo:</li>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button>
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
                    <h1 class="text-center"><?php echo $frase_home['titulo'] ?></h1>
                </div>
                <div class="container" style="text-align: justify; margin-top: 39px;">
                    <p><?php echo $frase_home['parrafos'][0] ?><?php echo $frase_home['parrafos'][1] ?></p>
                </div>
                <div>
                    <?php $r = $frase_home;
                    echo '
               <img src="' . $r['imagen'] . '" class="w-100" alt="">'; ?>
                </div>
            </div>
        </section>

        <section id="servicios">
            <div class="container">
                <div class="d-flex justify-content-between col-md-12 row border border-secondary">
                    <div class="col-md-4 row border border-secondary">
                        <div class="col-md-3">
                            <i class="fas fa-tags color_venta"></i>
                        </div>
                        <div class="col-md-9">
                            <div>
                                <h4><strong><?php echo $texto_servicios['ventas']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p><?php echo $texto_servicios['ventas']['parrafos'][0] ?></p>
                            </div>
                            <div style="margin-top: 136px;" class="margen_busca"><button style="background-color:gray;padding: 5px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">ver
                                        más </span></button></div>
                        </div>
                    </div>
                    <div class="col-md-4 row border border-secondary">
                        <div class="col-md-3">
                            <i class="fas fa-sign color_venta"></i>
                        </div>
                        <div class="col-md-9">
                            <div>
                                <h4><strong><?php echo $texto_servicios['arriendos']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p><?php echo $texto_servicios['arriendos']['parrafos'][0] ?></p>
                            </div>
                            <div class="margen_busca"><button style="background-color:gray;padding: 5px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">ver
                                        más </span></button></div>
                        </div>
                    </div>
                    <div class="col-md-4 row border border-secondary">
                        <div class="col-md-3">
                            <i class="fas fa-balance-scale color_venta"></i>
                        </div>
                        <div class="col-md-9">
                            <div>
                                <h4><strong><?php echo $texto_servicios['avaluos']['titulo'] ?></strong></h4>
                            </div>
                            <div class="margen_serv" style=" text-align: justify;">
                                <p><?php echo $texto_servicios['avaluos']['parrafos'][0] ?></p>
                            </div>
                            <div class="margen_busca"><button style="background-color:gray;padding: 5px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">ver
                                        más </span></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="estadisticas">
            <div class="banner_estadi ">
                <div class="container  contenedor_banner">

                    <div class="row d-flex justify-content-between" style="padding: 73px;">
                        <div class="col-3 text-center" style="">
                            <div>
                                <i class="far fa-address-card tamaño_icono_banner"></i>
                                <h1>100</h1>
                                <h5><?php echo $texto_contador_estadisticas['parrafos'][0] ?></h5>
                            </div>
                        </div>
                        <div class="col-3 text-center" style="">
                            <div>
                                <i class="far fa-address-card tamaño_icono_banner"></i>
                                <h1>100</h1>
                                <h5><?php echo $texto_contador_estadisticas['parrafos'][1] ?></h5>
                            </div>
                        </div>
                        <div class="col-3 text-center" style="">
                            <div>
                                <i class="far fa-address-card tamaño_icono_banner"></i>
                                <h1>100</h1>
                                <h5><?php echo $texto_contador_estadisticas['parrafos'][2] ?></h5>
                            </div>
                        </div>
                        <div class="col-3 text-center" style="">
                            <div>
                                <i class="far fa-address-card tamaño_icono_banner"></i>
                                <h1>100</h1>
                                <h5><?php echo $texto_contador_estadisticas['parrafos'][3] ?></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="aliados">
            <div class="col-md-12">
                <div class="col-12">
                    <h1 class="text-center mt-5">Nuestros Aliados</h1>
                </div>
            </div>
            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="aliados_slide">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1401px, 0px, 0px); transition: all 0s ease 0s; width: 4206px;">
                        <div class="owl-item cloned" style="width: 457.333px; margin-right: 10px;">
                            <div class="item" style="height: 150px;">
                                <img style="height: 100%; object-fit: contain;" src="images/LOGO SIMI.png" alt="">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 457.333px; margin-right: 10px;">
                            <div class="item" style="height: 150px;">
                                <img style="height: 100%; object-fit: none;" src="images/LOGO EL LIBERTADOR.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section id="noticias">
            <div class="container mt-5">
                <div class="col-12">
                    <h1 class="text-center mt-5">Últimas Noticias</h1>
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