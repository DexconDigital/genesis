<header class="main-header sticky-header">
    <div class="coltainer-fluit">
        <div class="row ">
            <div class="container">
                <div class=" col-md-12">
                    <div class="d-flex bd-highlight">
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

            <div class="col-12 border-top">
                <nav class="navbar navbar-expand-lg navbar-light mi_nav" style="padding: 0px 1rem;">
                    <div class="container">
                        <div class="">
                            <a class="navbar-brand contenedor_logo" href="#">
                                <img style="height: 100%;width: 100%;object-fit:contain;" src="images/logo.png" class="d-inline-block align-top" alt="">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="  navbar-nav ">
                                <li class="nav-item marge_li_nav">
                                    <a id="color_nav" class="nav-link " href="index.php">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item marge_li_nav">
                                    <a id="color_nav" class="nav-link" href="quienes_somos.php">Quiénes Somos</a>
                                </li>
                                <li class="nav-item marge_li_nav">
                                    <a id="color_nav" class="nav-link" href="servicios.php">Servicios</a>
                                </li>
                                <li class="nav-item marge_li_nav">
                                    <a id="color_nav" class="nav-link" href="inmuebles.php">Inmuebles</a>
                                </li>
                                <li class="nav-item dropdown marge_li_nav">
                                    <a id="color_nav" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
                                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                        <a id="color_nav" class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=583&tipo=2" target="_blank">Arrendatarios</a>
                                        <a id="color_nav" class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=583&tipo=2" target="_blank"> Propietarios</a>

                                    </div>
                                </li>
                                <li id="color_nav" class="nav-item marge_li_nav">
                                    <a id="color_nav" class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item marge_li_nav">
                                    <a id="color_nav" class="nav-link" href="contactos.php">Contáctanos</a>
                                </li>


                            </ul>
                            <div class="" style="margin-left: auto;">

                                <a class="nav-link contenedor_pse" href="#">
                                    <img style="height: 100%;width: 100%;object-fit:contain;" src="images/logopse.png" class="d-inline-block align-top" alt="">
                                </a>

                            </div>
                        </div>

                    </div>
                </nav>
            </div>

        </div>
    </div>
</header>