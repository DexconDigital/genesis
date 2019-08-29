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
                            <a class="color_a_nav p-2" target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><i class="fab fa-whatsapp m-2 li_color"></i><?php echo $datos_contacto['whatsapp']['imprimir'] ?></a>
                        </div>
                        <div class=" bd-highlight d-flex align-items-end ">
                            <a class="color_a_nav p-2" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope m-2 li_color "></i><?php echo $datos_contacto['correo']['correo'] ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 border-top">
                <nav id="" class="navbar navbar-expand-lg navbar-light mi_nav" style="padding: 0px 1rem;">
                    <div class="container">
                        <div class="">
                            <a class="navbar-brand contenedor_logo" href="index.php">
                                <img style="height: 100%;width: 100%;object-fit:contain;" src="<?php echo $Logo;?>" class="d-inline-block align-top" alt="">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="  navbar-nav mt-4 ">
                                <li class="nav-item marge_li_nav
                                    <?php if ($page == 'Inicio') {
                                        echo 'active';
                                    } ?>">
                                    <a id="color_nav" class= "nav-link " href="index.php"  >Inicio <span class="sr-only">(current)</span></a>
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
                            <div class="" style="margin-left: auto;">

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