<?php require 'variables/variables.php';
require 'controllers/asesor_detalle.php';
$page = 'quienes' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Quiénes Somos</title>
</head>

<body>
    <div class="container-fluit-body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="somos" class="margen_servicios">
            <div class="col-md-12 mt-5">
                <div class="col-12">
                    <h1 class="text-center gruesor_letra"><?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?></h1>
                    <div class="linea_decora"></div>
                </div>
                <div class="container" style="text-align: justify; margin-top: 39px;">
                    <p><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?></p>
                    <p><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1] ?></p>
                </div>
                <div class="container">
                    <div class="col-md-12 row">
                        </head>

                        <!-- Swiper -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><?php $r = $slider_quienes_somos['imagenes'];
                                                            echo '
                                  <img style="width: 100%; height: 100% ; object-fit: cover;" src="' . $r[0] . '" alt="">'; ?>
                                </div>
                                <div class="swiper-slide"><?php $r = $slider_quienes_somos['imagenes'];
                                                            echo '
                                  <img style="width: 100%; height: 100% ; object-fit: cover;" src="' . $r[1] . '" alt="">'; ?>
                                </div>
                                <div class="swiper-slide"><?php $r = $slider_quienes_somos['imagenes'];
                                                            echo '
                                  <img style="width: 100%; height: 100% ; object-fit: cover;" src="' . $r[2] . '" alt="">'; ?>
                                </div>
                                <div class="swiper-slide"><?php $r = $slider_quienes_somos['imagenes'];
                                                            echo '
                                  <img style="width: 100%; height: 100% ; object-fit: cover;" src="' . $r[3] . '" alt="">'; ?>
                                </div>

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination "></div>
                            
                            
                        </div>

                    </div>
                </div>
            </div>
    </div>
    </section>

    <section id="hacemos">
        <div class=" container  mt-5 wow fadeInRight">
            <div class="col-12 ">
                <h1 class="text-center gruesor_letra"><?php echo $texto_quienes_somos['que_hacemos']['titulo'] ?></h1>
                <div class="linea_decora"></div>
            </div>
            <div class="col-md-12 row mt-5">
                <div class="col-lg-8 col-md-7 mb-3">
                    <div id="cuadro_cards" class="extra-info-text margin-control col-lg-12 col-md-12 col-sm-12 ">
                        <p><?php echo $texto_quienes_somos['que_hacemos']['parrafo'] ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 wow fadeInRight">
                    <?php $r = $texto_quienes_somos['que_hacemos'];
                    echo '
               <img id="cont_img_hacemos" src="' . $r['imagen'] . '" class="w-100" alt="">'; ?>
                </div>
            </div>
        </div>
        <div class=" container mt-3 espacion_contenedor wow fadeInLeft">
            <div class="col-12">
                <h1 class="text-center gruesor_letra"><?php echo $texto_quienes_somos['hacia_donde_vamos']['titulo'] ?></h1>
                <div class="linea_decora"></div>
            </div>
            <div class="col-md-12 row mt-5">
                <div class="col-lg-4 col-md-5 mb-3">
                    <?php $r = $texto_quienes_somos['hacia_donde_vamos'];
                    echo '
               <img id="cont_img_hacemos" src="' . $r['imagen'] . '" class="w-100" alt="">'; ?>

                </div>
                <div class="col-lg-8 col-md-7">
                    <div id="cuadro_cards" class="extra-info-text margin-control col-lg-12 col-md-12 col-sm-12">
                        <p><?php echo $texto_quienes_somos['hacia_donde_vamos']['parrafo'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" container  mt-5">
            <div class="col-12  ">
                <h1 class="text-center gruesor_letra">Nuestros Asesores</h1>
                <div class="linea_decora"></div>
            </div>
            <!-- Imagen requerida de 200 x 200 -->
            <div class="col-md-12 row mt-5">
                <?php if (isset($asesor_array)) {
                    modelo_asesor($asesor_array);
                } else {
                    echo '<div class="col 12">
                        <h3 class="text-center">No hay asesores para mostrar<h3>
                        </div>';
                }
                ?>
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