<!-- Codigo del preloader -->
<style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 15%;
    }
</style>
<div id="wrap-preload">
    <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script>
<!-- Fin de codigo preloader -->
<header class="main-header sticky-header">
    <div class="container-fluit">
        <div class="container contact-information ">
            <div class="col-md-12 d-md-block">
                <div class="d-flex bd-highlight ">
                    <div class=" col-lg-6 col-md-6 col-sm-2 row mr-auto  bd-highlight ">
                        <a class="color_a_nav  a_linea tamaño_tel_nav " href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?> "><i class="fa fa-phone m-2 li_color"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp </a>
                        <a class="color_a_nav tamaño_tel_tel " href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt m-2 li_color"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                    </div>

                    <div id="menu_sec_2" class=" col-lg-6 col-md-6 col-sm-22 row  bd-highlight  d-flex align-items-end">
                        <a class="color_a_nav  a_linea2 tamaño_tel_wapp" target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><i class="fab fa-whatsapp m-2 li_color"></i><?php echo $datos_contacto['whatsapp']['imprimir'] ?>&nbsp</a>
                        <a class="color_a_nav tamaño_tel_corr" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope m-2 li_color "></i><?php echo $datos_contacto['correo']['correo'] ?></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="coltainer-fluit">
        <div class="row ">
            <div class="col-12 border-top">
                <nav id="" class="navbar navbar-expand-lg navbar-light mi_nav" style="padding: 0px 1rem;">
                    <div class="container">
                        <div class="" style="margin-bottom: 18px;">
                            <a class="navbar-brand contenedor_logo" href="index.php">
                                <img src="<?php echo $Logo; ?>" class="d-inline-block align-top logo_principal" alt="">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class=" ml-auto navbar-nav mt-4 ">
                                <li class="nav-item marge_li_nav
                                    <?php if ($page == 'Inicio') {
                                        echo 'active';
                                    } ?>">
                                    <a id="color_nav" class="nav-link " href="index.php">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item marge_li_nav
                                    <?php if ($page == 'quienes') {
                                        echo 'active';
                                    } ?>">
                                    <a id="color_nav" class="nav-link" href="quienes_somos.php">Quiénes Somos</a>
                                </li>
                                <li class="nav-item marge_li_nav
                                    <?php if ($page == 'Servicios') {
                                        echo 'active';
                                    } ?>">
                                    <a id="color_nav" class="nav-link" href="servicios.php">Servicios</a>
                                </li>
                                <li class="nav-item marge_li_nav <?php if ($page == 'inmueble') {
                                                                        echo 'active';
                                                                    } ?> ">
                                    <a id="color_nav" class="nav-link" href="inmuebles.php?">Inmuebles</a>
                                </li>
                                <li class="nav-item dropdown marge_li_nav">
                                    <a id="color_nav" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
                                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                        <a id="color_nav" class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=583&tipo=2" target="_blank">Arrendatarios</a>
                                        <a id="color_nav" class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=583&tipo=1" target="_blank"> Propietarios</a>

                                    </div>
                                </li>
                                <li id="color_nav" class="nav-item marge_li_nav
                                    <?php if ($page == 'blog') {
                                        echo 'active';
                                    } ?>">
                                    <a id="color_nav" class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item marge_li_nav
                                    <?php if ($page == 'contacto') {
                                        echo 'active';
                                    } ?>">
                                    <a id="color_nav" class="nav-link" href="contactos.php">Contáctanos</a>
                                </li>


                            </ul>
                            <div class="">

                                <a class="nav-link contenedor_pse" target="_blank" href="https://www.mipagoamigo.com/MPA_WebSite/">
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

<div class="w-100px" id="espacio-menu">
</div>

<script>
    var altomenu = document.getElementById('medida_nav').offsetHeight;
    altomenu = altomenu + 'px';
    var espacio_menu = document.getElementById('espacio-menu').style.height = altomenu;
</script>