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
            <div class="border border-secondary">
                <div class="container">
                    <div class=" col-md-12">
                        <div class="d-flex bd-highlight border border-secondary">
                            <div class=" row mr-auto  bd-highlight ">
                                <a class="color_a_nav  a_linea p-2" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fa fa-phone m-2 li_color"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a>
                                <a class="color_a_nav p-2" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt m-2 li_color"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                            </div>

                            <div class="bd-highlight a_linea2 d-flex align-items-end ">
                                <a class="color_a_nav p-2  " href="tel:<?php echo $datos_contacto['whatsapp']['link'] ?>"><i class="fab fa-whatsapp m-2 li_color"></i><?php echo $datos_contacto['whatsapp']['imprimir'] ?></a>
                            </div>
                            <div class=" bd-highlight d-flex align-items-end ">
                                <a class="color_a_nav p-2" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope m-2 li_color "></i><?php echo $datos_contacto['correo']['correo'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light border border-secondary">
                <div class="container">
                    <div class="border border-secondary">
                        <a class="navbar-brand contenedor_logo" href="#">
                            <img style="height: 100%;width: 100%;object-fit:contain;" src="images/logo.png" class="d-inline-block align-top" alt="">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse border border-secondary" id="navbarNav">
                        <ul class="  navbar-nav " style="margin-left: 96px">
                            <li class="nav-item active">
                                <a class="nav-link " href="index.php">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item" style="">
                                <a class="nav-link" href="#">Quiénes Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Inmuebles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contáctanos</a>
                            </li>


                        </ul>

                    </div>
                    <div class="border border-secondary">

                        <a class="nav-link contenedor_pse" href="#">
                            <img style="height: 100%;width: 100%;object-fit:contain;" src="images/logopse.png" class="d-inline-block align-top" alt="">
                        </a>

                    </div>
                </div>
            </nav>
        </section>

        <section id="slider">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slide1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Bienvenidos</h1>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Bienvenidos</h1>
                            <p>Recorre este sitio y descubre todo lo que tenemos preparado para ti, encuentra toda la información sobre inmuebles y los contenidos especialmente pensados para hacer de la búsqueda inmobiliaria una experiencia cómoda y con resultados satisfactorios.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Bienvenidos</h1>
                            <p>Consulta en nuestra base de datos y encuentra el inmueble que estas buscando, fácil de usar y con resultados directos. Gracias por preferirnos y por contar con nosotros para cumplir tus sueños.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

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
                    <div class="col-3 margen_busca"><button style="background-color:#99cf16;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button></div>
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
                <div class="col-md-12 border border-secondary">
                    <div class="col-md-4 row border border-secondary">
                        <div class="col-md-3">
                            <i class="fas fa-tags color_venta"></i>
                        </div>
                        <div class="col-md-9">
                            <div>
                                <h4><?php echo $texto_servicios['ventas']['titulo'] ?></h4>
                            </div>
                            <div style=" text-align: justify;">
                                <p><?php echo $texto_servicios['ventas']['parrafos'][0] ?></p>
                            </div>
                            <div class="margen_busca"><button style="background-color:gray;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">ver
                                        más </span></button></div>
                        </div>
                    </div>
                    <div class="col-md-4 border border-secondary"></div>
                    <div class="col-md-4 border border-secondary"></div>
                </div>
            </div>
        </section>

    </div>

    <?php include('layout/archivosfooter.php'); ?>
</body>

</html>