<?php require 'variables/variables.php';
$page = 'Servicios' ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Servicios</title>
</head>

<body>
    <div class="container-fluit-body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="servicios" class="marge_servicios">
            <div class="container" style="margin-top: 52px;">
                <section id="arriendos">
                    <div class="col-md-12 row">
                        <div class="col-lg-8 col-md-7  magen_container_servi wow fadeInLeft" data-wow-delay="0.6s">
                            <div class="col-md-12  text-center">
                                <h1 class="color_servi gruesor_letra"><?php echo $texto_servicios['ventas']['titulo'] ?></h1>
                            </div>
                            <div class="col-md-12  ">
                                <p name="ventas" class="texto_servi"><?php echo $texto_servicios['ventas']['parrafos'][0] ?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 row  wow fadeInRight" style="margin-left: 15px;" data-wow-delay="0.6s">
                            <?php $r = $texto_servicios['ventas'];
                            echo '
                      <img class="img_venta" src="' . $r['imagen'] . '" alt="">'; ?>
                        </div>
                    </div>
                </section>
                <section id="avaluos">
                    <div class="col-md-12 row">
                        <div class="col-lg-4 col-md-5 mt-3 wow fadeInLeft" data-wow-delay="0.6s">
                            <?php $r = $texto_servicios['arriendos'];
                            echo '
                       <img class="img_arriendo" src="' . $r['imagen'] . '" alt="">'; ?>
                        </div>
                        <div class="col-lg-8 col-md-7  magen_container_servi wow fadeInRight" data-wow-delay="0.6s">
                            <div class="col-md-12  text-center">
                                <h1 name="arriendos" class="color_servi gruesor_letra"><?php echo $texto_servicios['arriendos']['titulo'] ?></h1>
                            </div>
                            <div class="col-md-12 ">
                                <p class="texto_servi"><?php echo $texto_servicios['arriendos']['parrafos'][0] ?></p>
                            </div>
                        </div>

                    </div>
                </section>
                <section id="">
                    <div class="col-md-12 row">
                        <div class="col-lg-8 col-md-7   magen_container_servi wow fadeInLeft" data-wow-delay="0.6s">
                            <div class="col-md-12  text-center">
                                <h1 class="color_servi gruesor_letra"><?php echo $texto_servicios['avaluos']['titulo'] ?></h1>
                            </div>
                            <div class="col-md-12 ">
                                <p class="texto_servi"><?php echo $texto_servicios['avaluos']['parrafos'][0] ?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5  wow fadeInRight" data-wow-delay="0.9s">
                            <?php $r = $texto_servicios['avaluos'];
                            echo '
                     <img class="img_venta" src="' . $r['imagen'] . '" alt="">'; ?>
                        </div>
                    </div>
                </section>




            </div>
        </section>

        <section id="footer">
            <?php include 'layout/footer.php' ?>
        </section>

    </div>





    <?php include('layout/archivosfooter.php'); ?>



</body>

</html>