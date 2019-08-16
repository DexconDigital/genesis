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
          <div class="col-3 margen_busca"><button  type="button" class="btn rounded-0 col-12" name=""><span>Buscar</span></button></div>
         </div>
            </div>
        </section>



    </div>

    <?php include('layout/archivosfooter.php'); ?>
</body>

</html>